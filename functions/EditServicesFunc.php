 
<?php
include ('../databaseService/connect.php');

       
               
	$service_Id = $_POST['service_Id'];
    $service_tag = $_POST['service_tag'];
	$service_description=$_POST['service_description'];
	$service_rating=$_POST['service_rating'];
	$service_category_id=$_POST['service_category_id'];
  $address_id=$_POST['address_id'];
  
        $error = 0;
        $errservice_description = "";
        $errservice_rating ="";
         $errservice_tag ="";
        $errservice_category_id= "";
        $erraddress_id="";
         $Err="";
        //if(empty($firstname) or (empty($lastname)) or (empty($PhoneNumber)) or (empty($password))){
         // $Err= " Failed Update. Please Go back and correct as indicated below ";
          //$error = 1;
        //}
        if(empty($service_tag)){  
          $errservice_description = "*Unfilled servic description.";
          $error = 1;
        }
         if(empty($service_rating)){  
          $errservice_rating= "*Unfilled  service_rating.";
          $error = 1;
        }
        
        if(empty($service_category_id)){
          $errservice_category_id = "*Unfilled service_category_id.";
          $error = 1;
        }

        if(empty($address_id)){  
          $erraddress_id = "*Unfilled address_id.";
          $error = 1;
        }

     
        
        if($error == 0){

	$user=mysqli_query( $db,"UPDATE services SET service_tag='$service_tag', service_description='$service_description', service_rating='$service_rating' , service_category_id='$service_category_id', address_id='$address_id' WHERE service_Id='$service_Id'");

   if ($user){
    header("Location:../admin/home.php");
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
 if(isset($errservice_tag)){
          echo "<div class='error'>$errservice_tag</div>";
        }
        ?>
        <?php
     if(isset($errservice_description)){
          echo "<div class='error'>$errservice_description</div>";
        }
        ?>
        <?php
        if(isset($errservice_category_id)){
          echo "<div class='error'>$errservice_category_id</div>";
        }
        ?>
        <?php
         if(isset($erraddress_id)){
          echo "<div class='error'>$erraddress_id</div>";
        }
        ?>
        <?php
         if(isset($errservice_rating)){
          echo "<div class='error'>$errservice_rating</div>";
        }
        ?>
    
    