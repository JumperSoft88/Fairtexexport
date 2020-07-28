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

    public function getSumTotalUSD()
    { 
        $this->db->select('SUM(invoice_total) as sumUSD');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_currency_code','USD');
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }

    public function getSumTotalTHB()
    { 
        $this->db->select('SUM(invoice_sub_total) as sumTHB');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_currency_code','THB');
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }
}