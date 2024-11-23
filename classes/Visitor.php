<?php # classes/Visitor.php
// Main visitor class.

class Visitor {
	public $id = null;
	public $visit_date = null;
	public $ip_address = null;
	public $user_agent = null;
	public $referrer = null;
	public $current_page = null;
	public $query_string = null;
	public $request_method = null;
	public $geo_info = null;
	public $city = null;
	public $country = null;

	public function add_visitor($params) {
		if (defined('ENVIRONMENT') && ENVIRONMENT === 'dev') return;
		$database = new VisitorDb();
		return $database->insert_and_return_id(VisitorDb::tbl_visitors, $params);
	}
	
	public function city() {
		return $this->city;
	}
	
	public function country() {
		return $this->country;
	}
	
	public function current_page() {
		return $this->current_page;
	}
    
    public function date() {
		$visit_date = new DateTime($this->visit_date);
		$formattedDate = $visit_date->format('d-M-Y g:ia');
		
		return $formattedDate;
    }
    
    public function get_all_visitors() {
        $database = new VisitorDb();
        return $database->find_all_object(VisitorDb::tbl_visitors, 'Visitor');
    }
	
	public function get_all_visitors_sorted($sort_field, $sort_order) {
		$database = new VisitorDb();
		return $database->find_all_object_sort(VisitorDb::tbl_visitors, 'Visitor', $sort_field, $sort_order);
	}
	
	public function get_visitor_by_field($fieldname, $fieldvalue) {
		$database = new VisitorDb();
		return $database->find_object_by_field(VisitorDb::tbl_visitors, $fieldname, $fieldvalue, 'Visitor');
	}
	
	public function id() {
		return $this->id;
	}
    
    public function ip_address() {
        return $this->ip_address;
    }
	
	public function query_string() {
		return $this->query_string;
	}
	
	public function referrer() {
		return $this->referrer;
	}
	
	public function user_agent() {
		return $this->user_agent;
	}

    public function __construct() {
    }
}