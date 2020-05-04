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
                <a href="<?php echo base_url(); ?>draftInvoices" class="btn btn-primary" role="button" style="width : 150px">Drift invoice</a><br><br>
            </div>
            
            <div class="col-10">  
                <!-- Portfolio Section --> 
                <table class="table table-striped table-bordered custdatatable" style="width: 100%" id="custdatatable">
                  <thead>
                      <tr class="text-center">
                          <th>Customer name</th>
                          <th>Company name</th>  
                          <th>Price</th> 
                          <th></th>
                      </tr>
                  </thead>
                  <body> 
                      <?php foreach ($_SESSION['allCustomer'] as $item) { ?> 
 
                          <tr>
                              <td><?php echo $item->customer_name;?></td>
                              <td><?php echo $item->customer_company_name; ?></td>  
                              <td width="20%">
                              <select style="width: 150px;" class="form-control" title="Pick a number" name="cost<?php echo $item->customer_id;?>"  id="cost<?php echo $item->customer_id;?>"  style="width: 100px;">
                                  <?php 
                                      foreach($_SESSION['allTypeCost'] as $p){ 
                                        echo '<option value="'.$p->type_cost_topic.'">'.$p->type_cost_topic.'</option>';  
                                    }  
                                  ?>
                              </select>
                              </td> 
                              <td width="6%"> 
                                  <a type="button" class="btn btn-warning"  onclick="funcSellCustomer(<?php echo $item->customer_id;?>,'<?php echo $item->customer_company_name; ?>')" ><span class="fa fa-shopping-bag" aria-hidden="true"></a>  
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

  <div class="modal" id="sellModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form  action="<?php echo base_url(); ?>loaddatatable/sellCustomer" method="POST"> 
          <div class="modal-header">
            <h5 class="modal-title">Sell to customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"> 
            <h2 id="namecompany" class="text-center " style="color:blue;"></h2>

            <h4 id="costcompany" class="text-center mt-3" style="color:red;background-color: lightblue;"></h4>

            <input type="text" class="form-control" id="sellCustomerId" name="sellCustomerId" value="" hidden >
            <input type="text" class="form-control" id="sellCustomername" name="sellCustomername" value="" hidden>
            <input type="text" class="form-control" id="sellCustomerCost" name="sellCustomerCost" value="" hidden>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sell</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
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

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>

</body>

<script>
   $('.custdatatable').DataTable({});

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

  function funcSellCustomer(id,companyName) {
     //alert("id : "+id);
     var cost = "cost"+id; 
     var costType = document.getElementById(cost).value;
 
     //alert(costType);
     $("#sellModal").modal('show'); 

     document.getElementById("namecompany").innerHTML = companyName;
     document.getElementById("costcompany").innerHTML = costType;
     document.getElementById("sellCustomerId").value = id;
     document.getElementById("sellCustomername").value = companyName;
     document.getElementById("sellCustomerCost").value = costType;

  }

</script>

</html>
