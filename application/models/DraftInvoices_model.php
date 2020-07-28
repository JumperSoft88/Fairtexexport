<?php
class DraftInvoices_model extends CI_Model 
{ 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function getAllInvoiceDraft()
    { 
        $this->db->select('*');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_status','draft');
        $this->db->order_by('invoice_id ', 'DESC');
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }

    public function getDraftSumTotalUSD()
    { 
        $this->db->select('SUM(invoice_total) as sumUSD');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_status','draft');
        $this->db->where('invoice_currency_code','USD');
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }

    public function getDraftSumTotalTHB()
    { 
        $this->db->select('SUM(invoice_total) as sumTHB');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_status','draft');
        $this->db->where('invoice_currency_code','THB');
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }

    public function updateStatus($id)
    {
        $data = array(
            'invoice_status' => 'success' 
    );
    
        $this->db->where('invoice_id', $id);
        $this->db->update('tbl_invoice', $data);
    }
 
    
}