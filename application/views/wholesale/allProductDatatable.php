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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
 -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        
      </div>
      <div class="modal-body">
        XXXX
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="add" name="add" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <!-- <h2>Codeigniter 3 Datatables Ajax Example</h2> -->  
    
    <a id="check" href="<?php echo base_url(); ?>products/insertProduct/add" class="btn btn-success " style="width :120px;">Back</a>&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a  href = "<?php echo base_url(); ?>products/insertProduct/add" class="btn btn-primary mr-1">New Product <!-- <span id="count" name="count" class="badge"></span> --></a> 
 
    <br><br>  
        <table id="item-list" class="table table-bordered table-striped table-hover"> 
            <thead>
                <tr> 
                    <!--  <th >Product</th> -->
                    <th style="text-align: center; width: 20%;">Product name</th> 
                    <th style="text-align: center; width: 10%;">Size</th>
                    <th style="text-align: center; width: 20%;">Color</th>
                    <th style="text-align: center; width: 10%;">Cost</th>
                    <th style="text-align: center; width: 15%;">USD-01</th> 
                    <th style="text-align: center; width: 15%;">USD-05</th> 
                    <th style="text-align: center; width: 15%;">USD-08</th> 
                    <th style="text-align: center; width: 10%;">Wholesale</th> 
                    <th style="text-align: center; width: 10%;">Wholesale30</th> 
                    <th style="text-align: center; width: 10%;">Wholesale35</th>  
                    <th style="text-align: center; width: 10%;"></th> 
                </tr>
            </thead>
            <tbody  style="text-align: center;">
            
            </tbody>
        </table>   
</body>

<script type="text/javascript">
 
    /* $(function () {
        var prefname; // fname textbox
        var prelname; //lname textbox

        alert('AAA');
        $('table tbody tr td').on('click', function () {
            event.preventDefault(); 
            prefname = $(this).closest('tr').find(":text:eq(0)");
            prelname = $(this).closest('tr').find(":text:eq(1)");
            $("#txtfname").val($(prefname).val());
            $("#txtlname").val($(prelname).val());
            $("#exampleModal").modal("show");
        });
        //save change button click evnet
        $("#add").click(function () { 
            alert('XXX'); 
            $(prefname).val($("#txtfname").val());
            $(prelname).val($("#txtlname").val());
            $("#exampleModal").modal("hide");
        })
    }); */


    $(function () {

        $('.editItem').click(function(){
            $("#editItem").click(function () { 
            var userid = $(this).data('id');
                alert(userid);
            
            });
        });
    });

    function editItem(){
        var userid = $(this).data('id');
        alert(userid);

        $("#exampleModal").modal("show");
            
    }
    
</script>
<script type="text/javascript">  
    $(document).ready(function() { 
        $('#item-list').DataTable({ 
            "ajax": {
                url : "<?php echo base_url(); ?>/loaddatatable/get_all_items",
                type : 'GET' 
            }, 
        });
    });
</script>


<script> 

  function showTableData(tableId,id,name,size,typeCose){  
   // alert(tableId);
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
                  qty : qty},
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