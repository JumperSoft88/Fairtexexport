<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->model('product_model');
        $this->load->model('member_model');

        $this->load->library("pagination");
        //$this->load->library('cart');
    }

    public function index() {  
      //  $costType = ""; 
        if(isset($_SESSION['costType'])){ 
            $type = $_SESSION['costType'];  
        }else{ 
            $type = $this->input->post('costType'); 
        } 

        if(isset($_SESSION['customerName'])){
            $customerName = $_SESSION['customerName'];  
        }else{
            $customerName = $this->input->post('customerName'); 
        }

        $config = array();
        $config["base_url"] = base_url() . "products";
        $config["total_rows"] = $this->product_model->get_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['products'] = $this->product_model->get_authors($config["per_page"], $page);

        $this->session->set_userdata('costType',$type);
        $this->session->set_userdata('customerName',$customerName);

        $this->load->view('wholesale/product',$data);
      
        $this->session->set_flashdata('msg','Success');
    }

    public function test()
    {
         echo 'test'; 
       
         $this->session->set_userdata('test',$this->input->post('name'));
    }

    public function add()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
        $cost =  $this->input->post('cost');
        //$costSprit = explode("$", $cost);
        $qty = $this->input->post('qty'); 
  
        $product = array(
            'id'      => $id,
            'name'    => $name, 
            'qty'     => $qty,
            'price'   => $cost[0],
            'options' => array('size' => $size, 'color' => $color)
            
        );
    
        $this->cart->insert($product); 
        
        $this->session->set_userdata('test',count($this->cart->contents()));
        $this->session->set_userdata('name',$this->input->post('name'));
    }

    public function insertProduct($val)
    {
        if($val == 'insert'){
            $data1 = array(
                'product_name' => $_POST['product_name'], 
                'product_code' => $_POST['product_name'], 
                'product_detail' => $_POST['product_name'], 
                'product_image_path' => 'file/image', 
                'product_created_date' => 'NOW()',
                'product_modified_date' => 'NOW()' 
                
            );

            $this->product_model->insertProduct($data1);


            $productId = $this->product_model->getProductByName($_POST['product_name']);

            $data2 = array(
                'product_id '  => $productId[0]->product_id,
                'product_name' => $_POST['product_name'], 
                'product_size' => strtoupper($_POST['product_size']), 
                'product_colors' => $_POST['product_colors'], 
                'product_cost' => $_POST['product_cost'],
                'product_usd01' => $_POST['product_usd01'], 
                'product_usd05' => $_POST['product_usd05'], 
                'product_usd08' => $_POST['product_usd08'], 
                'product_wholesale' => $_POST['product_wholesale'], 
                'product_wholesale30' => $_POST['product_wholesale30'], 
                'product_wholesale35' => $_POST['product_wholesale35'], 
                'product_create_date' => ddate('Y-m-d\TH:i:s')
            );

            $this->product_model->insertProductDetail($data2);

            $this->session->set_flashdata('msg','Success');
            $this->load->view('wholesale/product');
        }else{

            $allProduct['allProduct'] = $this->product_model->getAllProduct()->result();

            $this->load->view('wholesale/insertProduct',$allProduct);
        }
       
    }

    public function insertCustomer($val)
    {
         
        if($val == 'insert'){
            $data = array(
                'customer_name' => $_POST['customer_name'], 
                'customer_company_name' => $_POST['customer_company_name'], 
                'customer_tel' => $_POST['customer_tel'], 
                'customer_address' => $_POST['customer_address'], 
                'member_created_date' => 'NOW()'  
            ); 

            $productId = $this->member_model->insertCustomer($data); 
            $this->session->set_flashdata('msg','Success');

            $this->load->view('wholesale/product');
        }else{
            $this->load->view('wholesale/insertCustomer');
        } 
    }

    public function get_customer()
    {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $allCustomer = $this->member_model->getCustomer();
 
        $data = [];
 
        foreach($allCustomer->result() as $r) {
            $data[] = array(
                    $r->customer_id,
                    $r->customer_name,
                    $r->customer_company_name,
                    $r->customer_address              
            );
        } 
        
        $result = array(
            "draw" => $draw,
            "recordsTotal" => $allProduct->num_rows(),
            "recordsFiltered" => $allProduct->num_rows(),
            "data" => $data
        );


        echo json_encode($result);
        exit();

        $this->load->view('wholesale/insertCustomer');
    }

    public function insertUser($val)
    {
         
        if($val == 'insert'){
            $data = array(
                'member_username' => $_POST['member_username'], 
                'member_password' => $_POST['member_password'], 
                'member_type_price' => $_POST['member_type_price'], 
                'member_created_date' => 'NOW()'  
            ); 

            $productId = $this->member_model->insertUser($data); 
            $this->session->set_flashdata('msg','Success');
            
            $this->load->view('wholesale/product');
        }else{


            $allMember = $this->member_model->getAllMember();

            $memberSession = array(
                'allMember' => $allMember
            );
        
            $this->session->set_userdata($memberSession);

            $this->load->view('wholesale/insertUser');
        }
    }

    public function getMemberByID()
    {
        $member = $this->member_model->getMemberByID($_POST['id']); 

        $dataJson = array(
            'member_id' => $member[0]->member_id,  
            'member_username' => $member[0]->member_username, 
            'member_password' => $member[0]->member_password,
            'member_type_price' => $member[0]->member_type_price 
        
        );    
 
        //  $dataJson = array(
        //     'id' => $_POST['id']
        // );
        header('Content-Type: application/json');
        echo json_encode($dataJson);

    }

    public function updateMemberByID()
    {
        $member_id = $_POST['member_id'];
        $member_username = $_POST['member_username'];
        $member_password = $_POST['member_password'];
        $member_type_price = $_POST['member_type_price']; 

       
  
         $data = array( 
             'member_username' =>  $member_username,   
             'member_password' => $member_password,   
             'member_type_price' => $member_type_price,  
             'member_modified' => date('Y-m-d\TH:i:s')
         ); 
 
        $this->member_model->updateMember($member_id,$data);
    }
    

    public function get_items()
    {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $allProduct = $this->product_model->getAllProduct();

        $data = [];
 
        foreach($allProduct->result() as $r) {
            $data[] = array(
                    $r->product_id,
                    $r->product_name,
                    $r->product_detail
            );
        } 
        
        $result = array(
            "draw" => $draw,
            "recordsTotal" => $allProduct->num_rows(),
            "recordsFiltered" => $allProduct->num_rows(),
            "data" => $data
        );


        echo json_encode($result);
        exit();

        $this->load->view('wholesale/product');
    }


    public function getProductDetailByID()
    {
        $product = $this->product_model->getProductDetailByID($_POST['id']); 

    
        $dataJson = array(
                'product_detail_id' => $product[0]->product_id, 
                //'product_id' => $product[0]->product_id, 
                'product_name' => $product[0]->product_name, 
                'product_size' => $product[0]->product_size, 
                'product_colors' => $product[0]->product_colors, 
                'product_cost' => $product[0]->product_cost,
                'product_usd01' => $product[0]->product_usd01,
                'product_usd05' => $product[0]->product_usd05,
                'product_usd08' => $product[0]->product_usd08,
                'product_wholesale' => $product[0]->product_wholesale,
                'product_wholesale30' => $product[0]->product_wholesale30,
                'product_wholesale35' => $product[0]->product_wholesale35
            
            );    

        // $dataJson = array(
        //     'id' => $product[0]
        // );
        header('Content-Type: application/json');
        echo json_encode($dataJson);
    }

    public function updateProductDetailByID(){
        $product_detail_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_size = $_POST['product_size'];
        $product_colors = $_POST['product_colors'];
        $product_cost = $_POST['product_cost'];
        $product_usd01 = $_POST['product_usd01'];
        $product_usd05 = $_POST['product_usd05'];
        $product_usd08 = $_POST['product_usd08'];
        $product_wholesale = $_POST['product_wholesale'];
        $product_wholesale30 = $_POST['product_wholesale30'];
        $product_wholesale35 = $_POST['product_wholesale35'];

       
  
         $data = array( 
             'product_name' => $product_name,   
             'product_desc' => $product_desc,   
             'product_size' => $product_size, 
             'product_colors' => $product_colors, 
             'product_cost' => $product_cost, 
             'product_usd01' => $product_usd01, 
             'product_usd05' => $product_usd05, 
             'product_usd08' => $product_usd08, 
             'product_wholesale' => $product_wholesale, 
             'product_wholesale30' => $product_wholesale30, 
             'product_wholesale35' => $product_wholesale35,
             'product_modifiedDate' => date('Y-m-d\TH:i:s')
         ); 
 
         $this->product_model->updateProductDetail($product_detail_id , $data); 
     }
}