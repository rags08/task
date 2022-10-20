<?php
class reg_model extends CI_Model {
    function saverecords($data){
        $this->db->insert('tbl_reg',$data);
        $this->db->last_query(); die;
        return true;
    }
    public function login(){
      //$email,$pass
       $this->db->select('*');
       $this->db->from('tbl_login');
      // $this->db->where('user_email',$email);
      // $this->db->where('user_password',$pass);
      
       if($query=$this->db->get())
       {
           return $query->result_array();
       }
       else{
         return false;
       }
    }
    
    
  function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("tbl_challenger");
    return true;
  }
 
  public function fetchAllData()
	{
    $this->db->limit(50);
		$query=$this->db->get("tbl_challenger");
		return $query->result_array();
	}
  function fetch_country()
  {
   $this->db->order_by("regcountry", "ASC");
   $query = $this->db->get("tbl_challenger");
   return $query->result();
  }
}