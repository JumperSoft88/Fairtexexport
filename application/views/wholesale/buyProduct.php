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
  <header class="text-center mt-5">
  <br><br><br><br><br>  
    
    
    <div class="container ">
        <?php if($customerType != 'new'){
        ?>
            <?php if(ISSET($_SESSION["customerName"])){
            ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Customer name :</label>
                        <div class="col-5">
                            <input type="text" class="form-control" style="color: blue;" id="customerName" name="customerName" value="<?php if(isset($_SESSION['customerName'])){ echo $_SESSION['customerName']; } ?>" placeholder="customer name" />
                        </div>
                        <div class="col-2"></div>
                    </div>
                    
                </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Address :</label>
                        <div class="col-5">
                            <textarea type="text" rows="4" cols="50" style="color: blue;" class="form-control" id="address" name="address" placeholder="address" ><?php if(isset($_SESSION['customerAddress'])){ echo $_SESSION['customerAddress']; } ?></textarea >
                        </div>
                        <div class="col-2"></div> 
                    </div>
                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Telephone :</label>
                        <div class="col-5">
                        <input type="number" class="form-control" id="tel" style="color: blue;" name="tel" value="<?php if(isset($_SESSION['customerTel'])){ echo $_SESSION['customerTel']; } ?> "/>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Email :</label>
                        <div class="col-5">
                        <input type="email" class="form-control" id="email" style="color: blue;" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?> " placeholder="email" />
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div> 

                <!-- <h2 class="page-section-heading text-center text-secondary mb-0">Customer name : <label style="color: blue;"><!?php echo $_SESSION["customerName"] ?></label></h2>  
                <h2 class="page-section-heading text-center text-secondary mb-0">Tel : <label style="color: blue;"><!?php echo $_SESSION["customerTel"] ?></label></h2>  
                <h2 class="page-section-heading text-center text-secondary mb-0">Email : <label style="color: blue;"><!?php echo $_SESSION["email"] ?></label></h2>   -->
            <?php
            } ?>

            <?php if(ISSET($_SESSION["costType"])){
            ?>
            <!--  <input type="text" class="form-control" id="costType" name="costType" value="<!?php echo $_SESSION["costType"]?>"> -->
            <!--   <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Price : <label style="color: blue;"><!?php echo $_SESSION["costType"] ?></label> </h2>   -->
            <?php
            } ?> 

        <?php }else{
        ?> 
            <form action="<?php echo base_url(); ?>checkout" method="post">  
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Customer name :</label>
                        <div class="col-5">
                        <input type="text" class="form-control" id="customerName" name="customerName" value="<?php if(isset($_SESSION['customerName'])){ echo $_SESSION['customerName']; } ?>" placeholder="customer name" />
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Address :</label>
                        <div class="col-5">
                        <textarea type="text" rows="4" cols="50" class="form-control" id="address" name="address" placeholder="address" > <?php if(isset($_SESSION['customerAddress'])){ echo $_SESSION['customerAddress']; } ?> </textarea >
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Telephone :</label>
                        <div class="col-5">
                        <input type="number" class="form-control" id="tel" name="tel" value="<?php if(isset($_SESSION['newTel'])){ echo $_SESSION['newTel']; } ?> "/>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <label class="col-3" style="text-align:right"> Email :</label>
                        <div class="col-5">
                        <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION['newEmail'])){ echo $_SESSION['newEmail']; } ?> " placeholder="email" />
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div> 

                <!-- <div style="text-align:right;" > <button class="btn btn-success"  type="submit">Check out.</button></a> </div> -->
            </form>


        <?php
        }
        ?>  

        
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2"><a id="addBuy" onclick="funcBuy()" type="submit"  class="btn btn-primary " style="width :120px;">ADD.</a></div> 
            </div> 
    </div>
 
  </header>
  <br>
  <body> 
    <div class="container-fluid"> 
            <div class="row">  
                <div class="col-12">  
                    <table id="buy-item-list" class="table table-bordered table-striped table-hover buy-item-list"> 
                        <thead>
                            <tr> 
                                <!-- <th hidden >Product</th> -->
                                <th style="text-align: center; width: 20%;">Product name</th>
                                <th style="text-align: center; width: 30%;">Description</th>
                                <th style="text-align: center; width: 10%;">Size</th>
                                <th style="text-align: center; width: 15%;">Color</th>
                                <th style="text-align: center; width: 10%;">Cost</th>
                                <th style="text-align: center; width: 20%;">Qty.</th> 
                                <th style="text-align: center; width: 15%;">Total</th> 
                                <th style="text-align: center; width: 15%;"></th> 
                            </tr>
                        </thead>
                        <tbody  style="text-align: center;">
                            <?php $i = 1; ?> 
                            <?php foreach ($this->cart->contents() as $items): ?>
                        
                            <tr> 
                                <td><?php echo($items['name'])  ?></td>
                                <td><?php echo($items['options']['desc']) ?></td>
                                <td><?php echo($items['options']['size'])  ?></td>
                                <td><?php echo($items['options']['color'])  ?></td>
                                <td><?php echo($items['price'])  ?>$</td>
                                <td><?php echo($items['qty'])  ?></td>
                                <td><?php echo($items['price']*$items['qty'])  ?>$</td>
                                <td><a class="btn btn-danger" onclick="funcDel('<?php echo($items['rowid']) ?>')"><i class="fa fa-trash-o fa-lg"></i> </a></td>
                            </tr>
                            

                            <?php $i++; ?> 
                            <?php endforeach; ?>
 
                         
                        
                        </tbody>
                    </table> 
                </div>  
            </div>
        </div>
    
    <div class="container page-section portfolio"> 
        <!-- <div class="row"> -->  
        <div class="container ">
            
        </div>
    </div>
