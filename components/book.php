<?php
session_start();
// connect to database
  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  //initilalize variables
  $adress="";
    $name="";
      $type="";
  $Longitude="";
  $Latitude="";
  $address_id=0;
  
  $update= false;
  if(isset($_POST['save'])){
    $adress=$_POST['adress'];
    $Longitude=$_POST['Longitude'];
    $Latitude=$_POST['Latitude'];
      $name=$_POST['name'];
        $type=$_POST['type'];
    

    mysqli_query($db,"INSERT INTO address(adress, Longitude,Latitude,name,type) VALUES ('$adress','$Longitude','$Latitude' ,'$name','$type')");
    $_session['message']="Address Book Updated successfully.";
    //header('location:home.php');
  }
  $id=$_GET['service_Id'];
  $service_Id=$id;
  $result = mysqli_query($db, "SELECT * FROM services where service_Id='$id' and available_space>0");
    while($row = mysqli_fetch_array($result))
      {
        $image=$row['image'];

           $service_Id= $row['service_Id'];
           $service_tag= $row['service_tag']; 
           $service_description=$row['service_description']; 
            $available_space= $row['available_space']; 
              $service_rating=$row['service_rating']; 
              $price=$row['price']; 
               
           $address_id= $row['address_id']; 
      }
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/adminn.css">
<!--img src="../public/images/<?php echo $image ?>" style="height: 100%; width: 75%; margin-left: %;margin-top: 5%;">-->
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href=".../css/mountainn.css">
   <link rel="stylesheet" href="../css/styles1.css">
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title></title>
</head>

 <?php $id=$_GET['service_Id'];?>
<body style="background-color: white; background-image: url('../public/images/<?php echo $image ?>');">
<div class ="details"style="margin-left: 15%; margin-top: 5%; width: 75%; height: 60%; border-top: 2px solid green; background: inherit; border-radius: 5px; color:orange ;padding-left: 10px; font-family: verdana; font-size: 15px; position: center;text-align: center; ox-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;">
  <H6 style="font-weight:bold; color:black;text-decoration-color: black;font-size: ; ">NAME</H6 >:<?php echo $service_tag ?>
<H6 style="font-weight:bold; color:black;text-decoration-color: black;font-size: ; ">DESCRIPTION</H6 >:<?php echo $service_description ?>
<H6 style="font-weight:bold; color:black;text-decoration-color: black;font-size: ; ">RATING</H6 >:(<?php echo $service_rating ?>/10)
  <H6 style="font-weight:bold; color:black;text-decoration-color: black;font-size: ; ">Price</H6 >:Ksh<?php echo $price ?>/=
<H6 style="font-weight:bold; color:black;text-decoration-color: black;font-size: ; ">RATING</H6 >:(<?php echo $service_rating ?>/10)
  <H6 style="font-weight:bold; color:black;text-decoration-color: black;font-size: ; ">ADDRESS</H6 >:<?php echo $address_id ?><br>
 <a href='bookexecute.php?service_Id=<?php echo $service_Id ?>' class="btn btn-success" style="height: 50px; width: 100px; border-radius: 100px; margin-left: 2%;" >  BOOK</a>
</div>
 
<h2 style="color: orange; font-family: sans-serif; font-weight: bold; width: 75%;margin-left: 15%;margin-top: 5%; font"> What are you waiting for. Book today and enjoy your lifetime tour together with us</h2>
</body>
</html>
<?php
include 'footer.php';
?>