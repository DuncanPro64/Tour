<?php
	include('../databaseService/connect.php');
	$id=$_GET['email'];
	$result = mysqli_query($db, "SELECT * FROM users where email='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$image=$row['image'];
			}
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/adminn.css">
<img src="../public/images/<?php echo $image ?>" style="width: 200px; height: 100px;margin-left: 45%;margin-top: 2%; ">
<form action="../components/editpicexec.php" method="post" enctype="multipart/form-data" style="margin-left: 45%; background-color: orange; width: 19.3%;">
	<br>
	<input type="hidden" name="email" value="<?php echo $id=$_GET['email']; ?>">
	Select Image
	<br>
	<input type="file" name="image"><br>
	<input type="submit" value="Upload" style="border: 1px solid green;width: 100%;color:green;height:5%; background:none;">
</form>