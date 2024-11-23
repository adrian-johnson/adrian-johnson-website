<?php # classes/SiteVisitor.php
require_once('Visitor.php');

// Required to get visitor stats from front-end site.

class SiteVisitor extends Visitor {
	public function displayInfo() {
		echo "Date/Time: " . $this->visit_date . "<br>";
		echo "IP Address: " . $this->ip_address . "<br>";
		echo "User Agent: " . $this->user_agent . "<br>";
		echo "Referrer: " . $this->referrer . "<br>";
		echo "Current Page: " . $this->current_page . "<br>";
		echo "Query String: " . $this->query_string . "<br>";
		echo "Request Method: " . $this->request_method . "<br>";
		echo "Geo Info: " . $this->geo_info . "<br>";
		echo "City: " . $this->city . "<br>";
		echo "Country: " . $this->country . "<br>";
	}
	
	public function __construct($visitor_info) {
		$this->visit_date     = $visitor_info['visit_date'];
		$this->ip_address     = $visitor_info['ip_address'];
		$this->user_agent     = $visitor_info['user_agent'];
		$this->referrer       = $visitor_info['referrer'];
		$this->current_page   = $visitor_info['current_page'];
		$this->query_string   = $visitor_info['query_string'];
		$this->request_method = $visitor_info['request_method'];
		$this->geo_info = $visitor_info['geo_info'];
		$this->city           = $visitor_info['city'];
		$this->country        = $visitor_info['country'];
	}
}
