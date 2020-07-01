<?php
class Customer_model extends CI_Model 
{ 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertCustomer($data)
    {
        $this->db->insert('tbl_customer', $data);
    }

    public function getAllCustomer()
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');  
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }

    public function getCustomerByID($id)
    { 
        $this->db->select('*');
        $this->db->from('tbl_customer'); 
        $this->db->where('customer_id',$id);
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }


    public function updateCustomer($id,$data)
    {  
        $this->db->where('customer_id', $id);
        $this->db->update('tbl_customer', $data);
    }
}