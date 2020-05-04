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

    public function getAllCustomer()
    {
        $this->db->select('*');
        $this->db->from('tbl_customer'); 
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }

    public function getAllTypeCost()
    {
        $this->db->select('*');
        $this->db->from('tbl_type_cost'); 
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    } 
    
    public function getCustomer()
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');  
        $this->db->order_by("customer_id", "asc");
        $query = $this->db->get();
      //  $result = $query->result(); 
  
        return $query;
    }

    public function getAllMember()
    {
        $this->db->select('*');
        $this->db->from('tbl_member');  
        $this->db->order_by("member_id", "asc");
        $query = $this->db->get();
        $result = $query->result(); 
  
        return $result;
    }

    public function getMemberByID($memberID)
    {
        $this->db->select('*');
        $this->db->from('tbl_member');  
        $this->db->where('member_id', $memberID);
        $this->db->order_by("member_id", "asc");
        $query = $this->db->get();
        $result = $query->result(); 
  
        return $result;
    }

    public function updateMember($id,$data)
    {  
        $this->db->where('member_id', $id);
        $this->db->update('tbl_member', $data);
    }


    public function getCustomerByCustomerName($customerName)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');  
        $this->db->where('customer_name', $customerName);
        $this->db->order_by("customer_id", "asc");
        $query = $this->db->get();
        $result = $query->result(); 
  
        return $result;
    }

    public function getCustomerByID($customerID)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');  
        $this->db->where('customer_id', $customerID);
        $this->db->order_by("customer_id", "asc");
        $query = $this->db->get();
        $result = $query->result(); 
  
        return $result;
    }

    public function insertUser($data)
    {
        $this->db->insert('tbl_member', $data);
    }

    
}