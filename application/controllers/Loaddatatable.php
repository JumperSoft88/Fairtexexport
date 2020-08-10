<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loaddatatable extends CI_Controller {
 
    public $costType = '';

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->model('product_model'); 
        $this->load->model('member_model'); 

        $this->load->library('encryption'); 
        //$this->encryption->initialize(array('driver' => 'mcrypt'));
      //  $this->encryption->initialize(array('driver' => 'openssl'));
 
    }

    public function index() { 

        echo '>> '.$_SESSION['costType'];
        echo '-> '.$_SESSION['customerName'];
        

        unset(
            $_SESSION['currencyType']
        );

        
        if(isset($_SESSION['costType'])){ 
            $type = $_SESSION['costType'];  
        }else{ 
            $type = $this->input->post('costType'); 
        } 

        $customerName = "";

        if(isset($_SESSION['customerName'])){
            $customerName = $_SESSION['customerName'];  
        }else{
            $customerName = $this->input->post('customerName'); 
        }

        $this->session->set_userdata('costType',$type);
        $this->session->set_userdata('customerName',$customerName);

        $this->session->set_flashdata('msg','Success');

        $dataCust =  array(
            'customerType' => $type,
            'customerName' => $customerName
        );
        
        // $this->load->view('wholesale/productDatatable', $dataCust);   
        $this->load->view('wholesale/buyProduct', $dataCust);   
    }

    public function customer($data)
    { 
        $code = "";
        $price = "";
        $customerName = "";
        $customerTel = "";
        $customerAddress = "";
        $discount = "";
        $shippingCost = "";

        unset(
            $_SESSION['costType'],
            $_SESSION['costType_url'],
            $_SESSION['userType'],
           // $_SESSION['customerName'],
           // $_SESSION['customerTel'],
           // $_SESSION['customerAddress'],
            $_SESSION['customerType']  

        ); 

        $customerType = ""; 
        $plain_text = $data;  
        //echo '>>>>> '. $this->encryption->decrypt($data);

        $code = substr($this->encryption->decrypt($plain_text), 0,3);
       
        
        if($code != 'new'){ 

            $code = substr($this->encryption->decrypt($plain_text), 0,8);
            $price = substr($this->encryption->decrypt($plain_text),8);

           
            $customer = $this->member_model->getCustomerByCustomerName($code);

            $customerType = $code;
            $customerName = $customer[0]->customer_company_name;
            $customerTel = $customer[0]->customer_tel;
            $customerAddress = $customer[0]->customer_address;
            $discount = $customer[0]->discount;
            $shippingCost = $customer[0]->shippingCost;
  
        }else{ 

            echo 'NEW';
            $dataNew = $this->encryption->decrypt($plain_text);

            echo '>>> '.$dataNew;

            $str_arr = explode (",", $dataNew);   

            $discount = $str_arr[1];
            $shippingCost = $str_arr[2]; 

            if(isset($_SESSION['customerName'])){ 
                $customerName = $_SESSION['customerName'];
            }
            if(isset($_SESSION['customerAddress'])){ 
                $customerAddress = $_SESSION['customerAddress'];
            }
            if(isset($_SESSION['newTel'])){ 
                $customerTel = $_SESSION['newTel'];
            }
 
            $customerType = "new"; 
            $price = substr($this->encryption->decrypt($plain_text),3);
        } 

        //echo $customer[0]->customer_company_name;
  
        $dataCust =  array(
            'customerType' => $customerType 
        );
       // echo '>>>>>>>> '.$price;
    
       $currencyType = "";
       if($price == "usd-01" || $price == "usd-05" || $price == "usd-08" ){
            $currencyType = "USD";
        }else{
            $currencyType = "THB";
        }


        $dataSession = array(
            'costType'  => $price,
            'costType_url'     => $data,
            'userType'     => 'customer',
            'customerName'     => $customerName, 
            'customerTel' => $customerTel,
            'customerAddress' => $customerAddress,
            'discount' => $discount,
            'shippingCost' =>$shippingCost,
            'customerType' => $customerType,
            'currencyType' =>  $currencyType
        );

        $this->session->set_userdata($dataSession);
        // $this->session->set_userdata('costType',$price);
        // $this->session->set_userdata('costType_url',$data);
        // $this->session->set_userdata('userType','customer');
        // $this->session->set_userdata('customerName', $customerName);        

      //  $this->load->view('wholesale/productDatatable',$dataCust);   
      $this->load->view('wholesale/buyProduct', $dataCust);   
    }

    public function generateCode($data)
    {
        $ciphertext = $this->encryption->encrypt($data);
        echo $ciphertext;

        echo $this->encryption->decrypt($ciphertext);
    }
 
    public function get_product_items()
    { 
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length")); 

        $allProduct = $this->product_model->getAllProductItems();

        $data = [];
        $index = 0;
        $no = 0;  
        foreach($allProduct->result() as $r) {
            $typeCose = "";
            if($_SESSION["costType"] == "usd-01"){
                $typeCose = $r->product_usd01;
            }else if($_SESSION["costType"] == "usd-03"){
                $typeCose = $r->product_usd03;
            }else if($_SESSION["costType"] == "usd-05"){
                $typeCose = $r->product_usd05;
            }else if($_SESSION["costType"] == "usd-08"){
                $typeCose = $r->product_usd08;
            }else if($_SESSION["costType"] == "wholesale"){
                $typeCose = $r->product_wholesale;
            }else if($_SESSION["costType"] == "wholesale30"){
                $typeCose = $r->product_wholesale30;
            }else if($_SESSION["costType"] == "wholesale35"){
                $typeCose = $r->product_wholesale35;
            }else{
                $typeCose = '0';
            }
             
            $images = $r->image_name;
            $pathImage = "";

            if( $images != null ){
                
                $pathImage = '<img src="'.base_url().$images.'" class="w3-border" style="width:100px;height:100px;">';
            
            }else{ 
                $pathImage = '<img src="'.base_url().'images/emtry.jpg" class="w3-border" style="width:100px;height:100px;">';
            }
           
           
           
            $product_name = $r->product_name;
            $product_desc = $r->product_desc;
            $product_size = $r->product_size;
            $product_id = $r->product_id;
            $color = $r->product_colors;
           // $colors = explode('|', $col); 
            
            // $colorOption = "";  
           
            // foreach($colors as $c){ 
            //     $colorOption .= "<option> $c</option>";  
            // } 
            $currencyCode = "";
            if($_SESSION['currencyType'] == 'USD'){
                $currencyCode = ' $';
            }else{
                $currencyCode = ' ฿';
            } 

            if(isset($_SESSION['userType'])){
                if($_SESSION['userType'] == 'administrator'){ 
                    $data[] = array(  
                        // $no++,
                        $pathImage,
                        $product_name,
                        $product_desc,
                        $product_size, 
                        $color ,
                        number_format($typeCose). $currencyCode, 
                        '<input type="number" min="0" class="form-control" style="width:100px;" id="qty'.$index.'" name="qty">', 
                        '<a onclick="addData('.$index.','.$product_id.','."'$product_name'".','."'$product_size'".','."'$color'".','.$typeCose.','."'$currencyCode'".','."'$product_desc'".')" class="btn btn-primary mr-1" style="text-align:center;color:white;background-color:orange;"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>',
                        
                    );
                }else{
                    $data[] = array(  
                        // $no++,
                        $pathImage,
                        $product_name,
                        $product_desc,
                        $product_size, 
                        $color,
                        number_format($typeCose).$currencyCode, 
                        '<input type="number" min="0" class="form-control" style="text-align: center; width: 100px;" id="qty'.$index.'" name="qty">', 
                        '<a onclick="addData('.$index.','.$product_id.','."'$product_name'".','."'$product_size'".','."'$color'".','.$typeCose.','."'$currencyCode'".','."'$product_desc'".')" class="btn btn-primary mr-1" style="text-align: center;color:white;background-color:orange;"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>',
                        
                    );
                }

                $index++;
            }
           
        } 
         
        $result = array(
            "draw" => $draw,
            "recordsTotal" => $allProduct->num_rows(),
            "recordsFiltered" => $allProduct->num_rows(),
            "data" => $data
        );


        echo json_encode($result);
        exit(); 
    }
    

    public function add()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
        $cost =  $this->input->post('cost');
        //$costSprit = explode("$", $cost);
        $qty = $this->input->post('qty'); 
        $desc = $this->input->post('desc'); 

		console.log($id);
		
		// $currencyCode = "";
		// if($_SESSION['currencyType'] == 'USD'){
		// 	$currencyCode = ' $';
		// }else{
		// 	$currencyCode = ' ฿';
		// } 
  
        $product = array(
            'id'      => $id,
            'name'    => $name, 
            'qty'     => $qty,
			'price'   => $cost, 
            'options' => array('size' => $size, 'color' => $color, 'desc' => $desc) 
            
        );
     
        $this->cart->insert($product); 
        
        $this->session->set_userdata('test',count($this->cart->contents()));
        $this->session->set_userdata('name',$this->input->post('name'));
    }

    public function add_product()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
		$cost =  $this->input->post('cost');
		$currencyCode = $this->input->post('currencyCode');;
        //$costSprit = explode("$", $cost);
        $qty = $this->input->post('qty'); 
        $desc = $this->input->post('desc'); 

		console.log($id);
		

		// $currencyCode = "";
		// if($_SESSION['currencyType'] == 'USD'){
		// 	$currencyCode = ' $';
		// }else{
		// 	$currencyCode = ' ฿';
		// } 
  
  
        $product = array(
            'id'      => $id,
            'name'    => $name, 
            'qty'     => $qty,
            'price'   => $cost,
            'options' => array('size' => $size, 'color' => $color, 'desc' => $desc, 'info' => $currencyCode)
            
        );
     
        $this->cart->insert($product); 
        
        $this->session->set_userdata('test',count($this->cart->contents()));
        $this->session->set_userdata('name',$this->input->post('name'));
    }
    
    public function test()
    {
       // echo '>>>>>> '.$_POST("qty");
    }

    public function removeCart()
    {
        $rowid = $this->input->post('rowid');

        $this->cart->remove($rowid);

        echo $this->cart->contents();
        //$this->load->view('wholesale/checkout');
       // redirect('wholesale/checkout', 'refresh'); 
    }

    public function updateCart(){

        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');

        $data = $this->cart->update(array(

            'rowid'=>$rowid,
            'qty'=> $qty
        ));
    
        $this->cart->update($data);  

        echo $this->cart->contents();
    }

    public function allproduct()
    {
       
        $this->load->view('wholesale/allProductDatatable');   
    }

    public function get_all_items()
    { 
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length")); 

        $allProduct = $this->product_model->getAllProduct();

        $data = [];
        $index = 0;
        $no = 1;  
        foreach($allProduct->result() as $r) { 
             
            $product_name = $r->product_name;
            $product_size = $r->product_size;
            $product_detail_id = $r->product_detail_id;

            $cost = $r->product_cost;
            $usd01 = $r->product_usd01;      
            $usd05 = $r->product_usd05;
            $usd08 = $r->product_usd08;
            $wholesale = $r->product_wholesale; 
            $wholesale30 = $r->product_wholesale30;
            $wholesale35 = $r->product_wholesale35;

            $col = $r->product_colors;
            $colors = explode('|', $col); 
            
            $colorOption = "";  
           
            foreach($colors as $c){ 
                $colorOption .= "<option> $c</option>";  
            } 

 
            $data[] = array(  
               /*  $no++, */
                $product_name,
                $product_size, 
                '<select class="form-control" title="Pick a number" name="color" id="color'.$index.'"  style="width: 100px;">'
                    .$colorOption.  
                '<option>Pls specify</option></select>',
                $cost.'$', 
                $usd01.'$', 
                $usd05.'$', 
                $usd08.'$', 
                $wholesale.'$', 
                $wholesale30.'$',  
                $wholesale35.'$', 
                '<a id ="editItem" onclick="editItem()" class="btn btn-warning mr-1"  data-id='.$product_detail_id.' style="text-align: center;">EDIT</a>',
                
            ); 
            $index++;
        } 
       // data-toggle="modal" data-target="#exampleModal"
        $result = array(
            "draw" => $draw,
            "recordsTotal" => $allProduct->num_rows(),
            "recordsFiltered" => $allProduct->num_rows(),
            "data" => $data
        );


        echo json_encode($result);
        exit();
        $this->session->set_flashdata('msg','Success'); 
        $this->load->view('wholesale/allProductDatatable');
    }

    public function sellCustomer()
    { 
        unset(
        //    $_SESSION['costType'],
            $_SESSION['userType'],
            $_SESSION['customerName'],
            $_SESSION['customerTel'],
            $_SESSION['customerAddress'],
            $_SESSION['discount'] ,
            $_SESSION['shippingCost'],
            $_SESSION['customerType'],
            $_SESSION['email'],
            $_SESSION['currencyType']

        ); 


        $id  = $this->input->post("sellCustomerId");
        $customerType  = $this->input->post("sellCustomerCost");
        $customername  = $this->input->post("sellCustomername");

       // echo $id;
       // echo $customerType;
       // echo $customername;


       $customer = $this->member_model->getCustomerByID($id);

 
        $customerName = $customer[0]->customer_company_name;
        $customerTel = $customer[0]->customer_tel;
        $customerAddress = $customer[0]->customer_address;
        $customerEmail = $customer[0]->customer_email;
        $discount = $customer[0]->discount;
        $shippingCost = $customer[0]->shippingCost;

        $currencyType = "";

        if($customerType == "usd-01" || $customerType == "usd-05" || $customerType == "usd-08" ){
            $currencyType = "USD";
        }else{
            $currencyType = "THB";
        }

        $dataSession = array(
            'costType'  => $customerType,
            'userType'     => 'administrator',
            'customerName'     => $customerName, 
            'customerTel' => $customerTel,
            'customerAddress' => $customerAddress,
            'discount' => $discount,
            'shippingCost' =>$shippingCost,
            'customerType' => $customerType,
            'email' =>  $customerEmail,
            'currencyType' =>  $currencyType
        );

        $this->session->set_userdata($dataSession);

       // echo '>>> '.$_SESSION['customerName'];

        $dataCust =  array(
            'customerType' => $customerType 
        );

       $this->load->view('wholesale/buyProduct',$dataCust);
    }


    public function setreport()
    {
        $invoiceNo =  $this->input->post('invoiceNo');  
        $discount =  $this->input->post('discount');  
        $shippingCost = $this->input->post('shipping'); 
        $vat = $this->input->post('vat');
        $price2 = $this->input->post('price2');
        $price2_detail = $this->input->post('namePrice2');
        $vat_count  = $this->input->post('invoice_vat_count');
        $total  = $this->input->post('total');
        $sub_total  = $this->input->post('sub_total');
        $invoice_consignee  = $this->input->post('invoice_consignee');
        $invoice_ship_to  = $this->input->post('invoice_ship_to');
        $costType  = $this->input->post('costType');
 
        $data = array(
            'invoice_no' => $invoiceNo, 
            'invoice_discount' =>  $discount , 
            'invoice_shipping_cost' => $shippingCost, 
            'vat' => $vat, 
            'invoice_vat_count' => $vat_count, 
            'invoice_price2' => $price2,
            'invoice_price2_detail' => $price2_detail,
            'total' => $total,
            'sub_total' => $sub_total,
            'invoice_consignee' => $invoice_consignee,
            'invoice_ship_to' => $invoice_ship_to,
            'costType' => $costType
        ); 

       // echo '>>>>[ '. $invoiceNo; 
        $invoiceTemp = $this->product_model->getInvoiceTemp($invoiceNo); 

      // echo '>>>> '. $invoiceTemp[0];

        if($invoiceTemp[0]->invoice_no != ""){ 
            $this->product_model->updateInvoiceTemp($invoiceNo,$data); 
        }else{
            $this->product_model->insertInvoiceTemp($data); 
            // $this->product_model->updateInvoiceTemp($invoiceNo,$data); 
        } 


        $result = array(
            "invoice_discount" => $discount,
            "invoice_shipping_cost" => $shippingCost 
        );


        echo json_encode($result);
        exit();
        $this->session->set_flashdata('msg','Success'); 
        $this->load->view('wholesale/checkout');
    }

    function addProductSpecial(){
         
        $name = $this->input->post('psname');
        $size = $this->input->post('pssize');
        $color = $this->input->post('pscolor');
        $cost =  $this->input->post('pscost');
        //$costSprit = explode("$", $cost);
        $qty = $this->input->post('psqty'); 
        $desc = $this->input->post('psdesc'); 

        //console.log($id);
  
        $product = array(
            'id' => uniqid(),
            'name'    => $name, 
            'qty'     => $qty,
            'price'   => $cost,
            'options' => array('size' => $size, 'color' => $color, 'desc' => $desc)
            
        );
     
        $this->cart->insert($product); 
    }

    function retriveBuyInvoice($id){
       // $id = $this->input->post('id');

       unset(
            $_SESSION['oldInvoiceNo']
       );

      $this->cart->destroy();
 
      $invoice = $this->product_model->getInvoiceById($id);

      echo '>> '.$invoice[0]->invoice_no;

      $invoiceDetail = $this->product_model->getInvoiceDetailByInvoid($invoice[0]->invoice_no);

      foreach($invoiceDetail as $row){ 

        $product = array(
            'id' => uniqid(),
            'name'    => $row->product_name, 
            'qty'     => $row->product_qty,
            'price'   => $row->product_unit_price	,
            'options' => array('size' => $row->product_size, 'color' => $row->product_color, 'desc' => $row->product_description)
            
        );
     
        $this->cart->insert($product); 

      }

      
      $dataSession = array(
        'customerName'  => $invoice[0]->invoice_consignee,
        'customerAddress'  => $invoice[0]->invoice_ship_to,
        'costType' => $invoice[0]->typeCose,
        'currencyType' => $invoice[0]->invoice_currency_code,
        'oldInvoiceNo' => $invoice[0]->invoice_no
    );

        $this->session->set_userdata($dataSession);

        
        $dataCust =  array(
            'customerType' => $invoice[0]->typeCose
        );

        $this->load->view('wholesale/buyProduct',$dataCust);

    }
}

