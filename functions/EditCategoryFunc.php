 
<?php
include ('../databaseService/connect.php');

       
	$service_category_id = $_POST['service_category_id'];
	$service_category=$_POST['service_category'];
	$Description=$_POST['Description'];
	$Title=$_POST['Title'];
 
        $error = 0;
        $errservice_category = "";
        $errDescription ="";
        $errTitle= "";
    
         $Err="";
        //if(empty($firstname) or (empty($lastname)) or (empty($PhoneNumber)) or (empty($password))){
         // $Err= " Failed Update. Please Go back and correct as indicated below ";
          //$error = 1;
        //}
        if(empty($service_category)){  
          $errfservice_category = "*Unfilled Category name.";
          $error = 1;
        }
         if(empty($Description)){  
          $erruserDescription = "*Unfilled Category Description.";
          $error = 1;
        }
        
        if(empty($Title)){
          $errTitle = "*Unfilled Description Title.";
          $error = 1;
        }

        
        
        if($error == 0){

	$user=mysqli_query( $db,"UPDATE Category SET service_category='$service_category', Description='$Description', Title='$Title' WHERE service_category_id='$service_category_id'");

   if ($user){
    header("Location:../components/addCategory.php");
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
 if(isset($errservice_category)){
          echo "<div class='error'>$errservice_category</div>";
        }
        ?>
        <?php
     if(isset($errDescription)){
          echo "<div class='error'>$errDescription</div>";
        }
        ?>
        <?php
        if(isset($errTitle)){
          echo "<div class='error'>$errTitle</div>";
        }
        ?>
       
    
    