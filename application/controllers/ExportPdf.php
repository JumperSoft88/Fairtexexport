<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExportPdf extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url'); 
    }

    public function index() {   
 
        $this->load->view('report/exportPdf');
 
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
      //  $this->dompdf->setPaper('A4', 'landscape');
      $this->dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }
 
}