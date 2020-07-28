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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>login/member">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>loaddatatable">Product</a>
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
          <form  action="<?php echo base_url(); ?>products/insertProduct/insert" method="POST" enctype="multipart/form-data"> 
              <div class="row">
                  <div class="col-3 "></div> 
                  <div class="col-4 "  style="text-align: right;font-weight: bold;"><h2>Add Product</h2></div> 
                  <div class="col-3 "></div> 
                  <div class="col-2 "><!--a href="<!?php echo base_url(); ?>loaddatatable/allproduct"  class="btn btn-success"  style="width : 120px">All Product</a --></div> 
              </div> <br>
              
              <div class="row">
                  <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Image : </label></div> 
                  <div class="col-7"><input type="file"  id="profile_image " name="profile_image"></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <div class="row">
                  <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Product name : </label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="product_name " name="product_name"></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <div class="row"> 
                  <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Size :</label></div> 
                  <div class="col-7"><input type="text" class="form-control" id="product_size" name="product_size"></div> 
                  <div class="col-2"></div> 
              </div> <br>
              <div class="row"> 
                    <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Color :</label></div> 
                    <div class="col-7"><input type="text" class="form-control" id="product_colors" name="product_colors"></div> 
                    <div class="col-2"></div> 
                </div> <br>
                <div class="row"> 
                    <div class="col-3"  style="text-align: right;font-weight: bold;"><label>Cost :</label></div> 
                    <div class="col-7"><input type="number" class="form-control" id="product_cost" name="product_cost"></div> 
                    <div class="col-2"></div> 
                </div> <br>
                <div class="row">
                    <div class="col-1"></div> 
                    <div class="col-3" style="text-align: right;font-weight: bold;"><label>usd01 :</label></div> 
                    <div class="col-2"><input type="number" class="form-control" id="product_usd01" name="product_usd01"></div> 
                    <div class="col-3" style="text-align: right;font-weight: bold;"><label>usd05 :</label> </div> 
                    <div class="col-2"><input type="number" class="form-control" id="product_usd05" name="product_usd05"></div> 
                </div> <br>
                <div class="row">
                    <div class="col-1"></div> 
                    <div class="col-3" style="text-align: right;font-weight: bold;"><label>usd08 :</label></div> 
                    <div class="col-2"><input type="number" class="form-control" id="product_usd08" name="product_usd08"></div> 
                    <div class="col-3" style="text-align: right;font-weight: bold;"><label>wholesale :</label> </div> 
                    <div class="col-2"><input type="number" class="form-control" id="product_wholesale" name="product_wholesale"></div> 
                </div> <br>
                <div class="row">
                    <div class="col-1"></div> 
                    <div class="col-3" style="text-align: right;font-weight: bold;"><label>wholesale30 :</label></div> 
                    <div class="col-2"><input type="number" class="form-control" id="product_wholesale30" name="product_wholesale30"></div> 
                    <div class="col-3" style="text-align: right;font-weight: bold;"><label>wholesale35 :</label> </div> 
                    <div class="col-2"><input type="number" class="form-control" id="product_wholesale35" name="product_wholesale35"></div> 
                </div> <br>

              <br>
              
              <div class="row">
                  <div class="col-8"></div> 
                  <div class="col-2">
                      <button  class="btn btn-primary" style="width : 120px">Add</button> 
                  </div>   
                  <div class="col-2"> 
                      <a href="<?php echo base_url(); ?>products/"  class="btn btn-danger"  style="width : 120px">Cancel</a><br><br>
                  </div>   
              </div> <br>   
              </form>
              <table class="table table-striped table-bordered productdatatable" style="width: 100%" id="productdatatable">
                  <thead>
                      <tr class="text-center">
                          <th>Image</th>
                          <th>Product name</th>
                          <th>Description</th>
                          <th>Size</th>
                          <th >Color</th>
                          <th>cost</th>
                          <th>usd 01</th>
                          <th>usd 05</th> 
                          <th>usd 08</th> 
                          <th>wholesale</th> 
                          <th>wholesale 30</th> 
                          <th>wholesale 35</th> 
                          <th></th>
                      </tr>
                  </thead>
                  <body>

                      <?php foreach ($allProduct as $item) { ?> 
                          <tr>
                              <td><?php if($item->image_name != null ){echo '<img src="'.base_url().$item->image_name.'" class="w3-border" style="width:100px;height:100px;">';}else{ echo '<img src="'.base_url().'images/emtry.jpg" class="w3-border" style="width:100px;height:100px;">';}?></td>
                              <td><?php echo $item->product_name;?></td>
                              <td><?php echo $item->product_desc; ?></td>
                              <td><?php echo $item->product_size; ?></td>
                              <td><?php echo $item->product_colors;?></td>
                              <td><?php echo $item->product_cost;?></td>
                              <td><?php echo $item->product_usd01; ?></td>
                              <td><?php echo $item->product_usd05;?></td> 
                              <td><?php echo $item->product_usd08;?></td> 
                              <td><?php echo $item->product_wholesale;?></td> 
                              <td><?php echo $item->product_wholesale30;?></td> 
                              <td><?php echo $item->product_wholesale35;?></td> 
                              <td width="6%"> 
                                  <a type="button" class="btn btn-info"  onclick="functionEdit(<?php echo $item->product_id;?>)"><span class="fa fa-pencil-square-o" aria-hidden="true"></a>  
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
<!-- 
  
  <div class="row">
              <div class="col-4">Image</div>
              <div class="col-8"><img src="emtry.jpg" class="w3-border" alt="Norway" style="padding:4px;width:50%"></div>
 
            </div> -->

  <div class="modal" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 

        <form  action="<?php echo base_url(); ?>products/updateProductDetailByID" method="POST" enctype="multipart/form-data"> 

          <input type="text" class="form-control" id="edit_product_id" name="edit_product_id" hidden>
  
            <div class="row">
              <div class="col-4">Image</div>
              <div class="col-8"><input type="file"  id="edit_profile_image" name="edit_profile_image"></div>
              <!-- <div class="col-1"></div> -->
            </div><br>
            <div class="row">
              <div class="col-4">Product name</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_product_name" name="edit_product_name"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Description</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_product_desc" name="edit_product_desc"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Size</div>
              <div class="col-8"><input type="text" class="form-control" id="edit_product_size" name="edit_product_size"></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Color</div>
              <div class="col-8"><textarea type="text" class="form-control" rows="5" id="edit_product_colors" name="edit_product_colors"></textarea></div>
              <!-- <div class="col-1"></div> -->
            </div>
            <div class="row mt-1">
              <div class="col-4">Cost</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_cost" name="edit_product_cost"></div>
              <div class="col-3"></div> 
            </div>
            <div class="row mt-1">
              <div class="col-4">usd01</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_usd01" name="edit_product_usd01"></div>
              <div class="col-3"></div> 
            </div>
            <div class="row mt-1">
              <div class="col-4">usd05</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_usd05" name="edit_product_usd05"></div>
              <div class="col-3"></div> 
            </div>
            <div class="row mt-1">
              <div class="col-4">usd08</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_usd08" name="edit_product_usd08"></div>
              <div class="col-3"></div> 
            </div>
            <div class="row mt-1">
              <div class="col-4">wholesale</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_wholesale" name="edit_product_wholesale"></div>
              <div class="col-3"></div> 
            </div>
            <div class="row mt-1">
              <div class="col-4">wholesale30</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_wholesale30" name="edit_product_wholesale30"></div>
              <div class="col-3"></div> 
            </div>
            <div class="row mt-1">
              <div class="col-4">wholesale35</div>
              <div class="col-5"><input type="text" class="form-control" id="edit_product_wholesale35" name="edit_product_wholesale35"></div>
              <div class="col-3"></div> 
            </div> <br>
            <!-- <div class="row mt-3">
              <div class="col-6"></div>
              <div class="col-3"> <button type="button" class="btn btn-primary" onclick="functionSaveEdit()" style="width : 100px" data-dismiss="modal">Save</button></div>
              <div class="col-3"> <button type="button" class="btn btn-danger" style="width : 100px" data-dismiss="modal">Close</button></textarea></div>
       
            </div> -->
              <div class="row">
                  <div class="col-4"></div> 
                  <div class="col-2">
                      <button  class="btn btn-primary" style="width : 120px">update</button> 
                  </div>   
                  <div class="col-2"></div> 
                  <div class="col-2"> 
                      <a href="<?php echo base_url(); ?>products/"  class="btn btn-danger"  style="width : 120px">Cancel</a><br><br>
                  </div>   
              </div> <br>   
            </form>
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
    $('.productdatatable').DataTable({});
      
      function functionEdit(id) { 
            $.ajax({
              url: '<?php echo base_url(); ?>products/getProductDetailByID',
              type: 'POST',
              data: {id : id },
              error: function() {
                  alert('Something is wrong');
              },
              dataType: "json",
              success: function(response) { 
                //alert(response['product_detail_id']);
                //console.log('>>> '+response['product_name']);
                  //$("#mydatatable").load(window.location + " #mydatatable");
                  // alert('customer_name : '+response['customer_name']);
                  //  location.reload();

                $("#modalEdit").modal('show');

                //alert(id);
                
                 document.getElementById("edit_product_id").value = id;
                 document.getElementById("edit_product_name").value = response['product_name'];
                 document.getElementById("edit_product_desc").value = response['product_desc'];
                 document.getElementById("edit_product_size").value = response['product_size'];
                 document.getElementById("edit_product_colors").value = response['product_colors'];
                 document.getElementById("edit_product_cost").value = response['product_cost'];
                 document.getElementById("edit_product_usd01").value = response['product_usd01'];
                 document.getElementById("edit_product_usd05").value = response['product_usd05'];
                 document.getElementById("edit_product_usd08").value = response['product_usd08'];
                 document.getElementById("edit_product_wholesale").value = response['product_wholesale'];
                 document.getElementById("edit_product_wholesale30").value = response['product_wholesale30'];
                 document.getElementById("edit_product_wholesale35").value = response['product_wholesale35']; 
                  
              }
            }); 
        }

        function functionSaveEdit() { 

            var edit_product_detail_id = document.getElementById("edit_product_detail_id").value;
            var edit_product_name = document.getElementById("edit_product_name").value;
            var edit_product_desc = document.getElementById("edit_product_desc").value;
            var edit_product_size = document.getElementById("edit_product_size").value;
            var edit_product_colors = document.getElementById("edit_product_colors").value;
            var edit_product_cost = document.getElementById("edit_product_cost").value;
            var edit_product_usd01 = document.getElementById("edit_product_usd01").value;
            var edit_product_usd05 = document.getElementById("edit_product_usd05").value;
            var edit_product_usd08 = document.getElementById("edit_product_usd08").value;
            var edit_product_wholesale = document.getElementById("edit_product_wholesale").value;
            var edit_product_wholesale30 = document.getElementById("edit_product_wholesale30").value; 
            var edit_product_wholesale35 = document.getElementById("edit_product_wholesale35").value;
            
            $.ajax({
              url: '<?php echo base_url(); ?>products/updateProductDetailByID',
              type: 'POST',
              data: {
                  product_detail_id : edit_product_detail_id,
                  product_name : edit_product_name,
                  product_desc : edit_product_desc,
                  product_size : edit_product_size,
                  product_colors : edit_product_colors,
                  product_cost : edit_product_cost,
                  product_usd01 : edit_product_usd01,
                  product_usd05 : edit_product_usd05,
                  product_usd08 : edit_product_usd08,
                  product_wholesale : edit_product_wholesale,
                  product_wholesale30 : edit_product_wholesale30,
                  product_wholesale35 : edit_product_wholesale35},
              error: function() {
                  alert('Something is wrong');
              }, 
              success: function(response) { 
                location.reload(); 
                  
              }
            }); 
        }
  </script>

</body>
 

</html>
