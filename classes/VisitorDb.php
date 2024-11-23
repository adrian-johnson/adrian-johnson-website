<?php	# classes/VisitorDb.php
require_once('_Database.php');

class VisitorDb extends Database {
	const tbl_visitors = 'visitors';
	
	public function __construct() {
		$dbName = "visitors.sqlite";
		parent::__construct($dbName);
	}
}
