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
        $sumTotalUSD = $this->historyInvoices_model->getSumTotalUSD();
        $sumTotalTHB = $this->historyInvoices_model->getSumTotalTHB();

      //  echo '>>> '.$sumTotal[0]->sum;

        $newSession = array(
            'historyInvoice' => $historyInvoice,
            'sumTotalUSD' => $sumTotalUSD[0]->sumUSD,
            'sumTotalTHB' => $sumTotalTHB[0]->sumTHB
        );
    
        $this->session->set_userdata($newSession);


        $this->load->view('wholesale/historyInvoices');
    }
}