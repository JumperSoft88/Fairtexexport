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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
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
                <a href="<?php echo base_url(); ?>draftInvoices" class="btn btn-primary" role="button" style="width : 150px">Draft invoice</a><br><br>
            </div>
            <div class="col-10">
                <form  action="<?php echo base_url(); ?>products/insertUser/insert" method="POST">  
                  <div class="row">
                      <div class="col-3"></div> 
                      <div class="col-4"  style="text-align: right;font-weight: bold;"><h2>Add Member</h2></div> 
                      <div class="col-5"></div> 
                  </div> <br>

                  <div class="row">
                    <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Username : </label></div> 
                    <div class="col-7"><input type="text" class="form-control" id="member_username " name="member_username"></div> 
                    <div class="col-2"></div> 
                  </div> <br> 
                  <div class="row">
                      <div class="col-3" style="text-align: right;font-weight: bold;"><label>Password :</label></div> 
                      <div class="col-7">
                        <input type="password" id="member_password" name="member_password"  class="form-control pwd" >    
                        <label class="checkbox-inline"><input type="checkbox"  onclick="showPassword()" >Show Password</label>
                      </div> 
                      <div class="col-2"></div>  
                  </div> <br>
                  <div class="row"> 
                      <div class="col-3" style="text-align: right;font-weight: bold;"><label>User type :</label></div> 
                      <div class="col-7">
                          <select class="form-control" title="Pick a number" name="member_type_price" id="member_type_price">
                              <option>Please select...</option> 
                              <option>administrator</option> 
                              <option>user</option> 
                          </select> 
                      </div> 
                      <div class="col-2"></div>  
                  </div> <br>
                  <br> 
                  <div class="row">
                      <div class="col-6"></div> 
                      <div class="col-2">
                          <button  class="btn btn-primary" style="width : 120px">Add</button> 
                      </div>  
                      <div class="col-2"> 
                          <a href="<?php echo base_url(); ?>products/"  class="btn btn-danger"  style="width : 120px">cancel</a><br><br>
                      </div>  
                      <div class="col-2"></div> 
                  </div> <br> 
                </form>

                <table class="table table-striped table-bordered memberdatatable" style="width: 100%" id="memberdatatable">
                    <thead>
                        <tr>
                            <th>member_username</th>
                            <th>member_password</th>
                            <th>member_type_price</th> 
                            <th></th>
                        </tr>
                    </thead>
                    <body>

                        <?php foreach ($_SESSION['allMember'] as $item) { ?> 
                            <tr>
                                <td><?php echo $item->member_username;?></td>
                                <td><?php echo md5($item->member_password); ?></td>
                                <td><?php echo $item->member_type_price;?></td> 
                                <td width="5%"> 
                                  <a type="button" class="btn btn-info"  onclick="functionEdit(<?php echo $item->member_id;?>)"><span class="fa fa-pencil-square-o" aria-hidden="true"></a>  
                                </td>
                            </tr>

                        <?php } ?> 
                                    
                        
                        
                    </body> 
                </table>
              </div>
        
</section>
                <br>
               
            </div>
        </div>
    </div>
  </div>

  <div class="modal" id="modalUserEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 

          <input type="text" class="form-control" id="edit_member_id" name="edit_member_id" hidden>
 
            <div class="row">
              <div class="col-4">Username</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_member_username" name="edit_product_name"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Password</div>
              <div class="col-8">
                  <input type="text" id="edit_member_password" name="edit_member_password"  class="form-control pwd" >    
                  <!-- <label class="checkbox-inline"><input type="checkbox"  onclick="showPassword()" >Show Password</label> -->
              </div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">User type</div>
              <div class="col-8">
                <select class="form-control" title="Pick a number" name="edit_member_type_price" id="edit_member_type_price">
                    <option>Please select...</option> 
                    <option>administrator</option> 
                    <option>user</option> 
                </select> 
              </div>
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

</body>

<script> 
      $('.memberdatatable').DataTable({});
  </script>

 
<script>

  function functionEdit(id) {  
            $.ajax({
              url: '<?php echo base_url(); ?>products/getMemberByID',
              type: 'POST',
              data: {id : id },
              error: function() {
                  alert('Something is wrong');
              },
              dataType: "json",
              success: function(response) {  
               // alert(response['id']);

                $("#modalUserEdit").modal('show');
                
                 document.getElementById("edit_member_id").value = response['member_id'];
                 document.getElementById("edit_member_username").value = response['member_username'];
                 document.getElementById("edit_member_password").value = response['member_password'];
                 document.getElementById("edit_member_type_price").value = response['member_type_price'];
                 
                  
              }
            }); 
        }

   function functionSaveEdit() { 

      var edit_member_id = document.getElementById("edit_member_id").value;
      var edit_member_username = document.getElementById("edit_member_username").value;
      var edit_member_password = document.getElementById("edit_member_password").value;
      var edit_member_type_price = document.getElementById("edit_member_type_price").value; 

      $.ajax({
        url: '<?php echo base_url(); ?>products/updateMemberByID',
        type: 'POST',
        data: {
          member_id : edit_member_id,
          member_username : edit_member_username,
          member_password : edit_member_password,
          member_type_price : edit_member_type_price },
        error: function() {
            alert('Something is wrong');
        }, 
        success: function(response) { 
          location.reload(); 
            
        }
      }); 
    }

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
