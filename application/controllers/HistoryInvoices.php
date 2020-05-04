<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HistoryInvoices extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->model('historyInvoices_model');
        $this->load->helper('url'); 
    }

    public function index() {  
         
        $historyInvoice = $this->historyInvoices_model->getAllInvoice(); 
        $sumTotal = $this->historyInvoices_model->getSumTotal();
        $sumSubTotal = $this->historyInvoices_model->getSumSubTotal();

      //  echo '>>> '.$sumTotal[0]->sum;

        $newSession = array(
            'historyInvoice' => $historyInvoice,
            'sumTotal' => $sumTotal[0]->sum,
            'sumSubTotal' => $sumSubTotal[0]->subSum
        );
    
        $this->session->set_userdata($newSession);


        $this->load->view('wholesale/historyInvoices');
    }
}