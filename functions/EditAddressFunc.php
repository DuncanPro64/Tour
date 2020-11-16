 
<?php
include ('../databaseService/connect.php');

       
	$address_id = $_POST['address_id'];
  $adress=$_POST['adress'];
	$Latitude=$_POST['Latitude'];
	$Longitude=$_POST['Longitude'];

 
        $error = 0;
        $erradress = "";
        $errLatitude ="";
        $errLongitude= "";
    
         $Err="";
        //if(empty($firstname) or (empty($lastname)) or (empty($PhoneNumber)) or (empty($password))){
         // $Err= " Failed Update. Please Go back and correct as indicated below ";
          //$error = 1;
        //}
        if(empty($adress)){  
          $erradress = "*Unfilled Address.";
          $error = 1;
        }
         if(empty($Latitude)){  
          $errLatitude = "*Unfilled Latitude";
          $error = 1;
        }
        
        if(empty($Longitude)){
          $errLongitude = "*Unfilled Longitude";
          $error = 1;
        }

        
        
        if($error == 0){

	$user=mysqli_query( $db,"UPDATE address SET adress='$adress', Longitude='$Longitude', Latitude='$Latitude' WHERE address_id='$address_id'");

   if ($user){
    header("Location:../components/Address.php");
   }
   else{
   	echo"failed to execute";
   }
 }

?>
<head>
     <link rel="stylesheet" href="./css/mountains.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Update Product</title>
    <style>
      .error{
        color: #ff726f;
        margin-left: 40%;
        padding: none;
        border-bottom: none;
        border-top: none;
        border-left: 1px solid red;
        border-right: 1px solid red;
        font-size: 10px;
        text-align: center;


      }
      .success{
        color: #90ee90;
      }
      .Error{
        color: #ff726f;
        background: white;
        border-radius: ;
        width: 30%;
       padding: 5px;
       align-items: center;
        border-bottom: none;
        border-top: none;
        border-left: 1px solid red;
        border-right: 1px solid red;
      
      }
      
    </style>
  </head>

<?php
        if(isset($Err)){
          echo "<div class='Error'> <a href='../admin/home.php'><img src='../public/images/back.png' alt='image' class='photo' style='width: 15px; height: 15px;border-radius: 300px; margin-top: 3%; '></a><br><h style='font-size: 10px;color:red; '><br>
          <img src='../public/images/icon_error1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;margin-left:2%;'><br>
         $Err
          
          Failed Update.Please Go back and correct:
          </div>";

         
        
        }


      ?>
<?php
 if(isset($erradress)){
          echo "<div class='error'>$erradress</div>";
        }
        ?>
        <?php
     if(isset($errLatitude)){
          echo "<div class='error'>$errLatitude</div>";
        }
        ?>
        <?php
        if(isset($errLongitude)){
          echo "<div class='error'>$errLongitude</div>";
        }
        ?>
       
    
    