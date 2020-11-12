<?php
	include('../databaseService/connect.php');
	$id=$_GET['service_Id'];
	$result = mysqli_query($db, "SELECT * FROM services where service_Id='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$image=$row['image'];
			}
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/adminn.css">
<img src="../public/images/<?php echo $image ?>">
<form action="../components/editprofileExec.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="hidden" name="service_Id" value="<?php echo $id=$_GET['service_Id']; ?>">
	Select Image
	<br>
	<input type="file" name="image"><br>
	<input type="submit" value="Upload">
</form>