<?php 
 require 'vendor/autoload.php'; 
                    
 use PhpOffice\PhpSpreadsheet\Spreadsheet;
 use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fairtex</title>

  <!-- Custom fonts for this theme -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .bg {
  /* The image used */
  background-image: url("<?php echo base_url(); ?>assets/img/bg/bg1.jpg");
 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  
  </style>  

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md bg text-uppercase fixed-top" id="mainNav" >
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url(); ?>assets/img/logo/Fairtex-shop.png"  height="60"></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>loaddatatable">Product</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
		      <li class="nav-item mx-0 mx-lg-1">

          <?php  if (isset($_SESSION['member_username'])){ ?>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>">Logout</a>
              <?php
          }else{ ?>
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>login">Login</a>
          <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <!-- <header class="masthead bg-primary text-white text-center"> -->
  <header class=" text-white text-center">
  <br><br><br><br><br>
  </header>
  <br>
  <section id="checkout">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-4"><br><img src="<?php echo base_url(); ?>assets/img/logo/Fairtex-shop-checkout.png"></div> 
                <div class="col-4"></div> 
                <div class="col-4">
                    <h6>FAIRTEX EQUIPMENT CO.,LTD.</h6>
                    <label>99/5, MOO3, SOI BOONTHAMANUSORN</label>
                    <label>THEPARAK RD.,BANGPLEEYAI, BANGPLEE,</label>
                    <label>SAMUTPRAKARN 10540, THAILAND</label>
                    <label>TEL (662)3855148,3855149   FAX(662)3855403</label> 
                </div> 
            </div> 
        </div> 
    </div>
    <br><br>
    <!-- <!?php echo $_SESSION['customerName'];  ?> action="<?php echo base_url(); ?>report" method="POST" -->
    <form class="login100-form validate-form" action="#" method="POST">
    <div class="container">
        <div class="row"> 
            <div class="col-4"> 
                <h6>CONSIGNEE:</h6><textarea class="form-control" rows="4" id="consigee" name="consigee" ><?php if(isset($_SESSION['customerName'])){ echo $_SESSION['customerName']; } ?></textarea> 
            </div>  
            <div class="col-4"> 
                <h6>SHIP TO : </h6><textarea class="form-control" rows="4" id="shipTo" name="shipTo"><?php if(isset($_SESSION['customerAddress'])){ echo $_SESSION['customerAddress']; } ?></textarea> 
            </div> 
            <div class="col-4"> 
              <h6>INVOICE NO. : </h6><input class="form-control"  id="invoiceNo" name="invoiceNo" value="<?php echo $invoceNo?>">
              <h6>DATE : </h6><input class="form-control"  id="dateInvoice" name="dateInvoice" value="<?php echo $fullDate?>">
            </div>
        </div>
        <br>

        <?php if(isset($_SESSION['userType'])){
        if($_SESSION['userType'] == 'administrator'){?>
        <div class="row"> 
            <div class="col-4"></div>  
            <div class="col-4"> 
              <br><br>
              <h6>FREIGHT CHARGE : FREIGHT COLLECT </h6>
            </div> 
            <div class="col-4"> 
              <h6>BY : </h6><textarea class="form-control" rows="2" id="by" name="by"></textarea> 
            </div>  
        </div>
      
        <div class="row"> 
            <div class="col-4">
              <br><br>
              <h6>TERM OF SALE : FOB (BANGKOK)</h6>
            </div>  
            <div class="col-4"> 
              <h6>TO : </h6><textarea class="form-control" rows="2" id="to" name="to"></textarea>
            </div> 
            <div class="col-4"> 
              <h6>FROM : </h6><textarea class="form-control" rows="2" id="from" name="from" value="Bangkok Thailand" readOnly>Bangkok Thailand</textarea> 
            </div>  
        </div>
        <?php }
      } ?>
        <br>
        <div id="reload">
          <table class="table"  id="productTable">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;" width="10%">SKU#</th>
                <th scope="col" style="text-align: center;" width="20%">Description</th>
                <th scope="col" style="text-align: center;" width="10%">Size</th>
                <th scope="col" style="text-align: center;" width="10%">Color</th> 
                <th scope="col" style="text-align: center;" width="10%">Qty.</th> 
                <th scope="col" style="text-align: center;" width="15%">UNIT PRICE</th>
                <th scope="col" style="text-align: center;" width="20%">AMOUNT (USD)</th>
                <!-- <th scope="col" style="text-align: center;" width="5%"></th> -->
              </tr>
            </thead>
            <tbody>
              <?php $index = 0;
                foreach ($this->cart->contents() as $items){
              ?> 
              <tr>
                <td style="text-align: center;"><?= $items['name'] ?></td>
                <td style="text-align: center;"><?= $items['options']['desc']  ?></td>
                <td style="text-align: center;"><?= $items['options']['size'] ?></td>
                <td style="text-align: center;"><?= $items['options']['color'] ?></td>
                <!-- <td style="text-align: center;" class='edit' value="<?= $items['rowid'] ?>" >  <input  style="border-style: none;"  type="text" name="quantity" id="<?= $items['rowid'] ?>" class="text-center" value="<?= $items['qty'] ?>" /> </td> -->
                <td style="text-align: center;"><?= $items['qty'] ?></td>
                <td style="text-align: center;"><?= $items['price'].'$' ?></td>
                <td style="text-align: center;"><?= $items['subtotal'].'$' ?></td>
                <!-- <td style="text-align: center;"><span class="table-remove"><button type="button" onclick="delCart('<?= $items['rowid'] ?>')"
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>   -->
              </tr>

              <?php
              } 
              ?>
            </tbody>
          </table>
          </div>  
            
            <!-- delete cart -->
          <!--<a onclick="delCart('<!?= $items['rowid'] ?>')"><img src="<!?php echo base_url(); ?>assets/img/icon/cancel.png"></a> -->

        <?php if(isset($_SESSION['userType'])){
        if($_SESSION['userType'] == 'administrator'){?>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6>Sub Total</h6></div>
            <input type="number" style="text-align: right;display:none;" class="form-control" id="total" name="total" value="<?php echo $this->cart->total() ?>">
            <div class="col-2" style="text-align: right;"> <h4><?=  number_format($this->cart->total()).'$' ?></h4> </div>
          </div>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6>Discount</h6></div>
            <div class="col-2" style="text-align: right;"><input type="number" style="text-align: right;font-weight: bold;" size="150" class="form-control" id="discount" name="discount" onchange="totalFunction()" ></input></div>
          </div>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6><input type="text" style="text-align: right;font-weight: bold;" size="150" class="form-control" id="discount" name="discount"></h6></div>
            <div class="col-2" style="text-align: right;"><input type="number" style="text-align: right;font-weight: bold;" size="150" class="form-control" id="discount" name="discount" onchange="totalFunction()"></input></div>
          </div>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6><input type="text" style="text-align: right;font-weight: bold;" size="150" class="form-control" id="discount" name="discount"></h6></div>
            <div class="col-2" style="text-align: right;"><input type="number" style="text-align: right;font-weight: bold;" size="150" class="form-control" id="discount" name="discount" onchange="totalFunction()"></div>
          </div>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6>shipping cost</h6></div>
            <div class="col-2" style="text-align: right;"><input type="number" style="text-align: right;font-weight: bold;" size="150" class="form-control" id="shipping" name="shipping" onchange="totalFunction()"></div>
          </div>
          <br>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h4>Total</h4></div>
            <div class="col-2" style="text-align: right;"><h4 id="summary"><?=  number_format($this->cart->total()).'$' ?></h4></div>
          </div> 
        <?php }else{ ?>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6>Sub Total</h6></div>
            <input type="number" style="text-align: right;display:none;" class="form-control" id="total" name="total" value="<?php echo $this->cart->total() ?>">
            <div class="col-2" style="text-align: right;"> <h4><?=  number_format($this->cart->total(), 2, '.', '').'$' ?></h4> </div>
          </div>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6>Discount</h6></div>
            <input type="number" style="text-align: right;display:none;" class="form-control" id="total" name="total" value="">
            <div class="col-2" style="text-align: right;"> <h4><?php if(isset($_SESSION['discount'])){ echo number_format($_SESSION['discount']).'$'; } ?> </h4> </div>
          </div> 
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h6>shipping cost</h6></div>
            <input type="number" style="text-align: right;display:none;" class="form-control" id="total" name="total" value="">
            <div class="col-2" style="text-align: right;"> <h4><?php if(isset($_SESSION['shippingCost'])){ echo number_format($_SESSION['shippingCost']).'$'; } ?></h4> </div>
          </div>
          <br>
          <div class="row"> 
            <div class="col-8"></div>  
            <div class="col-2"><h4>Total</h4></div>
            <div class="col-2" style="text-align: right;"><h4 id="summary"><?=  number_format($this->cart->total()-$_SESSION['discount']-$_SESSION['shippingCost'], 2, '.', '').'$' ?></h4></div>
          </div> 

        <?php
        }
      }?>



          <br>
          <div class="row"> 
            <?php if(isset($_SESSION['userType'])){
              if($_SESSION['userType'] == 'administrator'){?>
                  <!-- <div class="col-2"><a href="<?php echo base_url(); ?>loaddatatable" class="btn btn-success " style="width :120px;">Back</a> </div>   -->
                  <div class="col-2"><a href="<?php echo base_url(); ?>loaddatatable/" class="btn btn-success " style="width :120px;">Back</a> </div> 
              <?php }else{  ?>
                <div class="col-2"><a href="<?php echo base_url(); ?>loaddatatable/customer/<?php echo $_SESSION['costType_url']?>" class="btn btn-success " style="width :120px;">Back</a> </div>  
              <?php }} ?>
            <div class="col-7"></div>
 
            <?php if(isset($_SESSION['userType'])){

            if($_SESSION['userType'] == 'administrator'){?>
                <div class="col-3"><a href="<?php echo base_url(); ?>export/exportxlsx" class="btn btn-success" style="width :140px;">Export Invoice.</a></div>

                <?php
                   

                    // mockup data by json file ex. you can use retrive data from db.
                    $json = file_get_contents('employee.json');
                    $employees = json_decode($json, true);

                    $spreadsheet = new Spreadsheet();
                    $sheet = $spreadsheet->getActiveSheet();

                    // header
                    $spreadsheet->getActiveSheet()->setCellValue('A1', 'รหัสพนักงาน')
                        ->setCellValue('B1', 'ชื่อ')
                        ->setCellValue('C1', 'นามสกุล')
                        ->setCellValue('D1', 'อีเมล์')
                        ->setCellValue('E1', 'เพศ')
                        ->setCellValue('F1', 'เงินเดือน')
                        ->setCellValue('G1', 'เบอร์โทรศัพท์');

                    // cell value
                    $spreadsheet->getActiveSheet()->fromArray($employees, null, 'A2');

                    // style
                    $last_row = count($employees) + 1;
                    $spreadsheet->getActiveSheet()->getStyle('F2:F' . $last_row)
                        ->getNumberFormat()
                        ->setFormatCode(NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);

                    $spreadsheet->getActiveSheet()->getStyle('G1:G'.$last_row)->getNumberFormat()
                        ->setFormatCode('0000000000');

                    $spreadsheet->getActiveSheet()->getStyle('A1:G1')->getFont()->setBold(true);

                    foreach(range('A','G') as $columnID) {
                        $spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
                    }

                    $writer = new Xlsx($spreadsheet);

                    // save file to server and create link
                    $writer->save('excel/fairtex.xlsx');
                    
                    echo '<a href="excel/fairtex.xlsx">Download Excel</a>'; 
                    
 
                
                ?>









            <?php }else{?>  
               <div class="col-2"><a href="<?php echo base_url(); ?>export/excel" class="btn btn-success" style="width :120px;">Sent order.</a></div>

            <?php }}?>

            <!-?php echo $_SESSION["test"] ?-->
          </div>
      </form>
          
        <!-- <div class="row"> 
            <div class="col-12">
                <div class="input-group">
                    <textarea class="form-control" rows="4" id="condign"></textarea>
                    <textarea class="form-control" rows="4" id="shipto"></textarea>  
                    <textarea class="form-control" rows="4" id="shipto"></textarea>  
                </div>
            </div>  
        </div> -->
    </div>
    
 
  <section>
  
  <div class="container page-section portfolio"> 
    <!-- <div class="row"> -->  
    <div class="container ">
         
    </div>
  </div>
  
 <!-- Footer -->
 <footer class="footer text-center bg">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h5 class="text-uppercase mb-4">Fairtex Equipment Co.,Ltd</h5>
          <p class="lead mb-0">99/5 Moo3 Soi Boonthamanusorn, Theparak Road, Bangpleeyai, Bangplee Samutprakarn 10540
		  	<br>Email: somsiri@fairtexproshop.com
			<br>Phone: (+662) 385-5149
			<br>Fax: (+662) 385-5403</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About</h4>
		   
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
 

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>

  <script>   
 
    $(document).ready(function(){
     
      // Save data
      $(".edit").focusout(function(e){
        var rowid = $(this).attr('value')
        var qty =  document.getElementById(rowid).value;

        //alert(rowid);
  
          $.ajax({
           url: '<?php echo base_url(); ?>loaddatatable/updateCart',
           type: 'POST',
           data: {rowid : rowid,
                  qty : qty

            },
           error: function() {
              alert('Something is wrong');
           },
           success: function(response) { 
            location.reload();
                //$("#productTable").load(window.location + " #productTable");
           }
        }); 
      });

    });

    function totalFunction(){

      var total = document.getElementById("total").value;
      var discount = document.getElementById("discount").value;
      var shipping = document.getElementById("shipping").value;
      var summary;
 
      if(discount != "" && shipping != ""){
          summary = total-discount-shipping;
       }else{
          if(discount != ""){
            summary = total-discount;
          }
          if(shipping != ""){
            summary = total-shipping;
          }
       } 

      var headingDiv = document.getElementById("summary");
          headingDiv.innerHTML = summary+'$' ;

     // alert('total : '+total);
    }

    function delCart(rowid){ 
        $.ajax({
           url: '<?php echo base_url(); ?>loaddatatable/removeCart',
           type: 'POST',
           data: {rowid : rowid },
           error: function() {
              alert('Something is wrong');
           },
           success: function(response) { 
            location.reload();
               // $("#productTable").load(window.location + " #productTable");
           }
        }); 
 
    }

    // (".downloadLink").click(
    //     function(e) {   
    //         alert('XXX');
    //     }
    // );

    // function updateCard(rowid){
    //     alert("XXX "+ rowid);
    // }
  </script>
</body>
 

</html>
