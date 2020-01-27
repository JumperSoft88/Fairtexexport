<?php
class Member_model extends CI_Model 
{ 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function loginMember($username,$password){
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where($arrayName = array('member_username' => $username,'member_password' => $password ));
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }
}