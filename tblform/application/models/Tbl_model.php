<?php
class Tbl_model extends CI_Model 
{
    /*Display*/
    function display_records()
  {
    $query=$this->db->get("tbl_challenger");
    return $query->result();
  }
  function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("tbl_challenger");
    return true;
  }
}
 