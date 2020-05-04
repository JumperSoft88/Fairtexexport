<!DOCTYPE html>
<html>
<head>
	<title>Fairtex</title>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
 
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
       
  </nav>

  <!-- Masthead -->
  <!-- <header class="masthead bg-primary text-white text-center"> -->
  <header class=" text-white text-center">
  <br>
  </header>


<body>
 
<div class="container">
    <!-- <h2>Codeigniter 3 Datatables Ajax Example</h2> -->
    
    <?php if($customerType != 'new'){
    ?>
        <?php if(ISSET($_SESSION["customerName"])){
        ?>
        <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Customer name :</label>
                <div class="col-xs-4">
                <input type="text" class="form-control" style="color: blue;" id="customerName" name="customerName" value="<?php if(isset($_SESSION['customerName'])){ echo $_SESSION['customerName']; } ?>" placeholder="customer name" />
                </div>
                <div class="col-xs-4"></div>
            </div><br><br>
            <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Address :</label>
                <div class="col-xs-4">
                <textarea type="text" rows="4" cols="50" style="color: blue;" class="form-control" id="address" name="address" placeholder="address" ><?php if(isset($_SESSION['customerAddress'])){ echo $_SESSION['customerAddress']; } ?></textarea >
                </div>
                <div class="col-xs-4"></div>
            </div><br> <br> <br> <br> 
            <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Telephone :</label>
                <div class="col-xs-4">
                <input type="number" class="form-control" id="tel" style="color: blue;" name="tel" value="<?php if(isset($_SESSION['customerTel'])){ echo $_SESSION['customerTel']; } ?> "/>
                </div>
                <div class="col-xs-4"></div>
            </div><br> 
            <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Email :</label>
                <div class="col-xs-4">
                <input type="email" class="form-control" id="email" style="color: blue;" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?> " placeholder="email" />
                </div>
                <div class="col-xs-4"></div>
            </div> <br>  

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
                <label class="col-xs-4" style="text-align:right"> Customer name :</label>
                <div class="col-xs-4">
                <input type="text" class="form-control" id="customerName" name="customerName" value="<?php if(isset($_SESSION['customerName'])){ echo $_SESSION['customerName']; } ?>" placeholder="customer name" />
                </div>
                <div class="col-xs-4"></div>
            </div><br><br>
            <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Address :</label>
                <div class="col-xs-4">
                <textarea type="text" rows="4" cols="50" class="form-control" id="address" name="address" placeholder="address" > <?php if(isset($_SESSION['customerAddress'])){ echo $_SESSION['customerAddress']; } ?> </textarea >
                </div>
                <div class="col-xs-4"></div>
            </div><br> <br> <br> <br> 
            <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Telephone :</label>
                <div class="col-xs-4">
                <input type="number" class="form-control" id="tel" name="tel" value="<?php if(isset($_SESSION['newTel'])){ echo $_SESSION['newTel']; } ?> "/>
                </div>
                <div class="col-xs-4"></div>
            </div><br> 
            <div class="form-group">
                <label class="col-xs-4" style="text-align:right"> Email :</label>
                <div class="col-xs-4">
                <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION['newEmail'])){ echo $_SESSION['newEmail']; } ?> " placeholder="email" />
                </div>
                <div class="col-xs-4"></div>
            </div> <br>  

            <div style="text-align:right;" > <button class="btn btn-success"  type="submit">Check out.</button></a> </div>
        </form>


    <?php
    }
    ?>
        


    
    <?php if(isset($_SESSION['userType'])){
        if($_SESSION['userType'] == 'administrator'){?>
    
            <a  href = "#" class="btn btn-primary mr-1">New Product</a>&emsp;<a  href = "<?php echo base_url(); ?>login/member" class="btn btn-danger mr-1">New Invoice</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a id="check" href="<?php echo base_url(); ?>checkout" class="btn btn-success " style="width :120px;">Check out. <!-- <span id="count" name="count" class="badge"></span> --></a> 

            <?php }else{ if($customerType != 'new'){?>
                &emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a id="check" href="<?php echo base_url(); ?>checkout" class="btn btn-success " style="width :120px;">Check out. <!-- <span id="count" name="count" class="badge"></span> --></a> 
            <?php } }
        }?>

    <!--?php echo count($this->cart->contents()) ? -->
   
    <br><br> 
    <div class="container">
        
        <div class="row"> 
            <div class="col-2"> 
            </div>
            <div class="col-8"> 
          
            
            <table id="item-list" class="table table-bordered table-striped table-hover"> 
                <thead>
                    <tr> 
                        <th >Product</th>
                        <th style="text-align: center; width: 30%;">Product name</th>
                        <th style="text-align: center; width: 30%;">Description</th>
                        <th style="text-align: center; width: 10%;">Size</th>
                        <th style="text-align: center; width: 20%;">Color</th>
                        <th style="text-align: center; width: 10%;">Cost</th>
                        <th style="text-align: center; width: 10%;">Qty.</th> 
                        <th style="text-align: center; width: 20%;"></th> 
                    </tr>
                </thead>
                <tbody  style="text-align: center;">
                
                </tbody>
            </table> 
            </div>
            <div class="col-2"> 
            </div>

           
        </div>
    </div>

	
</div> 
</body>


<script type="text/javascript">  
    $(document).ready(function() { 
        $('#item-list').DataTable({
         /*    pageLength: 10,
            serverSide: true,
            processing: true, */
            "ajax": {
                url : "<?php echo base_url(); ?>/loaddatatable/get_items",
                type : 'GET' 
            }, 
        });
    });
</script>


<script> 

  function showTableData(tableId,id,name,size,typeCose,description){  
    alert(tableId);
    //alert(id);
     //Reference the Table.
     var grid = document.getElementById("item-list");
     var colorId = "color"+tableId;
     var qtyId = "qty"+tableId;
     
    // alert(document.getElementById(colorId).value);
    // alert(document.getElementById(qtyId).value)
 
      //Reference the CheckBoxes in Table.
      var checkBoxes = grid.getElementsByTagName("A");
      var inputNumber = grid.getElementsByTagName("INPUT"); 
      var selectColor = grid.getElementsByTagName("SELECT");
      
        var table = $('#item-list').DataTable(); 
        var data = table.rows().data();    

        var params = table.$('input,select').serializeArray();
  
       var color = document.getElementById(colorId).value;//document.getElementById("item-list").rows[tableId+1].cells.item(3).firstChild.value;
       var qty = document.getElementById(qtyId).value;//document.getElementById("item-list").rows[tableId+1].cells.item(5).firstChild.value;
   
        //var x = document.getElementById("color").selectedIndex; 
        /*  alert('color : '+ color);

        alert('id : '+ id);
        alert('name : '+ name);
        alert('typeCose : '+ typeCose);
        alert('size : '+ size);
        alert('qty : '+ qty);
        alert('color : '+ color);   */
        
        var name = name;
        var size = size;
       // var color = color;
        var cost = typeCose;
        var desc = description;
      //  var costSpit = cost.split("$");
      //  var qty = qtynumber; 
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

  $(".linkEdit").click(function(){
      alert('BBB');
        editBranch($(this).attr("data-code"));
  });
</script>



</html>