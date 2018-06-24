<?php
  class StateCityModel extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   	
   	
   	function GetAllState()
   	{
		$query=$this->db->get('states');
		
		return $query->result();
	}
	
	
	function GetAllCity($state)
	{
		$query=$this->db->query("select * from cities where state_id=$state");
		
		return $query->result();
	}
}