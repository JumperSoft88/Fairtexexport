<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GenerateUrl extends CI_Controller {

    public function __construct() {
        parent:: __construct(); 
        
        $this->load->model('generateUrl_model');
        $this->load->helper('url'); 

        $this->load->library('encryption'); 
        $this->encryption->initialize(array('driver' => 'mcrypt'));
        $this->encryption->initialize(array('driver' => 'openssl'));
    }

    public function index() {  
         
        $allCustomer = $this->generateUrl_model->getAllCustomer();

        $allTypeCost = $this->generateUrl_model->getAllTypeCost();

        $newSession = array(
            'genAllCustomer' => $allCustomer,
            'allTypeCost' => $allTypeCost  
        );
    
        $this->session->set_userdata($newSession);


        $this->load->view('wholesale/generateUrl');
    }

    public function generateCode()
    {
        $this->session->unset_userdata('codeUrl');

        $data = "";
        //$session->getFlashdata();
        //unset($_SESSION['codeUrl']);
        
        $customerName =  $this->input->post('customerName');
        $costType =  $this->input->post('costType');

        if($customerName == "new"){
            $discount =  $this->input->post('discount');
            $shippingCost =  $this->input->post('shippingCost');

            $data = $customerName.$costType.','.$discount.','.$shippingCost;
        }else{
            $data = $customerName.$costType;
        }
      




        $isNotSlash = ""; 
        $codeUrl = ""; 

        for ($x = 0; $x <= 10; $x++) {  
            $codeUrl =  $this->encryption->encrypt($data); 
           // if(!preg_match('/', $codeUrl)) {
          //      break;
           // }  

           if(substr_count($codeUrl, '/') == 0){
                break;
           }
        }  

       echo $codeUrl;
        //echo $this->encryption->decrypt($codeUrl);

     //   echo $this->encryption->decrypt($ciphertext);

        
      //  echo $customerName;
         
    }
}