<?php
class Checkout_model extends CI_Model 
{ 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function saveInvoice($data,$invoiceNo)
    {

        $sql = "SELECT invoice_no from tbl_invoice Where invoice_no = '{$invoiceNo}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
 
        if($result -> num_rows() == 1){ 
            $this->db->where('invoice_no', $invoiceNo);
            $this->db->update('tbl_invoice', $data);
        }else{
            $this->db->insert('tbl_invoice', $data);
        }


        
    
    }

    public function deleteInvoiceDetail($invoiceNo)
    { 
        $this->db->where('product_invoice_no', $invoiceNo);
        $this->db->delete('tbl_invoice_detail');
    }

    public function saveInvoiceDetail($data,$invoiceNo)
    {
        // $sql = "SELECT product_invoice_no from tbl_invoice_detail Where product_invoice_no = '{$invoiceNo}' LIMIT 1";
        // $result = $this->db->query($sql);
        // $row = $result->row();
 
        // if($result -> num_rows() == 1){ 
        //     $this->db->where('product_invoice_no', $invoiceNo);
        //     $this->db->update('tbl_invoice_detail', $data);
        // }else{
        //     $this->db->insert('tbl_invoice_detail', $data);
        // }
        $this->db->insert('tbl_invoice_detail', $data);
        
    }
    
}