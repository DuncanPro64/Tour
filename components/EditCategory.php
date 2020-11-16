<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/User.css">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>View User</title>
</head>
<body>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
    include('../databaseService/connect.php');
    include_once("../classes/Constant.php");
  
    $id=$_GET['edit'];
    $update=true;
    $result = mysqli_query($db, "SELECT * FROM Category where service_category_id='$id'");
        while($row = mysqli_fetch_array($result))
            {
                $service_category=$row['service_category'];
                $Description=$row['Description'];
                $Title=$row['Title'];
                
            }
       
?>

<form action="../functions/EditCategoryFunc.php" method="post">

    <h4> Category Information</h4><hr>
    <input type="hidden" name="service_category_id" value="<?php echo $id=$_GET['edit']; ?>">
       <a href="#"> <img src="../public/images/icon_edit.png" alt="image" class="photo" style="width: 50px; height: 50px;border-radius: 300px; margin-top: 3px;"></a><br><h style="font-size: 10px;color:#003366; font-family:  'calibri', Gadget, myriad;font-weight: small;"></a><br>
        Service Category:<br><input type="text" name="service_category" value="<?php echo $service_category ?>" class="ed"><br>
    Description:<br><input type="text" name="Description" value="<?php echo $Description ?>" class="ed"><br>
     Title:<br><input type="text" name="Title" value="<?php echo $Title ?>" class="ed"><br>
   
    <input type="submit" value="Edit" id="button1">
   
</form>
</body>
</html>

