<!DOCTYPE html>
<html>
<head>
	<title>Fairtex</title>
</head>
<body>


<!-- <h1>Codeigniter 3 - Generate PDF from view using dompdf library with example</h1> --> 
<table style="border:0px;width:100%;">
	<tr>
		<th style="border:0px;width:30%;"><img src="http://localhost:8181/fairtexexportv2/assets/img/logo/Fairtex-shop-checkout.png"></th>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:40%;"> FAIRTEX EQUIPMENT CO.,LTD.
            99/5, MOO3, SOI BOONTHAMANUSORN
            THEPARAK RD.,BANGPLEEYAI, BANGPLEE,
            SAMUTPRAKARN 10540, THAILAND
            TEL (662)3855148,3855149   FAX(662)3855403
        
        </th>
	</tr> 
</table> 
<br>
<table style="border:0px;width:100%;">
	<tr>
		<th style="border:0px;width:30%;">CONSIGNEE:</th>
		<th style="border:0px;width:30%;">SHIP TO :</th>
		<th style="border:0px;width:40%;">INVOICE NO. :</th>
	</tr> 
    <tr>
		<th style="border:0px;width:30%;"><?php if($_SESSION['consigee'] != null){echo $_SESSION['consigee'];}  ?></th>
		<th style="border:0px;width:30%;"><?php if($_SESSION['shipTo'] != null){echo $_SESSION['shipTo']; }  ?></th>
		<th style="border:0px;width:40%;"><?php echo $_SESSION['invoiceNo'] ?></th>
	</tr> 
    <tr>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:40%;">DATE :</th>
	</tr> 
    <tr>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:40%;"><?php echo $_SESSION['dateInvoice'] ?></th>
	</tr> 
    <tr>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:30%;">FREIGHT CHARGE : FREIGHT COLLECT </th>
		<th style="border:0px;width:40%;">BY :</th>
	</tr> 
    <tr>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:40%;"><?php if($_SESSION['by'] != null){echo $_SESSION['by']; }else{ echo '';}   ?></th>
	</tr> 

    <tr>
		<th style="border:0px;width:30%;">TERM OF SALE : FOB (BANGKOK)</th>
		<th style="border:0px;width:30%;">TO :</th>
		<th style="border:0px;width:40%;">FROM :</th>
	</tr> 
    <tr>
		<th style="border:0px;width:30%;"></th>
		<th style="border:0px;width:30%;"><?php if($_SESSION['from'] != null){echo $_SESSION['from']; }else{ echo '';}   ?></th>
		<th style="border:0px;width:40%;"><?php if($_SESSION['to'] != null){echo $_SESSION['to']; }else{ echo '';}   ?></th>
	</tr> 
</table>
 

<br>
<table style="border:1px;width:100%;">
    <thead>
        <tr>
        <th scope="col" style="text-align: center;border:1px;" width="10%">No.</th>
        <th scope="col" style="text-align: center;" width="20%">Description</th>
        <th scope="col" style="text-align: center;" width="10%">Size</th>
        <th scope="col" style="text-align: center;" width="10%">Color</th> 
        <th scope="col" style="text-align: center;" width="10%">Qty.</th> 
        <th scope="col" style="text-align: center;" width="15%">UNIT PRICE</th>
        <th scope="col" style="text-align: center;" width="20%">AMOUNT (USD)</th>
        <th scope="col" style="text-align: center;" width="5%"></th>
        </tr>
    </thead>
    <tbody>
        <?php $index = 1;
        foreach ($this->cart->contents() as $items){
        ?> 
        <tr>
        <td style="text-align: center;"><?= $index++ ?></td>
        <td style="text-align: center;"><?= $items['name'] ?></td>
        <td style="text-align: center;"><?= $items['options']['size'] ?></td>
        <td style="text-align: center;"><?= $items['options']['color'] ?></td>
        <td style="text-align: center;"><?= $items['qty'] ?></td>
        <td style="text-align: center;"><?= $items['price'].'$' ?></td>
        <td style="text-align: center;"><?= $items['subtotal'].'$' ?></td>
        </tr>

        <?php
        } 
        ?>
    </tbody>
</table>

<br><br><table style="border:0px;width:100%;">
	<tr>
		<th style="border:0px;width:70%;"></th>
		<th style="border:0px;width:20%;">Sub Total</th>
		<th style="border:0px;width:10%;text-align: right;"> <?=  number_format($this->cart->total()).'$' ?></th>
	</tr> 
    <tr>
		<th style="border:0px;width:70%;"></th>
		<th style="border:0px;width:20%;">Discount</th>
		<th style="border:0px;width:10%;text-align: right;"><?php if($_SESSION['discount'] != null){echo $_SESSION['discount'];}else{ echo 0;}  ?></th>
	</tr> 
    <tr>
		<th style="border:0px;width:70%;"></th>
		<th style="border:0px;width:20%;">shipping cost</th>
		<th style="border:0px;width:10%;text-align: right;"><?php if($_SESSION['shipping'] != null){echo $_SESSION['shipping']; }else{ echo 0;}  ?></th>
	</tr> 
    <tr>
		<th style="border:0px;width:70%;"></th>
		<th style="border:0px;width:20%;">Total</th>
		<th style="border:0px;width:10%;text-align: right;"><?=  number_format($this->cart->total()).'$' ?></th>
	</tr> 
</table>

</body>
</html>