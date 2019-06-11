	<?php
	$fname=$_POST['FirstName'];
	$lname=$_POST['LastName'];
	$addrs=$_POST['Address'];
	$cntct=$_POST['ContactNo'];
	$ctype=$_POST['CustomerType'];		
	$sql="insert into Customer values (default,'$fname','$lname','$addrs','$ctype','$cntct')";
	if($conn->query($sql) === TRUE)
	{
	echo "New Customer Record created successfully.";
	}
	else
	{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$cid=$conn->insert_id;
	$total=0;

	$ostatus='Pending';
	$ddate=$_POST['Date'];
	if (isset($_POST['OrderType']) && $_POST['OrderType'] == "Special")
	{
		echo "Order type is special.";
		$otype="Special";
	}
	else
	{
		echo "Order type is regular.";
		$otype="Regular";
	}
	$odesc=$_POST['OrderDesc'];
	$uploadPath='requestimages/noimage.png';
	if ($otype=="Special"){
	
	    $uploadDirectory = "requestimages/";

	    $errors = []; // Store all foreseen and unforseen errors here

	    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

	    $fileName = $_FILES['image']['name'];
	    $fileSize = $_FILES['image']['size'];
	    $fileTmpName  = $_FILES['image']['tmp_name'];
	    $fileType = $_FILES['image']['type'];
	    $explode = explode('.', $fileName);
	    $fileExtension = strtolower(end($explode));
	    $uploadPath = $uploadDirectory . basename($fileName); 

	    if (isset($_POST['submit'])) {

		if (! in_array($fileExtension,$fileExtensions)) {
		    $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
		}

		if ($fileSize > 2000000) {
		    $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
		}

		if (empty($errors)) {
		    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

		    if ($didUpload) {
		        echo "The file " . basename($fileName) . " has been uploaded";
		    } else {
		        echo "An error occurred somewhere. Try again or contact the admin";
		    }
		} else {
		    foreach ($errors as $error) {
		        echo $error . "These are the errors" . "\n";
		    }
		}
	    }
	}

/*
	$target_dir = "requestimages/";
	$target_file = $target_dir . basename($_FILES["RequestImage"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));		
	// Check if image file is a actual image or fake image
	if(isset($_FILES["image"])){
	      $errors= array();
	      $file_name = basename($_FILES['image']['name']);
	      $file_size =$_FILES['image']['size'];
	      $file_tmp =$_FILES['image']['tmp_name'];
	      $file_type=$_FILES['image']['type'];
	      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	      
	      $expensions= array("jpeg","jpg","png");
	      
	      if(in_array($file_ext,$expensions)=== false){
		 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	      }
	      
	      if($file_size > 209715){
		 $errors[]='File size must be excately 2 MB';
	      }
	      
	      if(empty($errors)==true){
		 move_uploaded_file($file_tmp,"requestimages/".$file_name);
		 echo "Success";
	      }else{
		 print_r($errors);
	      }
	   } */


	/*
	//Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["RequestImage"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["RequestImage"]["name"]). " has been uploaded.";
	    } else {
		echo "Sorry, there was an error uploading your file.";
	    }
	}
	*/

	
	//no uploaded file on special order
	/*else
	{
	?>
	<script>
		window.alert('Mag-upload po ng imahe ng special order ninyo.');
		window.location.href='orderdetails.php';
	</script>
	<?php
	}
	*/
	
	else
	{
	$target_file = "";
	}

	function gen_uid($l=6){
	    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $l);
	}
	
	$rid = strtoupper(gen_uid());

	$sql5="insert into Orders values (default,'$cid','$ostatus', '$ddate', now(), '$otype', '$odesc', '$uploadPath', '$rid')";
	if($conn->query($sql5) == TRUE)
	{
	$oid=$conn->insert_id;
	echo "New Order Record created successfully.";
	}
	else
	{
	echo "Error: " . $sql5 . "<br>" . $conn->error;
	}
?>
		
