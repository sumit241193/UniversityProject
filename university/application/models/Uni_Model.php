 <?php
	class Uni_Model extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   	
   	function insert_value($value)
   	{
   	$result=$this->db->insert('universities',$value);
   	return $result;
   	}
   	
   function displayAll()
  	{
    $q="select u.uni_id,u.uni_name,u.email,u.contect_person,u.mobile,u.phone,u.address,(select s.statename from states s where s.state_id=u.state)as state,(select c.cityname from cities c where c.city_id=u.city) as city,u.pincode,u.description,u.logo from universities u";
    $query=$this->db->query($q);
    return $query->result();
   	}
   	
   	function displayById($uid)
   	{
		$q="select u.uni_id,u.uni_name,u.email,u.contect_person,u.mobile,u.phone,u.address,u.state,(select s.statename from states s where s.state_id=u.state)as state,u.city,(select c.cityname from cities c where c.city_id=u.city) as city,u.pincode,u.description,u.logo from universities u where u.uni_id=$uid";
      $query=$this->db->query($q);
	   return $query->row_array();
	}
	
	function update($uid,$values)
	{$this->db->where('universities.uni_id',$uid);
	 $result=$this->db->update('universities',$values);
	 return($result);
	}
	
	function delete($uid)
	{
		$this->db->where('universities.uni_id',$uid);
	 $result=$this->db->delete('universities');
	 return($result);
	}

  function editpicture($uid,$values)
  {
    $this->db->where('universities.uni_id',$uid);
    $result=$this->db->update('universities',$values);
    return $result;
  }

  function displayAllUniversitiesByName($pat)
    {
      $q="select u.uni_id,u.uni_name,u.email,u.contect_person,u.mobile,u.phone,u.address,u.state,(select s.statename from states s where s.state_id=u.state)as state,u.city,(select c.cityname from cities c where c.city_id=u.city) as city,u.pincode,u.description,u.logo from universities u where uni_name like '%$pat%'";
     // $q="select * from universities where uni_name like '%$pat%'";
      $query=$this->db->query($q);
      return $query->result();
    }
}
?>