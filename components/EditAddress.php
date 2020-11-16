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
  
    $id=$_GET['address_id'];
    $update=true;
    $result = mysqli_query($db, "SELECT * FROM address where address_id='$id'");
        while($row = mysqli_fetch_array($result))
            {
                $adress=$row['adress'];
                $Latitude=$row['Latitude'];
                $Longitude=$row['Longitude'];
                
            }
       
?>

<form action="../functions/EditAddressFunc.php" method="post">

    <h4> Physical Address Information</h4><hr>
    <input type="hidden" name="address_id" value="<?php echo $id=$_GET['address_id']; ?>">
       <a href="#"> <img src="../public/images/address_icon.png" alt="image" class="photo" style="width: 50px; height: 50px;border-radius: 300px; margin-top: 3px;"></a><br><h style="font-size: 10px;color:#003366; font-family:  'calibri', Gadget, myriad;font-weight: small;"></a><br>
        Physical Address:<br><input type="text" name="adress" value="<?php echo $adress?>" class="ed"><br>
    Longitude:<br><input type="number" name="Longitude" value="<?php echo $Longitude ?>" class="ed"><br>
     Latitude:<br><input type="number" name="Latitude" value="<?php echo $Latitude ?>" class="ed"><br>
   
    <input type="submit" value="Edit" id="button1">
   
</form>
</body>
</html>

