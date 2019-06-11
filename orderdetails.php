<!DOCTYPE php>
<script src="assets/jquery.min.js"></script>
<html>
<title>Bread Man</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="assets/w3.css"> 
<head>
<script>
function showreg() {
    var y = document.getElementById("SpecialOrder");
    if (y.style.display === "none") {
	y.style.display = "block";
	
    } else {
	y.style.display = "none";
    }
}
</script>  
</head>
<style>
body {font-family: "Open Sans", sans-serif;background-color:#faf8f6}
h1,h2,h3,h4,h5,h6 {
    font-family: "Dosis";}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}
body, html {height: 100%}
.bgimg {
    background-image: url(assets/farmbg1.jpg);
	background-color: background-color('white');
    min-height: 100%;
    background-position: center;
    background-size: cover;}
.w3-theme-l5 {color:#000 !important; background-color:#faf8f6 !important}
.w3-theme-l4 {color:#000 !important; background-color:#efe8e1 !important}
.w3-theme-l3 {color:#000 !important; background-color:#dfd2c3 !important}
.w3-theme-l2 {color:#000 !important; background-color:#cfbba5 !important}
.w3-theme-l1 {color:#000 !important; background-color:#c0a487 !important}
.w3-theme-d1 {color:#fff !important; background-color:#a58057 !important}
.w3-theme-d2 {color:#fff !important; background-color:#93714d !important}
.w3-theme-d3 {color:#fff !important; background-color:#816344 !important}
.w3-theme-d4 {color:#fff !important; background-color:#6e553a !important}
.w3-theme-d5 {color:#fff !important; background-color:#5c4730 !important}

.w3-theme-light {color:#000 !important; background-color:#faf8f6 !important}
.w3-theme-dark {color:#fff !important; background-color:#5c4730 !important}
.w3-theme-action {color:#fff !important; background-color:#5c4730 !important}

.w3-theme {color:#fff !important; background-color:#b18f6a !important}
.w3-text-theme {color:#b18f6a !important}
.w3-border-theme {border-color:#b18f6a !important}

.w3-hover-theme:hover {color:#fff !important; background-color:#b18f6a !important}
.w3-hover-text-theme {color:#b18f6a !important}
.w3-hover-border-theme:hover {border-color:#b18f6a !important}
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:6px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:6px solid #000;
}
</style>
</style>
<?php include ('header.php');?>
<body>
<?php include ('navbar.php');?>
<!--<div class="w3-top">
 <!-- <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.php" class="w3-bar-item w3-button">The Breadman</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <!--<div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
	
    </div>
  </div>
</div>-->
<!--
<div class="w3-container w3-theme-light w3-display-container">
    <div class="w3-bar w3-white w3-padding w3-card" style="width:100%;">
    <a href="index.html" class="w3-bar-item w3-button"><h1>The Breadman</h1></a>
    <a href="#order" class="w3-bar-item w3-button w3-right"><h1>Order</h1></a>
    <a href="index.html" class="w3-bar-item w3-button w3-right"><h1>Home</h1></a>
    </div> 
    </div>
-->
   <!-- <div class="w3-container" id="order">
      <h1>Bread</h1>   
      <h5>Loaf Bread <b> 20 Php</b></h5>
      <h5>Spanish Bread 5 Pcs.<b> 10 Php</b></h5>
      <h5>Danish Bread 5 Pcs.<b> 10 Php</b></h5>
    </div>
    <div class="w3-container w3-theme-light">
      <h1>Pastry</h1>
    </div>
    <div class="w3-container">
      <h5>Cream Puffs 10 Pcs.<b> 30 Php</b></h5>
      <h5>Solenoid <b> 20 Php</b></h5>
      <h5>Chocolate Cake <b> 50 Php</b></h5>
      <h5>Cheese Bread<b> 20 Php</b></h5>
    </div> -->
     <div class="container">
	<form id="orderForm" enctype="multipart/form-data" action="saveorder.php" method="post">
	<h1 class="w3-padding-16 w3-theme-light">Ikaw ba ay magtitinda?</h1>
	<label>
	<p>Kostumer</p>
        <input id="CustomerType" type="radio" name="CustomerType" value="Regular" checked="checked" style="visibility:hidden; position:absolute;">
        <img src="assets/man.jpg" height="100" width="100">
        </label>
	<label>
	<p>Magtitingi</p>
        <input id="CustomerType2" type="radio" name="CustomerType" value="Reseller" style="visibility:hidden; position:absolute;">
        <img src="assets/shop.jpg" height="100" width="100">
        </label>	
        <!--<input id='CustomerType' type="radio" class="w3-radio" name="CustomerType" value="Regular" checked="checked"> Regular<br>-->
      	<!--<input id='CustomerType2' type="radio" class="w3-radio" name="CustomerType" value="Retail"> Retail<br>-->
      <h2 class="w3-theme-light w3-padding-16 ">Ilahad po ang detalye ninyo.</h2>
	
	<p><input id='FirstName' class="w3-input w3-padding-16" type="text" placeholder="First Name" required name="FirstName" maxlength="32"></p>
        <p><input id='LastName'  class="w3-input w3-padding-16" type="text" placeholder="Last Name" required name="LastName" maxlength="32"></p>
	<p><input id='Address' class="w3-input w3-padding-16" type="text" placeholder="Address" required name="Address" maxlength="64"></p>
	<p><input id='ContactNo' class="w3-input w3-padding-16" type="tel" placeholder="Contact Number" required name="ContactNo" maxlength="16"></p>
	<label><h2>Kailan po ipapadala?</h2></label>
	<p><input class="w3-input w3-padding-16" type="date" id="Date" name="Date" required min="2018-4-10" /></p>
        <!--<input id="OrderType2" class="w3-radio" type="radio" name="OrderType" value="Special" onclick="showspcl();">Special<br>-->
	<div id="RegularOrder">
<div class="container w3-theme-light">
	<h1 class="page-header text-center">ORDER</h1>
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>ID</th>
				<th>Produkto</th>
				<th>Presyo</th>
				<th>Imahe</th>
				<th>Ilan</th>
			</thead>
			<tbody>
				<?php 
			/*		$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
			*/
					$sql="select * from Products order by id asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['id']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['vName']; ?></td>
							<td><?php echo $row['vDescription']; ?></td>
							<td class="text-right">&#8369; <?php echo number_format($row['dcPrice'], 2); ?></td>
							<td><?php
echo '<img src="goodsimage/'.$row['vProductImage'].'" alt="Product Image" height="75" width="75">'."&nbsp;&nbsp;";
?></td>
							<td><input type="text" class="form-control" value="1" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-3">
				<!--<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
-->
			</div>
			<div class="col-md-2" style="margin-left:-20px;">
				<!--<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
-->
			</div>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
	</div>
	<h2 class="w3-padding-16 w3-theme-light">May ispesyal ba kayo na idadagdag sa order?</h2>
	<input id="OrderType" class="w3-radio w3-padding-16" type="checkbox" name="OrderType" value="Special" onclick="showreg();"><h2 class="w3-padding-16" style="display:inline" autocomplete="off"> Meron</h2><br><br>
	<div id="SpecialOrder" style="display:none">	
	<label><h4>Magpadala po ng larawan ng ispesyal ninyong order.</h4></label>
	<input id='RequestImage' class="w3-input w3-padding-16 w3-theme-light" type="file" accept="image/*" name="image" value="200">
	<p><input id='OrderDesc' class="w3-input w3-padding-16" type="text" placeholder="Order Description" name="OrderDesc" maxlength="64"></p>
	</div>  
	<p><button id="submit" class="w3-button" type="submit" name="submit"><h1>Submit</h1></button></p>    
      </form>
    </div>
</body>
</html>

<script>
function todayDate() {
    var today = new Date(); // get the current date
    var dd = today.getDate(); //get the day from today.
    var mm = today.getMonth()+1; //get the month from today +1 because january is 0!
    var yyyy = today.getFullYear(); //get the year from today

    //if day is below 10, add a zero before (ex: 9 -> 09)
    if(dd<10) {
        dd='0'+dd
    }

    //like the day, do the same to month (3->03)
    if(mm<10) {
        mm='0'+mm
    }

    //finally join yyyy mm and dd with a "-" between then
    return yyyy+'-'+mm+'-'+dd;
}
$(document).ready(function(){
    $('#Date').attr('min', todayDate());
});
</script>
