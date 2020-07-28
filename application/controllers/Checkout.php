<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url'); 

        $this->load->model('product_model');
        $this->load->model('checkout_model');
       
    }

    public function index() {

        // unset(
        //     $_SESSION['customerName'],
        //     $_SESSION['customerAddress']
        //     // $_SESSION['newTel'],
        //     // $_SESSION['newEmail']  
        // ); 

        //echo '=>  '.$_SESSION['customerName']; 
        //echo '=>  '.$_SESSION['customerType'];

        unset(
            $_SESSION['fullDate'], 
            $_SESSION['invoceNo']
        ); 
    
        $newCustomerName = "";  
        $newAddress = "";
        $newTel = "";
        $newEmail = "";

        $maxId = 0;
        $id = 0;
        $fullDate = date('d-m-Y');
       // $my = date('my');
       $my = date('yymd');
        if (isset($user_data[0]->member_username)) {

        }

        $invoice_number = $this->session->userdata('invoice_number');

        $customerType = $_SESSION['customerType'];

        if($customerType == "new"){ 

            $newCustomerName = $this->input->post('customerName'); 

            if(isset($_SESSION['customerType'])
                && isset($_SESSION['customerAddress'])
                && isset($_SESSION['newTel'])
                && isset($_SESSION['newEmail'])){
                  //  echo 'Test';
            }else{
                $newAddress = $this->input->post('address');  
                $newTel = $this->input->post('tel'); 
                $newEmail = $this->input->post('email'); 
    
                $newSession = array(
                    'customerName' => $newCustomerName,
                    'customerAddress' => $newAddress,
                    'newTel' => $newTel,
                    'newEmail' => $newEmail 
                ); 
                $this->session->set_userdata($newSession);
            }

           
          
        }
        
        if($invoice_number == null){
            $id = ($this->product_model->getMaxInvoice()+1);
            $data = array(
                'invoice_id' => $id 
            );
            $this->product_model->insertInvoiceId($data);
            
            $maxId = $this->product_model->getMaxInvoice();   

            $invID = str_pad($maxId, 4, '0', STR_PAD_LEFT); 
            $invoceNo = $my.'/'.$invID;

            $dataUpdate = array( 
                'invoice_no ' => $invoceNo
            );
            
            $this->product_model->updateTblInvoice($maxId,$dataUpdate);
            
            $this->session->set_userdata('invoice_number', $invoceNo);
        }else{
            $invoceNo = $this->session->userdata('invoice_number');
        }

         
        $data =  array(
            'fullDate' => $fullDate,
            'invoceNo' => $invoceNo,
            'customerName' => $this->input->post('customerName'),
            'customerAddress' => $this->input->post('address'),
            'costType' => $this->input->post('costType')

        );
 
        if(isset($_SESSION['fullDate'])
            && isset($_SESSION['invoceNo']) ){
            //  echo 'Test';
        }else{ 

            $inSession = array(
                'fullDate' => $fullDate,
                'invoceNo' => $invoceNo
            ); 

            $this->session->set_userdata($inSession);
        }
  
        //echo '=>  '.$this->input->post('tel');
        //echo '=>  '.$this->input->post('email');

        $teSession = array(
            'customerTel' => $this->input->post('tel'),
            'email' => $this->input->post('email')
        ); 

        $this->session->set_userdata($teSession);
        //echo '>>>  '.$this->input->post('customerName');

        //echo '-> '.$_SESSION['customerName'];

        $this->session->set_userdata('customerName', $this->input->post('customerName'));
        $this->session->set_userdata('customerAddress', $this->input->post('address'));

      



        $this->load->view('wholesale/checkout',$data);
    }
 
}