</body>

<div class="modal" id="mdBuyProduct" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Buy Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
            <div class="container-fluid"> 
                <div class="row">  
                    <div class="col-12">  
                        <table id="item-list" class="table table-bordered table-striped table-hover item-list"> 
                            <thead>
                                <tr> 
                                    <!-- <th hidden >Product</th> -->
                                    <th style="text-align: center; width: 20%;">Product name</th>
                                    <th style="text-align: center; width: 30%;">Description</th>
                                    <th style="text-align: center; width: 10%;">Size</th>
                                    <th style="text-align: center; width: 15%;">Color</th>
                                    <th style="text-align: center; width: 10%;">Cost</th>
                                    <th style="text-align: center; width: 20%;">Qty.</th> 
                                    <th style="text-align: center; width: 15%;"></th> 
                                </tr>
                            </thead>
                            <tbody  style="text-align: center;">
                            
                            </tbody>
                        </table> 
                    </div>  
                </div>
            </div> 
        </div> 
      </div>
    </div>
  </div>


 
  <!-- Modal -->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Yes</button>
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
  <section class="copyright py-4  text-center text-white">
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

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>

  <script> 
 
    $('#mdBuyProduct').on('hidden.bs.modal', function () {
        window.location.reload();
    })

    
    function funcBuy(){

        $('.item-list').DataTable({ 
            "ajax": {
                url : "<?php echo base_url(); ?>/loaddatatable/get_product_items",
                type : 'GET' 
            }, 
        });

        $("#mdBuyProduct").modal('show');
    }

    function funcDel(rowid) {
        $("#modalConfirmDelete").modal('show');
    }
 
 
  </script>
  <script> 

function showTableData(tableId,id,name,size,typeCose,description){  
 
   //Reference the Table.
   var grid = document.getElementById("item-list");
   var colorId = "color"+tableId;
   var qtyId = "qty"+tableId;
    
    //Reference the CheckBoxes in Table.
    var checkBoxes = grid.getElementsByTagName("A");
    var inputNumber = grid.getElementsByTagName("INPUT"); 
    var selectColor = grid.getElementsByTagName("SELECT");
    
      var table = $('#item-list').DataTable(); 
      var data = table.rows().data();    

      var params = table.$('input,select').serializeArray();

     var color = document.getElementById(colorId).value; 
     var qty = document.getElementById(qtyId).value; 
  
      var name = name;
      var size = size;
     // var color = color;
      var cost = typeCose;
      var desc = description; 
     $.ajax({
         url: '<?php echo base_url(); ?>loaddatatable/add',
         type: 'POST',
         data: {id : id,
                name : name, 
                size : size,
                color : color,
                cost : cost,
                qty : qty,
                desc : desc},
         error: function() {
            alert('Something is wrong');
         },
         success: function(data) {
     
              alert("Record added successfully");   
         }
      }); 
}
 
function addData(tableId,id,name,size,color,typeCose,description){  
 
    var qtyId = "qty"+tableId;
    var qty = document.getElementById(qtyId).value; 

   $.ajax({
       url: '<?php echo base_url(); ?>loaddatatable/add_product',
       type: 'POST',
       data: {id : id,
              name : name, 
              size : size,
              color : color,
              cost : typeCose,
              qty : qty,
              desc : description},
       error: function() {
          alert('Something is wrong');
       },
       success: function(data) {
   
            alert("Record added successfully");   
            
       }
    }); 
}

</script>
</body>
 

</html>
