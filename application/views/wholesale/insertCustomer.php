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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

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
  </section>

  <div class="container">
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
          <a href="<?php echo base_url(); ?>draftInvoices" class="btn btn-primary" role="button" style="width : 150px">Draft invoice</a><br><br>
      </div>
      <div class="col-10">
          <form  action="<?php echo base_url(); ?>customer/insertCustomer" method="POST"> 
              <div class="row">
                  <div class="col-3"></div> 
                  <div class="col-4"  style="text-align: right;font-weight: bold;"><h2>Add Customer</h2></div> 
                  <div class="col-5"></div> 
              </div> <br>
              <div class="row">
                  <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Username : </label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="customer_name " name="customer_name"></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <div class="row"> 
                  <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Company name : </label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="customer_company_name" name="customer_company_name"></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <div class="row"> 
                  <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Tax : </label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="customer_tax" name="customer_tax"></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <div class="row">  
                  <div class="col-3"  style="text-align: right;font-weight: bold;" ><label>Telephone : </label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="customer_tel"  name="customer_tel"></div> 
                  <div class="col-2"></div>
              </div> <br>
              <div class="row">  
                  <div class="col-3"  style="text-align: right;font-weight: bold;" ><label>Email : </label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="customer_email"  name="customer_email"></div> 
                  <div class="col-2"></div>
              </div> <br>
              <br>
              <div class="row">
                  <div class="col-3"  style="text-align: right;font-weight: bold;" type="number"><label>Address : </label></div> 
                  <div class="col-7">  <textarea class="form-control" rows="5" id="customer_address"></textarea></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <br>
              
              <div class="row">
                  <div class="col-6"></div> 
                  <div class="col-2">
                      <button  class="btn btn-primary" style="width : 120px">Add</button> 
                  </div>   
                  <div class="col-2"> 
                      <a href="<?php echo base_url(); ?>products/"  class="btn btn-danger"  style="width : 120px">Cancel</a><br><br>
                  </div>  
                  <div class="col-2"></div> 
              </div> <br>  

              <table class="table table-striped table-bordered custdatatable" style="width: 100%" id="custdatatable">
                  <thead>
                      <tr>
                          <th>Customer name</th>
                          <th>Company name</th>
                          <th>Telephone</th>
                          <th>Address</th>
                          <th>Discount</th>
                          <th>Shipping</th>
                          <th>Email</th> 
                          <th></th>
                      </tr>
                  </thead>
                  <body>

                      <?php foreach ($allCustomer as $item) { ?> 
                          <tr>
                              <td><?php echo $item->customer_name;?></td>
                              <td><?php echo $item->customer_company_name; ?></td>
                              <td><?php echo $item->customer_tel;?></td>
                              <td><?php echo $item->customer_address;?></td>
                              <td class="text-right"><?php echo $item->discount; ?>$</td>
                              <td class="text-right"><?php echo $item->shippingCost; ?>$</td>
                              <td><?php echo $item->customer_email;?></td> 
                              <td width="6%"> 
                                  <a type="button" class="btn btn-info"  onclick="functionEdit(<?php echo $item->customer_id;?>)"><span class="fa fa-pencil-square-o" aria-hidden="true"></a>  
                                  <!-- <a type="button" class="btn btn-success"  onclick=""><span class="fa fa-check" ></a>   -->
                              </td>
                          </tr>

                      <?php } ?>  
                  </body> 
              </table>  
          </div>  

          
      </div>
    </div>
  </div>

  <div class="modal" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Plofile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 

          <input type="text" class="form-control" id="edit_customer_id" name="edit_customer_id" hidden>

            <div class="row">
              <div class="col-4">Customer name</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_customer_name" name="edit_customer_name"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Company</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_customer_company_name" name="edit_customer_company_name"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Telephone</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_customer_tel"  name="edit_customer_tel"></div>
              <!-- <div class="col-1"></div> -->
            </div> 
            <div class="row mt-1">
              <div class="col-4">Discount</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_discount"  name="edit_discount"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Shopping</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_shippingCost"  name="edit_shippingCost"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Tax</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_customer_tax"  name="edit_customer_tax"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Email</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_customer_email"  name="edit_customer_email"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4 mt-1">Address</div>
              <div class="col-8"> <textarea class="form-control" rows="5" id="edit_customer_address"></textarea></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-3">
              <div class="col-6"></div>
              <div class="col-3"> <button type="button" class="btn btn-primary" onclick="functionSaveEdit()" style="width : 100px" data-dismiss="modal">Save</button></div>
              <div class="col-3"> <button type="button" class="btn btn-danger" style="width : 100px" data-dismiss="modal">Close</button></textarea></div>
       
            </div>
            
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>
  </div>
 
 
 <?php if(ISSET($_SESSION["test"])){
    echo  $_SESSION["test"];
 }  ?>
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
        $('.custdatatable').DataTable({});

        function functionEdit(id) { 
            $.ajax({
              url: '<?php echo base_url(); ?>customer/getCustomerByID',
              type: 'POST',
              data: {id : id },
              error: function() {
                  alert('Something is wrong');
              },
              dataType: "json",
              success: function(response) { 
                  //$("#mydatatable").load(window.location + " #mydatatable");
                  // alert('customer_name : '+response['customer_name']);
                  //  location.reload();

                $("#modalEdit").modal('show');
                
                document.getElementById("edit_customer_id").value = response['customer_id'];
                document.getElementById("edit_customer_name").value = response['customer_name'];
                document.getElementById("edit_customer_company_name").value = response['customer_company_name'];
                document.getElementById("edit_customer_tel").value = response['customer_tel'];
                document.getElementById("edit_customer_address").value = response['customer_address'];
                document.getElementById("edit_customer_tax").value = response['customer_tax'];
                document.getElementById("edit_discount").value = response['discount'];
                document.getElementById("edit_shippingCost").value = response['shippingCost'];
                document.getElementById("edit_customer_email").value = response['customer_email'];

                 
              }
            }); 
        }

        function functionSaveEdit() { 

          var customer_id = document.getElementById("edit_customer_id").value;
          var customer_name = document.getElementById("edit_customer_name").value;
          var customer_company_name = document.getElementById("edit_customer_company_name").value;
          var customer_tel = document.getElementById("edit_customer_tel").value;
          var customer_address = document.getElementById("edit_customer_address").value;
          var customer_tax = document.getElementById("edit_customer_tax").value;
          var customer_discount = document.getElementById("edit_discount").value;
          var customer_shipping = document.getElementById("edit_shippingCost").value;
          var customer_email = document.getElementById("edit_customer_email").value;
           
          $.ajax({
            url: '<?php echo base_url(); ?>customer/updateCustomer',
            type: 'POST',
            data: {
                id : customer_id,
                name : customer_name,
                company_name : customer_company_name,
                tel : customer_tel,
                address : customer_address,
                tax : customer_tax,
                discount : customer_discount,
                shipping : customer_shipping,
                email : customer_email},
            error: function() {
                alert('Something is wrong');
            }, 
            success: function(response) { 
               // $("#custdatatable").load(window.location + " #custdatatable");
               // alert('customer_name : '+response);
               location.reload(); 
                
            }
          }); 
        }
  </script>



</body>
 
<script>
  function showPassword() {
    var x = document.getElementById("member_password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
 
</html>
