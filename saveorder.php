<?php
	include('conn.php');
	require('coinfo.php');
//orderitems
	if(isset($_POST['productid'])){
 
	foreach($_POST['productid'] as $product):
	$proinfo=explode("||",$product);
	$productid=$proinfo[0];
	$iterate=$proinfo[1];
	$sql3="select Goods.idGoodsID, Goods.dcPrice,Products.id from Goods INNER JOIN Products ON Goods.idGoodsID=Products.id where Products.id='$productid'";
	$result=mysqli_query($conn,$sql3);
	$row=mysqli_fetch_assoc($result);

	if (isset($_POST['quantity_'.$iterate])){
		$qty=($_POST['quantity_'.$iterate]);
		$subt=$row['dcPrice']*($_POST['quantity_'.$iterate]);
		$total+=$subt;

		$sql2="select * from Products where id='$productid'";
		if($result=mysqli_query($conn,$sql2))
		{
			while ($row = mysqli_fetch_assoc($result)) {
		    		$pid = $row["id"];
			}
			echo "Queried Product Records successfully.";
		}
		else
		{
			echo "Error: " . $sql2 . "<br>" . $conn->error;
		}
		
		$sql2="select * from Goods where idGoodsID='$productid'";
		if($result=mysqli_query($conn,$sql2))
		{
			while ($row = mysqli_fetch_assoc($result)) {
		    		$gid = $row["idGoodsID"];
			}
			echo "Queried Product Records successfully.";
		}
		else
		{
			echo "Error: " . $sql2 . "<br>" . $conn->error;
		}

		
		$sql4="insert into OrderItems values (default, '$gid','$oid', '$qty')";
		if($result=mysqli_query($conn,$sql4))
		{
			echo "New OrderItems Record created successfully.";
		}
		else
		{
			echo "Error: " . $sql4 . "<br>" . $conn->error;
		}
	}

	
		endforeach;
//inserting orderitems
	
 	/*
		$tax=0.12;
		$stotal=$total*$tax;
		$sql6="insert into Sales values ('$oid', '$cid',  '".$_POST['quantity_'.$iterate]."')";
		$conn->query($sql6);
	*/
		
	
	header('location:referenceno.php?oid='.$oid.'&total='.$total.'&fname='.$fname.'&lname='.$lname.'&cntct='.$cntct.'&rid='.$rid.'&odesc='.$odesc.'&requestimage='.$uploadPath.'&ddate='.$ddate);
			
	}

	else if(!isset($_POST['id']) && $otype=="Special") {
	header('location:referenceno.php?oid='.$oid.'&total='.$total.'&fname='.$fname.'&lname='.$lname.'&cntct='.$cntct.'&rid='.$rid.'&odesc='.$odesc.'&requestimage='.$uploadPath.'&ddate='.$ddate);
	}
	
	
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='orderdetails.php';
		</script>
		<?php
	}
	

	
?>
