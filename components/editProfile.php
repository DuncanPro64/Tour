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
<img src="../public/images/<?php echo $image ?>" style="height: 50%; width: 50%; margin-left: 25%;margin-top: 5%;">
<form action="../components/editprofileExec.php" method="post" enctype="multipart/form-data" style="margin-left: 25%; color: green;background: orange; align-items: center;width: 50%;padding-left: 15%;font-size: 20px; font-family: verdana;">
	<br>
	<input type="hidden" name="service_Id" value="<?php echo $id=$_GET['service_Id']; ?>">
	Select Image
	<br>
	<input type="file" name="image"><br>
	<input type="submit" value="Upload" style="width:50%; height: 5%; background: none; border: 1px solid green; border-radius: 5px;">
</form>