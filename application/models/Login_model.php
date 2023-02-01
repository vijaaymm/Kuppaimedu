<?php
class Login_model extends CI_Model
{
    public function login_user($u_username,$u_password)
    {

         $this->db->select('*');
         $this->db->from('users');
         $this->db->where('u_username',$u_username);
         $this->db->where('u_password',$u_password);
         $query=$this->db->get();
         if($query->num_rows() > 0)
        {
            return $query->row_array(); 
        }
        else
        {
        return false;
        }
    }   
}
?>