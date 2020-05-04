<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->model('customer_model');
        $this->load->helper('url'); 
    }

    public function index() {   

        $allCustomer['allCustomer'] = $this->customer_model->getAllCustomer();

        $this->load->view('wholesale/insertCustomer',$allCustomer);
    }

    public function insertCustomer()
    {
         
        if($val == 'insert'){
            $data = array(
                'customer_name' => $_POST['customer_name'], 
                'customer_company_name' => $_POST['customer_company_name'], 
                'customer_tel' => $_POST['customer_tel'], 
                'customer_email' => $_POST['customer_email'], 
                'customer_address' => $_POST['customer_address'], 
                'member_created_date' => 'NOW()'  
            ); 

            $productId = $this->customer_model->insertCustomer($data); 
            $this->session->set_flashdata('msg','Success');

            $this->load->view('wholesale/product');
        }else{
            $this->load->view('wholesale/insertCustomer');
        } 
    } 

   

    public function getCustomerByID(){
 
        $customer = $this->customer_model->getCustomerByID($_POST['id']); 

        $dataJson = array(
                'customer_id' => $customer[0]->customer_id, 
                'customer_name' => $customer[0]->customer_name, 
                'customer_company_name' => $customer[0]->customer_company_name, 
                'customer_tel' => $customer[0]->customer_tel, 
                'customer_address' => $customer[0]->customer_address, 
                'customer_tax' => $customer[0]->customer_tax,
                'discount' => $customer[0]->discount,
                'shippingCost' => $customer[0]->shippingCost,
                'customer_email' => $customer[0]->customer_email);    

        header('Content-Type: application/json');
        echo json_encode($dataJson);
    }

    public function updateCustomer(){
       $customer_id = $_POST['id'];
       $customer_name = $_POST['name'];
       $customer_company_name = $_POST['company_name'];
       $customer_tel = $_POST['tel'];
       $customer_address = $_POST['address'];
       $customer_tax = $_POST['tax'];
       $customer_discount = $_POST['discount'];
       $customer_shipping = $_POST['shipping'];
       $customer_email = $_POST['email'];
 
        $data = array( 
            'customer_name' => $customer_name,  
            'customer_company_name' => $customer_company_name,  
            'customer_tel' => $customer_tel,  
            'customer_address' => $customer_address,  
            'customer_tax' => $customer_tax,  
            'discount' => $customer_discount,  
            'shippingCost' => $customer_shipping,  
            'customer_email' => $customer_email
        ); 

        $this->customer_model->updateCustomer($customer_id , $data); 
    }

    // public function signin() {
    //     $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);    
    
    //    //add the header here
    //     header('Content-Type: application/json');
    //     echo json_encode( $arr );
    // }
}