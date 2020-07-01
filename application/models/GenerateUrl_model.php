GenerateUrl<?php
class GenerateUrl_model extends CI_Model 
{ 
    function __construct() {
        parent::__construct();
        $this->load->database();
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
 
    
}