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
    $result = mysqli_query($db, "SELECT * FROM services where service_Id='$id'");
        while($row = mysqli_fetch_array($result))
            {
                $service_tag=$row['service_tag'];
                $service_description=$row['service_description'];
                $service_rating=$row['service_rating'];
                $service_category_id=$row['service_category_id'];
                $address_id=$row['address_id'];
                
            }
       $result = mysqli_query($db, "SELECT * FROM address ");
        while($row = mysqli_fetch_array($result)){
           $address_id=$row['address_id']; 
        }
        $result = mysqli_query($db, "SELECT * FROM category" );
        while($row = mysqli_fetch_array($result)){
           $address_id=$row['service_category_id']; 
        }

?>

<form action="../functions/EditServicesFunc.php" method="post">

    <h4> Category Information</h4><hr>
    <input type="hidden" name="service_Id" value="<?php echo $id=$_GET['edit']; ?>">
       <a href="#"> <img src="../public/images/icon_edit.png" alt="image" class="photo" style="width: 50px; height: 50px;border-radius: 300px; margin-top: 3px;"></a><br><h style="font-size: 10px;color:#003366; font-family:  'calibri', Gadget, myriad;font-weight: small;"></a><br>
        Service Category:<br><input type="text" name="service_tag" value="<?php echo $service_tag ?>" class="ed"><br>
    Description:<br><input type="text" name="service_description" value="<?php echo $service_description ?>" class="ed"><br>
     Service-Rating:<br><input type="number" name="service_rating" value="<?php echo $service_rating ?>" class="ed"><br>
     Service-Category-ID:<br><input type="number" name="service_category_id" value="<?php echo $service_category_id ?>" class="ed"><br>
     Address-ID:<br><input type="number" name="address_id" value="<?php echo $address_id ?>" class="ed"><br>

   
    <input type="submit" value="Edit" id="button1">
    <div class="key" style="align-items: center; display: inline flex; background-color: ;">
    <?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM address"); ?>
<table style="margin-left: 70%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: #f5f5f5;">
    <tr>
      <th>Count</th>
      <th> Address ID </th>
      <th>Address</th>
     
      
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['address_id']; ?></td>
            <td><?php echo $row['adress']; ?></td>
           
              
           <?php }?>
    <?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM category"); ?>
<table style="margin-left: 70%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: #f5f5f5; position: right; margin-top: 2%;">
    <tr>
      <th>Count</th>

      <th>Category</th>
      
          <th> Service-Category_ID </th>
         
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['service_category']; ?></td>
            
             
               <td><?php echo $row['service_category_id']; ?></td>
              
             </tr>
           <?php }?>
       </div>
   
</form>
</body>
</html>

