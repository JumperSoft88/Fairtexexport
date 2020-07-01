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
        $sumTotal = $this->draftInvoices_model->getDraftSumTotal();
        $sumSubTotal = $this->draftInvoices_model->getDraftSumSubTotal();
        
        $newSession = array(
            'draftInvoices' => $draftInvoices,
            'draftSumSubTotal' => $sumTotal[0]->sum,
            'draftSumTotal' => $sumSubTotal[0]->subSum 
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