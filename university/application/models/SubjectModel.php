<?php
  class SubjectModel extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
    $this->load->database();

   	}

	function subjectInsert($values)
	{
		$result=$this->db->insert('subjects',$values);
		return $result;
	
	
	}

	function subjectDisplayAll()
	{
		$query=$this->db->get('subjects');
		
		return $query->result();
	}

	function subjectdisplayById($subjectid)
	{
		$query=$this->db->query("select * from subjects where subjectid=$subjectid");
		
		return $query->row_array();
	
	}
	function subjectUpdate($subjectid,$values)
	{
		$this->db->where('subjects.subjectid',$subjectid);
		$result=$this->db->update('subjects',$values);
		return $result;
	
	}
	function subjectDelete($subjectid)
	{
		$this->db->where('subjects.subjectid',$subjectid);
		$result=$this->db->delete('subjects');
		return $result;
	
	}

	function getSubject($subjectid,$branchid)
	{
		$query = $this->db->query("select subjectid,subjectname from subjects where branchid=$branchid and semester=$subjectid");
		return $query->result_array();
	}
	
}
?>