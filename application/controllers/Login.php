<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url');
        $this->load->model('member_model');

    }

    public function index()
    { 
        $this->session->sess_destroy();
        $this->load->view('login');
    }
 
    public function member(){   

        unset(
            $_SESSION['costType'],
            $_SESSION['customerName'],
            $_SESSION['invoice_number'],
            $_SESSION['consigee'],
            $_SESSION['invoice_number'],
            $_SESSION['shipTo'],
            $_SESSION['invoiceNo'],
            $_SESSION['dateInvoice'],
            $_SESSION['by'],
            $_SESSION['to'],
            $_SESSION['from'],
            $_SESSION['total'],
            $_SESSION['discount'],
            $_SESSION['shipping']

        ); 

        $this->cart->destroy();

        if(isset($_SESSION['member_username']) && isset($_SESSION['member_password'])){
            $username = $_SESSION['member_username']; 
            $password = $_SESSION['member_password']; 
        }else{
            $username = $_POST['member_username']; 
            $password = $_POST['member_password'];
        } 

      //  echo $username;
        //echo $password; 
        $user_data = $this->member_model->loginMember($username,$password);

        
 
        if (isset($user_data[0]->member_username)) {

            $allCustomer = $this->member_model->getAllCustomer();
            $allTypeCost = $this->member_model->getAllTypeCost();

            $this->session->set_userdata('member_username', $username);
            $this->session->set_userdata('member_password', $password);
            $this->session->set_userdata('userType', $user_data[0]->member_type_price);
             
            $this->session->set_userdata('allCustomer', $allCustomer);
            $this->session->set_userdata('allTypeCost', $allTypeCost);
           // $data['memberTypePrice'] = $user_data[0]->member_type_price;

           

           /*  $data = array( 
                'allCustomer' => $allCustomer,
                'allTypeCost' => $allTypeCost
            );
             */
            $this->load->view('wholesale/product');
        }else{
            echo 'username/password is incollecect';
        }
       
    }
}