<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fairtex</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>login/member">Home</a>
          </li>
          <!-- <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li> -->
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

  <section id="slidetwo">
    <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                      <!--   <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>
 -->
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/01.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/02.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/03.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/04.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/05.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/06.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/07.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/img/products/08.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
    </div>
 
  <section>
  
  <div class="container page-section portfolio"> 
    <!-- <div class="row"> -->  
    <div class="container ">
        <div class="row " >
            <div class="col-2 border-right">
                <a href="#" style="width : 200px">รายการ</a><br><br>
                <?php if(isset($_SESSION["userType"])){ 
                    if($_SESSION["userType"] == 'administrator'){ 
                  ?>
                    <a href="<?php echo base_url(); ?>products/insertProduct/add" class="btn btn-primary" role="button" style="width : 150px">เพิ่มสินค้า</a><br><br>
                  <?php
                      }
                }

                ?>
               
                <a href="#" class="btn btn-primary" role="button" style="width : 150px">ประวัติการสั่งซื้อ</a><br><br>
                <a href="<?php echo base_url(); ?>loaddatatable/" class="btn btn-primary" role="button" style="width : 150px">Draft การสั่งซื้อ</a><br><br>
            </div>
            <div class="col-10"> 
                <!-- Portfolio Section -->
                <form class="login100-form validate-form" action="<?php echo base_url(); ?>products" method="POST">

                  <section  id="portfolio">  
                    <div class="row">
                        <div class="col-1"><label>ลูกค้า</label></div> 
                        <div class="col-3">
                          <select class="form-control" title="Pick a number" name="customerName" id="customerName">
                            <option>กรุณาเลือก...</option>
                              <?php foreach($_SESSION["allCustomer"] as $row) {?> 
                                  <option><?php echo  $row->customer_name.'  '.$row->customer_company_name;?></option>
                              <?php }?> 
                          </select>
                        </div>  
                        <div class="col-1"><label>ราคา</label></div>  
                        <div class="col-3">
                          <select class="form-control" title="Pick a number" name="costType" id="costType" >
                            <option>กรุณาเลือก...</option>
                              <?php foreach($_SESSION["allTypeCost"] as $row) {?> 
                                  <option><?php echo  $row->type_cost_topic;?></option>
                              <?php }?> 
                          </select>
                        </div>  
                        <div class="col-4"><button  class="btn btn-primary">ค้นหา</button><br><br></div>  
                    </div>
                    <br><br> 
                  </form>

                  <?php if(ISSET($_SESSION["costType"])){
                  ?>
                      <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">ราคา <?php echo $_SESSION["costType"] ?></h4>  
                  <?php
                  } ?>
                   <br><br><br>
                    <table class="table"  id="productTable">
                      <thead>
                        <tr> 
                          <th scope="col">Product Name</th>
                          <th scope="col">Size</th>
                          <th scope="col">Color</th>
                          <th scope="col">Cost</th>
                          <th scope="col">Qty.</th> 
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <?php if(ISSET($products)){ ?>
                      <tbody>
                      <?php $index = 0; $price = $_SESSION["costType"];  foreach ($products as $row): ?>
                        <tr>
                          <td style="display:none;"><?= $row->product_id ?></td>
                          <td><?= $row->product_name ?></td>
                          <td><?= $row->product_size ?></td>
                          <td>
                            <select class="form-control" title="Pick a number" name="color" id="color">
                              <?php $colors = explode("|", $row->product_colors); 
                                foreach($colors as $color){ 
                                  ?>
                                  <option><?php  echo $color; ?></option>
                                  <?php
                                }
                              ?>
                              
                            </select>
                          </td>
                          <td><?php  
                                switch ($_SESSION["costType"]) {
                                  case "usd-01": 
                                      echo $row->product_usd01;
                                      break;
                                  case "usd-05": 
                                      echo $row->product_usd05;
                                      break;
                                  case "usd-08": 
                                      echo $row->product_usd08;
                                      break; 
                                  case "wholesale": 
                                      echo $row->product_wholesale;
                                      break; 
                                  case "product_wholesale30": 
                                      echo $row->product_wholesale30;
                                      break; 
                                  case "wholesale35": 
                                      echo $row->product_wholesale35;
                                      break;
                              } 
                           ?> $ </td>
                          <td><input type="number" class="form-control" id="qty" name="qty"></td>
                       
                          <td><a onclick="showTableData(<?php echo $index++ ?>,<?php echo  $row->product_detail_id ?>)" class="btn btn-primary" style="width :60px">เพิ่ม</a></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>

                      <?php } ?>
                    </table>
                    <?php if(ISSET($products)){ ?>
                      <div class="row">
                          <div class="col-5"></div> 
                          <div class="col-5"></div> 
                          <div class="col-2"><p><?php echo $links; ?></p></div> 
                      </div>
                    <?php } ?> 
                </section>
                <br>
                <div class="row">
                    <div class="col-5"></div> 
                    <div class="col-5"></div> 
                    <div class="col-2"><a href="<?php echo base_url(); ?>checkout" class="btn btn-primary" style="width :120px">Check out.</a></div> 
                </div> 
            </div>
        </div>
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
		  	<br>Email: fairtexexport@gmail.com
			<br>Phone: (+662) 385-5149, 02-385-5148 / M (+663) 902-7176
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

</body>

<script>
  function showTableData(tableId,id){

     //Reference the Table.
     var grid = document.getElementById("productTable");
 
      //Reference the CheckBoxes in Table.
      var checkBoxes = grid.getElementsByTagName("A");
      var inputNumber = grid.getElementsByTagName("INPUT"); 
      var selectColor = grid.getElementsByTagName("SELECT");

      var x = document.getElementById("color").selectedIndex; 

      var row = checkBoxes[tableId].parentNode.parentNode; 
     // alert("name : "+row.cells[1].innerHTML);
     // alert("size : "+row.cells[2].innerHTML); 
     // alert("color : "+grid.rows[tableId+1].cells[3].children[0].value);
     // alert("cost :  "+row.cells[4].innerHTML);  
     // alert("qty : "+grid.rows[tableId+1].cells[5].children[0].value);
      
      var name = row.cells[1].innerHTML;
      var size = row.cells[2].innerHTML;
      var color = grid.rows[tableId+1].cells[3].children[0].value;
      var cost = row.cells[4].innerHTML;
      var costSpit = cost.split("$");
      var qty = grid.rows[tableId+1].cells[5].children[0].value;

      $.ajax({
           url: '<?php echo base_url(); ?>products/add',
           type: 'POST',
           data: {id : id,
                  name : name, 
                  size : size,
                  color : color,
                  cost : costSpit,
                  qty : qty},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
       
               /*  alert("Record added successfully");   */
           }
        });
  }

</script>

</html>
