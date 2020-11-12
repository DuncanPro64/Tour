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
  
    $id=$_GET['email'];
    $update=true;
    $result = mysqli_query($db, "SELECT * FROM users where email='$id'");
        while($row = mysqli_fetch_array($result))
            {
                $firstName=$row['firstName'];
                $lastname=$row['lastname'];
                $PhoneNumber=$row['PhoneNumber'];
                $address=$row['address'];
                 $userName=$row['userName'];
                 $user_type=$row['user_type'];
                 $password=$row['password'];
            }
       
?>
 <?php
     $address_query=mysqli_query ($db,"SELECT * FROM address");
    

?> 
<form action="../functions/EditUserFunc.php" method="post">

    <h4> User Information</h4><hr>
    <input type="hidden" name="email" value="<?php echo $id=$_GET['email']; ?>">
       <a href="#"> <img src="../public/images/IMG_20191010_185436.jpg" alt="image" class="photo" style="width: 100px; height: 100px;border-radius: 300px; margin-top: 3px;"></a><br><h style="font-size: 10px;color:#003366; font-family:  'calibri', Gadget, myriad;font-weight: small;"></a><br>
        First Name:<br><input type="text" name="firstName" value="<?php echo $firstName ?>" class="ed"><br>
    Last Name:<br><input type="text" name="lastname" value="<?php echo $lastname ?>" class="ed"><br>
     Phone:<br><input type="number" name="PhoneNumber" value="<?php echo $PhoneNumber ?>" class="ed"><br>
    Physical Address:<br><select name="address" class="form-control"required >
                     <?php while($row = mysqli_fetch_array($address_query))  {?>
                       <option><?php echo $row['adress'] ?></option>
                       <!--?php endforeach; ?>-->
                       <?php }?>
                       <option>Others</option>
                      
                      
                   </select class="ed"><br>
    Username:<br><input type="text" name="userName" value="<?php echo $userName ?>" class="ed"><br>
    Usertype:<br><select name="user_type" class="form-control"required >
                      
                       <option>@admin</option>
                       <option>user</option>
                      
                      
                   </select class="ed"><br>
    Password:<br><input type="password" name="password" value="<?php echo $password?>" class="ed"><br>
    <input type="submit" value="Edit" id="button1">
   
</form>
</body>
</html>

