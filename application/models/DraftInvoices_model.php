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
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }

    public function getDraftSumTotal()
    { 
        $this->db->select('SUM(invoice_total) as sum');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_status','draft');
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }

    public function getDraftSumSubTotal()
    { 
        $this->db->select('SUM(invoice_sub_total) as subSum');
        $this->db->from('tbl_invoice'); 
        $this->db->where('invoice_status','draft');
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