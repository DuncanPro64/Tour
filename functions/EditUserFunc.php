 
<?php
include ('../databaseService/connect.php');

       
	$email = $_POST['email'];
	$firstName=$_POST['firstName'];
	$lastname=$_POST['lastname'];
	$PhoneNumber=$_POST['PhoneNumber'];
  $address=$_POST['address'];
  $userName=$_POST['userName'];
  $user_type=$_POST['user_type'];
  $password=$_POST['password'];
        $error = 0;
        $errfname = "";
        $errlname ="";
        $errphone= "";
        $errpass="";
        $errusername="";
         $Err="";
        //if(empty($firstname) or (empty($lastname)) or (empty($PhoneNumber)) or (empty($password))){
         // $Err= " Failed Update. Please Go back and correct as indicated below ";
          //$error = 1;
        //}
        if(empty($firstName)){  
          $errfname = "*Unfilled user's firstname.";
          $error = 1;
        }
         if(empty($userName)){  
          $errusername = "*Unfilled Username.";
          $error = 1;
        }
        
        if(empty($lastname)){
          $errlname = "*Unfilled user's lastname.";
          $error = 1;
        }

        if(empty($PhoneNumber)){  
          $errphone = "*Unfilled user's phone number.";
          $error = 1;
        }

        if(empty($password)){  
          $errpass = " *Unfilled user's password.";
          $error = 1;
        }
        
        if($error == 0){

	$user=mysqli_query( $db,"UPDATE users SET firstName='$firstName', lastname='$lastname', PhoneNumber='$PhoneNumber' , address='$address', userName='$userName', user_type='$user_type', password='$password' WHERE email='$email'");

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
 if(isset($errfname)){
          echo "<div class='error'>$errfname</div>";
        }
        ?>
        <?php
     if(isset($errlname)){
          echo "<div class='error'>$errlname</div>";
        }
        ?>
        <?php
        if(isset($errphone)){
          echo "<div class='error'>$errphone</div>";
        }
        ?>
        <?php
         if(isset($errpass)){
          echo "<div class='error'>$errpass</div>";
        }
        ?>
        <?php
         if(isset($errusername)){
          echo "<div class='error'>$errusername</div>";
        }
        ?>
    
    