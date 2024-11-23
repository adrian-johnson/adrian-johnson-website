<?php # classes/_Database.php

class Database {
	protected $dbName = null;
	
	private $db;
	private $userDb;
	
	private $stmt;
	
	public function bind($param, $value, $type = null){
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	
	function delete($table, $params) {
		$this->query("DELETE FROM $table WHERE id = :id");
		$this->bind(':id', $params['id']);
		$this->execute();
		
		return;
	}
	
	public function execute() {
		return $this->stmt->execute();
	}
	
	function find_all_object_by_field_value($table, $class, $field, $value) {
		$query = 'SELECT * FROM `' . $table . '` WHERE `' . $field . '` = :value';
		
		$values = [
			'value' => $value
		];
		
		$this->stmt = $this->db->prepare($query);
		$this->stmt->execute($values);
		
		$return = [];
		while ($get = $this->stmt->fetchObject($class)) {
			$return[] = $get;
		}
		
		return $return;
	}
	
	public function find_by_field_values($table, $params, $connection, $comparison) {
		$this->query("SELECT * FROM $table WHERE ".$this->prepare_query($params, $connection, $comparison));
		$this->stmt->execute();
		
		return $this->stmt->fetchAll();
	}
	
	function find_by_single_field_value($table, $field, $value) {
		$query = 'SELECT * FROM `' . $table . '` WHERE `' . $field . '` = :value';
		
		$values = [
			'value' => $value
		];
		
		$this->stmt = $this->db->prepare($query);
		$this->stmt->execute($values);
		return $this->stmt->fetchAll();
	}
	
	function find_object($table, $field, $value, $class) {
		$query = 'SELECT * FROM `' . $table . '` WHERE `' . $field . '` = :value';
		
		$values = [
			'value' => $value
		];
		
		$this->stmt = $this->db->prepare($query);
		$this->stmt->execute($values);
		
		$return = [];
		while ($get = $this->stmt->fetchObject($class)) {
			$return[] = $get;
		}
		
		return $return[0];
	}
	
	function find_object_by_field($table, $field, $value, $class) {
		$query = 'SELECT * FROM `' . $table . '` WHERE `' . $field . '` = :value';
		
		$values = [
			'value' => $value
		];
		
		$this->stmt = $this->db->prepare($query);
		$this->stmt->execute($values);
		
		$return = [];
		while ($get = $this->stmt->fetchObject($class)) {
			$return[] = $get;
		}
		
		return $return[0];
	}
	
	function get_last_insert_id() {
		$this->query("SELECT last_insert_rowid() AS last_id");
		$last_insert_id = $this->single();
		return $last_insert_id['last_id'];
	}
	
	function insert_and_return_id($table, $params) {
		$sql = "INSERT INTO $table ".$this->prepare_query_for_insert($params, ',', '=');
		$this->query($sql);
		$this->execute();
		$insert_id = $this->get_last_insert_id();
		
		return $insert_id;
	}
	
	public function query($query) {
		$this->stmt = $this->db->prepare($query);
	}
	
	function prepare_query($params, $connection, $comparison) {
		$query = "";
		$started = false;
		
		foreach ($params as $key => $value) {
			if ($key != "id") {
				if ($started) $query .= ' ' . $connection . ' ';
				
				if (is_numeric($value)) {
					if (is_string($value) && ($value == "SELF")) $query_value = $key;
					else $query_value = $value;
				}
				else {
					$query_value = "'".$value."'";
				}
				
				if ((strpos($key, "pass") !== false) && (strpos($key, "pass_") === false)) {
					// this is a password field
					//$query_value = md5($query_value);
					$query_value = password_hash($query_value, PASSWORD_DEFAULT);
					$query .= " $key " . $comparison . " " ."'$query_value'";
				} else {
					$query .= " $key " . $comparison . " " . $query_value;
				}
				
				$started = true;
			}
		}
		
		return $query;
	}
	
	function prepare_query_for_insert($params, $connection, $comparison) {
		$query = "(";
		$started = false;
		
		foreach ($params as $key => $value) {
			if ($key != "id") {
				if ($started) $query .= $connection;
				
				if ((strpos($key, "pass") !== false) && (strpos($key, "pass_") === false)) {
					// this is a password field
					$query .= "$key";
				} else {
					$query .= " $key ";
				}
				$started = true;
			}
		}
		
		$started = false;
		$query .= ") VALUES (";
		
		foreach ($params as $key => $value) {
			if ($key != "id") {
				if ($started) $query .= $connection;
				
				if (is_numeric($value)) {
					if (is_string($value) && ($value == "SELF")) $query_value = $key;
					else $query_value = $value;
				}
				else {
					$query_value = "'".$value."'";
				}
				
				if ((strpos($key, "pass") !== false) && (strpos($key, "pass_") === false)) {
					// this is a password field
					$query_value = password_hash($query_value, PASSWORD_DEFAULT);
					$query .= "'$query_value'";
				} else {
					$query .= $query_value;
				}
				
				$started = true;
			}
		}
		
		$query .= ")";
		
		return $query;
	}
	
	public function single() {
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	public function update($table, $params) {
		$this->query("UPDATE $table SET ".$this->prepare_query($params, ',', '=')." WHERE id = :id");
		$this->bind(':id', $params['id']);
		$this->execute();
		
		return;
	}
		
	function __construct($thisDbName) {
		$thisDbFile =__DIR__.'/../data/'.$thisDbName;
		
		$this->db = new PDO('sqlite:/'.$thisDbFile) or die("Cannot find the database " . $thisDbName);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}
