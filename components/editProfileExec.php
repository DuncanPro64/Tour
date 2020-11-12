<?php
include('../databaseService/connect.php');
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../public/images/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$service_Id=$_POST['service_Id'];
			
			if(!$update=mysqli_query($db, "UPDATE services SET image = '$location' WHERE service_Id='$service_Id'")) {
			
				echo mysqli_error();
				
				
			}
			else{
			
			header("location: ../components/addServices.php");
			exit();
			}
			}
	}


?>