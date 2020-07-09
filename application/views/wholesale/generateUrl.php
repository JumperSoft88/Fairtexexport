<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fairtex</title>

  <!-- Custom fonts for this theme --> 
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
                <a href="<?php echo base_url(); ?>login/member" style="width : 200px">List >></a><br><br>
                <?php if(isset($_SESSION["userType"])){ 
                    if($_SESSION["userType"] == 'administrator'){ 
                  ?>
                    <a href="<?php echo base_url(); ?>products/insertProduct/add" class="btn btn-primary" role="button" style="width : 150px">Add Product</a><br><br>
                    <a href="<?php echo base_url(); ?>customer" class="btn btn-primary" role="button" style="width : 150px">Add Customer</a><br><br>
                    <a href="<?php echo base_url(); ?>products/insertUser/add_user" class="btn btn-primary" role="button" style="width : 150px">Add Member</a><br><br>
                  <?php
                      }
                }

                ?>
                
                <a href="<?php echo base_url(); ?>generateUrl" class="btn btn-primary" role="button" style="width : 150px">Create Url</a><br><br>
                <a href="<?php echo base_url(); ?>historyInvoices" class="btn btn-primary" role="button" style="width : 150px">History invoice</a><br><br>
                <a href="<?php echo base_url(); ?>draftInvoices" class="btn btn-primary" role="button" style="width : 150px">Drift invoice</a><br><br>
            </div>
            <div class="col-10">  
                <label><h5><p>Customer </p></h5></label>

                <div class="row">
                    <div class="col-3">
                        <select class="form-control" title="Pick a number" name="newtype" id="newtype">
                            <?php  
                                foreach($_SESSION['allTypeCost'] as $row){ 
                                ?>
                                <option><?php  echo $row->type_cost_topic; ?></option>
                                <?php
                                }
                            ?> 
                        </select> 
                    </div>
                    <div class="col-2"><input type="number" class="form-control" id="gen_discount"  name="gen_discount" placeholder="discount" value="0"></div>
                    <div class="col-2"><input type="number" class="form-control" id="gen_shippingCost"  name="gen_shippingCost" placeholder="shipping" value="0"></div>
                    <div class="col-2"><a type="button" class="btn btn-info btn-sm "  onclick="functionGenerate(0,'new')">Generate</a>  </div>
                    <div class="col-3"></div>
                </div>
                
                </select> 
                <br> <br>
                <table class="table table-striped table-bordered mydatatable" style="width: 100%" id="mydatatable">
                    <thead>
                        <tr>
                            <th>Customer name</th>
                            <th>Company</th>
                            <th>Discount</th> 
                            <th>Shipping</th> 
                            <th>Price</th>  
                            <th></th>
                        </tr>
                    </thead>
                    <body>

                        <?php foreach ($_SESSION['genAllCustomer'] as $item) { ?> 
                            <tr>
                                <td><?php echo $item->customer_name;?></td>
                                <td><?php echo $item->customer_company_name; ?></td> 
                                <td><?php echo $item->discount; ?></td> 
                                <td><?php echo $item->shippingCost; ?></td> 

                                <td>
                                    <select class="form-control" title="Pick a number" name="<?php echo $item->customer_id;?>" id="<?php echo $item->customer_id;?>">
                                        <?php  
                                            foreach($_SESSION['allTypeCost'] as $row){ 
                                            ?>
                                            <option><?php  echo $row->type_cost_topic; ?></option>
                                            <?php
                                            }
                                        ?> 
                                    </select> 
                                </td>
                                <td> 
                                    <a type="button" class="btn btn-info btn-sm "  onclick="functionGenerate(<?php echo $item->customer_id;?>,'<?php echo $item->customer_name;?>')">Generate</a>  
                                </td>
                            </tr>

                        <?php } ?> 
                                    
                    </body> 
                </table>

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

        <div class="modal" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center"> 
                        <textarea id="codeUrlCopy" rows="6" cols="55"> </textarea> 
                        <button class="mt-1" onclick="copy()">Copy</button>
                    
                    </div>
                </div>
            </div>
        </div>

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

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>

    <script> 
        $('.mydatatable').DataTable({});
        
    </script>

    <script>
        function functionGenerate($customerId,$customerName) {
         
        
         var customerId = $customerId;
         var customerName = $customerName; 
         var discount = "";
         var shippingCost = "";
         var costType = "";

         //alert(customerName);

         if(customerName == "new"){
            costType =  document.getElementById('newtype').value; 
            discount = document.getElementById('gen_discount').value; 
            shippingCost = document.getElementById('gen_shippingCost').value; 
 
         }else{
            
            costType =  document.getElementById($customerId).value;
         }

         var amphureObject = $('#codeUrlCopy');

         //alert(customerId);
         //alert('<?php echo base_url(); ?>loaddatatable/customer/');

            $.ajax({
                url: '<?php echo base_url(); ?>generateUrl/generateCode',
                type: 'POST',
                data: {customerId : customerId,
                        customerName: customerName,
                        costType: costType,
                        discount : discount,
                        shippingCost : shippingCost},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
             
                    var res = data.substring(11, data.length);
                     
                    var url = '<?php echo base_url(); ?>loaddatatable/customer/'+res;
                    document.getElementById("codeUrlCopy").value = url;
 
                    $("#myModal").modal('show');
                       // alert("Record added successfully");   
                }
            }); 
 
        }

        function copy() {
            var textarea = document.getElementById("codeUrlCopy");
            textarea.select();
            document.execCommand("copy");
        }

    </script>

</body>



</html>
