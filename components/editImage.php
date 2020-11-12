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
<img src="../public/images/<?php echo $image ?>">
<form action="../components/editpicexec.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="hidden" name="email" value="<?php echo $id=$_GET['email']; ?>">
	Select Image
	<br>
	<input type="file" name="image"><br>
	<input type="submit" value="Upload">
</form>