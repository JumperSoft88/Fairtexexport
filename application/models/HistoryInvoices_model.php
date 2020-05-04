<?php
class HistoryInvoices_model extends CI_Model 
{ 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function getAllInvoice()
    {
        $this->db->select('*');
        $this->db->from('tbl_invoice'); 
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }

    public function getSumTotal()
    { 
        $this->db->select('SUM(invoice_total) as sum');
        $this->db->from('tbl_invoice'); 
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }

    public function getSumSubTotal()
    { 
        $this->db->select('SUM(invoice_sub_total) as subSum');
        $this->db->from('tbl_invoice'); 
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }
}