<?php
class Product_model extends CI_Model 
{ 

    protected $table = 'tbl_product_detail'; 

    function __construct() {
        parent::__construct(); 
    }

    public function get_count() { 
        return $this->db->count_all($this->table);
    }

    public function get_authors($limit, $start) { 
        $this->db->limit($limit, $start); 
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function insertProduct($data)
    {
        $this->db->insert('tbl_product', $data);
    }

    public function getProductByName($name)
    {
        $this->db->select('product_id');
        $this->db->from('tbl_product'); 
        $this->db->where('product_name ', $name);
        $query = $this->db->get();
        $result = $query->result(); 
 
        return $result;
    }

    public function insertProductDetail($data)
    {
        $this->db->insert('tbl_product_detail', $data);
    }

    public function getAllProduct()
    {
        $this->db->select('*');
    //    $this->db->from('tbl_product_detail');  
    //   $this->db->order_by("product_detail_id", "asc");
        $this->db->from('tbl_product_items');  
        $this->db->order_by("product_id", "asc");
        $query = $this->db->get();
      //  $result = $query->result(); 
  
        return $query;
    }

    public function getAllProductItems()
    {
        $this->db->select('*');
        $this->db->from('tbl_product_items');  
        $this->db->order_by("product_id", "asc");
        $query = $this->db->get();
      //  $result = $query->result(); 
  
        return $query;
    }

    
    public function getProductDetailByID($id)
    {
        $this->db->select('*');
        // $this->db->from('tbl_product_detail');  
        // $this->db->where('product_detail_id', $id);
        // $this->db->order_by("product_detail_id", "asc");
        $this->db->from('tbl_product_items');  
        $this->db->where('product_id', $id); 
        
        $query = $this->db->get();
        $result = $query->result(); 
  
        return $result;
    } 

    public function getMaxInvoice(){ 
        
        $this->db->select_max('invoice_id');
        $query = $this->db->get('tbl_invoice'); 
        $result = $query->result(); 

        return $result[0]->invoice_id;
    }

    public function insertInvoiceId($data)
    {
        $this->db->insert('tbl_invoice', $data);
    }

    public function updateTblInvoice($id,$data)
    {
        $this->db->where('invoice_id', $id);
        $this->db->update('tbl_invoice', $data);
    }

    public function updateProductDetail($id,$data)
    {
        // $this->db->where('product_detail_id', $id);
        // $this->db->update('tbl_product_detail', $data);
        $this->db->where('product_id', $id);
        $this->db->update('tbl_product_items', $data);
    }

}