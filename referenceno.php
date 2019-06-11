<?php include('header.php'); ?>
<?php include('conn.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<button class="btn btn-success text-right" onclick="window.print()"><span class="glyphicon"></span> Print Ticket </button>
	<h1 class="page-header text-center">ORDER DETAILS</h1>
	<h3 class="text-center">Tatawagin ka ng Breadman staff para makipag-ayos ukol sa order ninyo.</h3>
	<h3 class="text-center">Pag may tanong po kayo, tawag lang po sa 09182892330.</h3>
	<h3 class="text-center">Salamat.</h3> 
	<?php
	$oid=$_GET['oid'];
	$total=$_GET['total'];
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$cntct=$_GET['cntct'];
	$rid=$_GET['rid'];
	$odesc=$_GET['odesc'];
	$ddate=$_GET['ddate'];
	$requestimage=$_GET['requestimage'];
	$sql="select OrderItems.idOrderID, OrderItems.iQuantity, Products.id, Products.vName, Products.dcPrice from OrderItems INNER JOIN Products on OrderItems.idGoodsID=Products.id where OrderItems.idOrderID=" . $oid . " order by idOrderItemsID asc";
	$query=$conn->query($sql);
	?>
	<div class="container center">
	<h3>Customer Name: <?php echo $fname. " " .$lname;?></h3>
	<h3>Contact Number: <?php echo $cntct;?></h3>	
	<h3>Reference Number: <?php echo $rid;?></h3>
	<h3>Date of Delivery: <?php echo $ddate;?></h3>
	</div>
	<table class="table table-striped table-bordered">
		<thead>
			<th><h3>Product</h3></th>
			<th><h3>Quantity</h3></th>
			<th><h3>Pricing (per Unit)</h3></th>
		</thead>
		<tbody>
			<?php 
				while($row = mysqli_fetch_assoc($query)){
					?>
					<tr>
						<td><h3><?php echo $row['vName']; ?></h3></td>
						<td><h3><?php echo $row['iQuantity']; ?></h3></td>
						<td class="text-right"><h3><?php echo number_format((float)$row['dcPrice'], 2, '.', '')." Php"; ?></h3></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
					<?php
				
				echo "<h3>Total Cost = " . number_format((float)$total, 2, '.', '') . " Php</h3>";
			if ($odesc!=""){
				echo "<h3>Notes: ". $odesc ."</h3>";
			}
			if ($requestimage!='requestimages/noimage.png'){
				echo "<h5>Reference image sent:</h5>";
				echo "<img src='" . $requestimage . "' alt='RequestImage' height='200' width='200'>";
			}
		/*			
		<!--<thead>
			<th>Name</th>
			<th>Items</th>
			<th>Customer Type</th>
			<th>Contact Number</th>
		</thead>
		<tbody>
					<tr>
						<td><?php echo $fname . " " . $lname; ?></td>
						<td><?php echo $addrs; ?></td>
						<td><?php echo $ctype; ?></td>
						<td><?php echo $cntct; ?></td>
					</tr>
		</tbody>
	</table>
	<?php
	echo "<h3 class=\"text-center\"> Special Order Request: " . $row2['vOrderDesc'] . "</h3>";
	echo "<img class=\"center\" src='$target_file'/> ";
*/	
?>
	

	
</div>
</body>
</html>
