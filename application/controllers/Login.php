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
        $this->load->view('login');
    }
 
    public function member(){  

        if(isset($_SESSION['member_username']) && isset($_SESSION['member_password'])){
            $username = $_SESSION['member_username']; 
            $password = $_SESSION['member_password'];
        }else{
            $username = $_POST['member_username']; 
            $password = $_POST['member_password'];
        } 

        echo $username;
        echo $password;

        $this->session->set_userdata('member_username', $username);
        $this->session->set_userdata('member_password', $password);

    
  
        $user_data = $this->member_model->loginMember($username,$password);

        

        
        if (isset($user_data[0]->member_username)) {
            
            $data['memberTypePrice'] = $user_data[0]->member_type_price;
            
            $this->load->view('wholesale/product',$data);
        }
       
    }
}