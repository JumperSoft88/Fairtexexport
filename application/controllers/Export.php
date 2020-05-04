<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Export extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');  
        $this->load->model('checkout_model'); 
 
    }

    public function excel()
    {
          require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel.php');
          require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

          $this->load->view('wholesale/checkComplete');
        /** 
         * Insert to DB
        */

        $fullDate = $_SESSION['fullDate'];
        $invoceNo = $_SESSION['invoceNo'];
 
        $Total = number_format($this->cart->total()-$_SESSION['discount']-$_SESSION['shippingCost'], 2, '.', '');
        $shippingCost = number_format($_SESSION['shippingCost']);
        $discount = number_format($_SESSION['discount']);
        $subTotal = number_format($this->cart->total(), 2, '.', '');
        $newEmail = $_SESSION['newEmail'];
        $newTel = $_SESSION['newTel'];
        $customerName = $_SESSION['customerName'];
        $customerAddress = $_SESSION['customerAddress'];

        $dataInvoice = array(
            'invoice_no' => $invoceNo, 
            'invoice_consignee' => $customerName, 
            'invoice_ship_to' => $customerAddress, 
            'invoice_by' => $customerName, 
            'invoice_sub_total' => $subTotal,
            'invoice_discount' => $discount,
            'invoice_shipping_cost' => $shippingCost,
            'invoice_total' => $Total,
            'invoice_status' => 'draft',
            'createdDate' => 'NOW()'   
        ); 

        $this->checkout_model->saveInvoice($dataInvoice,$invoceNo);

        $this->checkout_model->deleteInvoiceDetail($invoceNo);
 
        foreach ($this->cart->contents() as $items){

            $dataInvoiceDetail = array(
                'product_invoice_no' => $invoceNo, 
                'product_name' => $items['name'], 
                'product_description' => $items['name'], 
                'product_size' => $items['options']['size'], 
                'product_color' => $items['options']['color'],
                'product_qty' => $items['qty'], 
                'product_unit_price' => $items['price'], 
                'product_amount' => $items['subtotal']
            ); 
    
            $this->checkout_model->saveInvoiceDetail($dataInvoiceDetail,$invoceNo);
        }

 
          //require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel5.php');

        //   $objPHPExcel = new PHPExcel();

        //  $objPHPExcel->getProperties()->setCreator("");
        //  $objPHPExcel->getProperties()->setLastModifiedBy("");
        //  $objPHPExcel->getProperties()->setTitle("");
        //  $objPHPExcel->getProperties()->setSubject("");
        //  $objPHPExcel->getProperties()->setDescription("");

        //  $objPHPExcel->setActiveSheetIndex(0);

        //  $objPHPExcel->getActiveSheet()->SetCellValue('A1','SKU#');
        //  $objPHPExcel->getActiveSheet()->SetCellValue('B1','Description');
        //  $objPHPExcel->getActiveSheet()->SetCellValue('C1','Size');
        //  $objPHPExcel->getActiveSheet()->SetCellValue('D1','Color');
        //  $objPHPExcel->getActiveSheet()->SetCellValue('E1','Qty.');
        //  $objPHPExcel->getActiveSheet()->SetCellValue('F1','UNIT PRICE');
        //  $objPHPExcel->getActiveSheet()->SetCellValue('G1','AMOUNT (USD)'); 

        //  $row = 2;

        //  foreach ($this->cart->contents() as $items){
        //     $objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$items['name']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row,$items['name']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row,$items['options']['size']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row,$items['options']['color']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row,$items['qty']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row,$items['price']);
        //     $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row,$items['subtotal']); 
        //     echo $items['name'];
        //     $row++;

        //  }

        //  $filename = "fairtex";

        //  $objPHPExcel->getActiveSheet()->setTitle("Tasks-Overview");
 
        // // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        // $objWriter =  PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment;filename="workbook1.xlsx"');
        // header('Cache-Control: max-age=0');
    
        // ob_end_clean();
        // $objWriter->save('php://output');
        // exit;
         //exit; 

         $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Govinda")
                             ->setLastModifiedBy("Govinda")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");

        // Add some data
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);

        $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName('test_img');
        $objDrawing->setDescription('test_img');
        $objDrawing->setPath(APPPATH.'logo/Fairtex-shop.png');
        $objDrawing->setCoordinates('A1');                      
        //setOffsetX works properly
        $objDrawing->setOffsetX(15); 
        $objDrawing->setOffsetY(15);                
        //set width, height
        $objDrawing->setWidth(200); 
        $objDrawing->setHeight(70); 
        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());


        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'FAIRTEX EQUIPMENT CO.,LTD.');
        $objPHPExcel->getActiveSheet()->SetCellValue('D2', '99/5, MOO3, SOI BOONTHAMANUSORN');
        $objPHPExcel->getActiveSheet()->SetCellValue('D3', 'THEPARAK RD.,BANGPLEEYAI, BANGPLEE,');
        $objPHPExcel->getActiveSheet()->SetCellValue('D4', 'SAMUTPRAKARN 10540, THAILAND');
        $objPHPExcel->getActiveSheet()->SetCellValue('D4', 'TEL (662)3855148,3855149   FAX(662)3855403');


        $objPHPExcel->getActiveSheet()->SetCellValue('A7', 'CONSIGNEE: ');
        $objPHPExcel->getActiveSheet()->getStyle('A7')->getFont()->setBold( true );
        $objPHPExcel->getActiveSheet()->SetCellValue('B7', $customerName);

        // $styleArray = array(
        //     'borders' => array(
        //       'allborders' => array(
        //         'style' => PHPExcel_Style_Border::BORDER_THIN
        //       )
        //     )
        //   );
        //  $objPHPExcel->getActiveSheet()->getStyle('A7:B7')->applyFromArray($styleArray);
        // $objPHPExcel->getActiveSheet()->getStyle('A7')->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        // $objPHPExcel->getActiveSheet()->getStyle('A7:B7')->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        // $objPHPExcel->getActiveSheet()->getStyle('A7:B7')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        // $objPHPExcel->getActiveSheet()->getStyle('A7:B7')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        // $border_style= array('borders' => array('right' => array('style' =>PHPExcel_Style_Border::BORDER_THICK,'color' => array('argb' => '766f6e'),),
        // 'left' => array('style' =>PHPExcel_Style_Border::BORDER_THICK,'color' => array('argb' => '766f6e'),),
        // 'top' => array('style' =>PHPExcel_Style_Border::BORDER_THICK,'color' => array('argb' => '766f6e'),)),
        // 'bottom' => array('style' =>PHPExcel_Style_Border::BORDER_THICK,'color' => array('argb' => '766f6e')));
        // $sheet = $objPHPExcel->getActiveSheet();
        // $sheet->getStyle("A20:G20")->applyFromArray($border_style);



        $objPHPExcel->getActiveSheet()->SetCellValue('C7', 'SHIP TO : ');
        $objPHPExcel->getActiveSheet()->getStyle('C7')->getFont()->setBold( true );
        $objPHPExcel->getActiveSheet()->SetCellValue('D7', $customerAddress);

        $objPHPExcel->getActiveSheet()->SetCellValue('B12', 'DESCRIPTION OF GOODS ');
        $objPHPExcel->getActiveSheet()->getStyle('B12')->getFont()->setBold( true );
 

        $objPHPExcel->getActiveSheet()->SetCellValue('F8', 'Invoice No :');
        $objPHPExcel->getActiveSheet()->SetCellValue('G8', $invoceNo);
        $objPHPExcel->getActiveSheet()->SetCellValue('F9', 'Date :');
        $objPHPExcel->getActiveSheet()->SetCellValue('G9', $fullDate);

        $objPHPExcel->getActiveSheet()->getStyle('F5')->getFont()->setBold( true );
        $objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setBold( true );

        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A13', 'SKU#')
                    ->setCellValue('B13', 'Description')
                    ->setCellValue('C13', 'Size')
                    ->setCellValue('D13', 'Color')
                    ->setCellValue('E13', 'Qty.')
                    ->setCellValue('F13', 'UNIT PRICE')
                    ->setCellValue('G13', 'AMOUNT (USD)');

        $rowCount = 14;
        foreach ($this->cart->contents() as $items){
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $items['name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $items['name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $items['options']['size']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $items['options']['color']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $items['qty']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $items['price']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $items['subtotal']);
            
            $rowCount++;
        }

        $objPHPExcel->getActiveSheet()->SetCellValue('F'.($rowCount+2), 'Sub total');
        $objPHPExcel->getActiveSheet()->SetCellValue('G'.($rowCount+2), $subTotal.' $');

        $objPHPExcel->getActiveSheet()->SetCellValue('F'.($rowCount+3), 'Discount');
        $objPHPExcel->getActiveSheet()->SetCellValue('G'.($rowCount+3), $discount.' $');

        $objPHPExcel->getActiveSheet()->SetCellValue('F'.($rowCount+4), 'shipping');
        $objPHPExcel->getActiveSheet()->SetCellValue('G'.($rowCount+4), $shippingCost.' $');

        $objPHPExcel->getActiveSheet()->SetCellValue('F'.($rowCount+5), 'Total');
        $objPHPExcel->getActiveSheet()->SetCellValue('G'.($rowCount+5), $Total.' $');

        $objPHPExcel->getActiveSheet()->SetCellValue('A'.($rowCount+7), 'BRAND : FAIRTEX');
 

        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Fairtex');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        header('Content-Disposition: attachment;filename="userList.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
 
       
 
       
    }

    public function saveInvoice()
    {
        $data = array(
            'customer_name' => $_POST['customer_name'], 
            'customer_company_name' => $_POST['customer_company_name'], 
            'customer_tel' => $_POST['customer_tel'], 
            'customer_address' => $_POST['customer_address'], 
            'member_created_date' => 'NOW()'  
        ); 

        $this->checkout_model->saveInvoice($data);
    }

    public function saveInvoiceDetail()
    {
        $data = array(
            'customer_name' => $_POST['customer_name'], 
            'customer_company_name' => $_POST['customer_company_name'], 
            'customer_tel' => $_POST['customer_tel'], 
            'customer_address' => $_POST['customer_address'], 
            'member_created_date' => 'NOW()'  
        ); 

        $this->checkout_model->saveInvoiceDetail($data);
    }

    public function test()
    {
        $fullDate = $_SESSION['fullDate'];
        $invoceNo = $_SESSION['invoceNo'];
 
        $Total = number_format($this->cart->total()-$_SESSION['discount']-$_SESSION['shippingCost'], 2, '.', '');
        $shippingCost = number_format($_SESSION['shippingCost']);
        $discount = number_format($_SESSION['discount']);
        $subTotal = number_format($this->cart->total(), 2, '.', '');
        $newEmail = $_SESSION['newEmail'];
        $newTel = $_SESSION['newTel'];
        $customerName = $_SESSION['customerName'];
        $customerAddress = $_SESSION['customerAddress'];
 
        foreach ($this->cart->contents() as $items){

        }
 
    }
 
}