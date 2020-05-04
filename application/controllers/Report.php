<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url'); 
    }

    public function index() {   

        if($_SESSION['userType'] == 'administrator'){
            $data = array(
                'consigee' => $_POST['consigee'],
                'shipTo' => $_POST['shipTo'],
                'invoiceNo' => $_POST['invoiceNo'],
                'dateInvoice' => $_POST['dateInvoice'],
                'by' => $_POST['by'],
                'to' => $_POST['to'],
                'from' => $_POST['from'],
                'total' => $_POST['total'],
                'discount' => $_POST['discount'],
                'shipping' => $_POST['shipping'] 
            );
     
            $this->session->set_userdata($data);
    
            $this->load->view('report/export-payment');
        }else{
            echo 'Send Email';
        }

       
 
    }
 
}