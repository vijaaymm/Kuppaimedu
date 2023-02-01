<?php
class Custbook_model extends CI_Model
{
 function insert($c_data)
 {
  $this->db->insert('customer_booking', $c_data);
  return $this->db->insert_id();
 }
}
?>