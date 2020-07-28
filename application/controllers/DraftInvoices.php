<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DraftInvoices extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->model('draftInvoices_model');
        $this->load->helper('url'); 
    }

    public function index() {  
         
        $draftInvoices = $this->draftInvoices_model->getAllInvoiceDraft();
        $sumTotalUSD = $this->draftInvoices_model->getDraftSumTotalUSD();
        $sumTotalTHB = $this->draftInvoices_model->getDraftSumTotalTHB();
        
        $newSession = array(
            'draftInvoices' => $draftInvoices,
            'draftSumTotalUSD' => $sumTotalUSD[0]->sumUSD,
            'draftSumTotalTHB' => $sumTotalTHB[0]->sumTHB 
        );
    
        $this->session->set_userdata($newSession);

        $this->load->view('wholesale/draftInvoices');
    }

    public function updateStatus()
    {
        $id =  $this->input->post('id');

        $this->draftInvoices_model->updateStatus($id);

    }
}