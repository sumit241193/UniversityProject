<?php
	class branchModel extends CI_Model {
 
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   	
   	function insert_value($value)
   	{
   	$result=$this->db->insert('branches',$value);
   	return $result;
   	}
   	
   	function displayAllBranch()
   	{
		$query=$this->db->get('branches');
		return $query->result();
		
	}
	function getSemester($branchid)
   	{
		$query=$this->db->get('branches',$uid);
		return $query->result();
		
	}
	function branchDisplayById($branchid)
	{
		$q="select b.branchid, b.branchname, b.branchicon, b.totalsem,b.uid, (select u.uni_name from universities u where u.uni_id=b.uid) as buname from branches b where b.branchid=$branchid";
		$query=$this->db->query($q);
		return $query->row_array();
	
	
	}
	
	function branchUpdate($branchid,$values)
	{
		$this->db->where('branches.branchid',$branchid);
		$result=$this->db->update('branches',$values);
		return $result;
	
	}

	function branchUpdateImage($branchid,$values)
	{
		$this->db->where('branches.branchid',$branchid);
		$result=$this->db->update('branches',$values);
		return $result;
	
	}

	function branchDelete($branchid)
	{
		$this->db->where('branches.branchid',$branchid);
		$result=$this->db->delete('branches');
		return $result;
	
	}
	function getuid()
	{
		$query = $this->db->query('select uni_id,uni_name from universities');
		return $query->result_array();
	}

	function getbranch($uid)
	{
		$query = $this->db->query("select branchid,branchname from branches where uid=$uid");
		return $query->result_array();
	}


	function ShowBranchById($uid)
	{
		$query=$this->db->query("select * from branches where uid=$uid");

		return $query->result();
	
	}

	function displayAllBranchesByUniversityId($uni_id)
	{
		$q="SELECT branchid, branchname, branchicon,totalsem FROM branches WHERE uid=$uni_id";
 		$query=$this->db->query($q);
		return $query->result();
	}
}