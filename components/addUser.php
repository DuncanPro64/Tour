<?php
session_start();
 require_once "../databaseService/connection.php";
 require "../classes/Crud.php";
// connect to database
  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  //initilalize variables
  $firstName="";
  $lastname="";
  $address="";
  $phoneNumber="";
  $email="";
  $userName="";
  $password="";
  $image="";
  $user_type="";
  
  
  $update= false;
  if(isset($_POST['save'])){
    $firstName=$_POST['firstName'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $phoneNumber=$_POST['phoneNumber'];
    $email=$_POST['email'];
    $userName=$_POST['userName'];
    $password=$_POST['password'];

    

    mysqli_query($db,"INSERT INTO user(firstName, lastname,address,phoneNumber,email,userName,password) VALUES ('$firstName','$lastname','$address','$phoneNumber','$email', '$userName', '$password' )");
    $_session['message']="Users Updated successfully.";
    //header('location:home.php');
  }
?>
<!--?php 
if (isset($_GET['edit'])){
  $id= $_GET['edit'];
  $upade=true;
  $record= mysqli_query($db,"SELECT * FROM comments WHERE comment_id = $id");
  if(count($record)==1){
    $n= mysqli_fetch_array($record);
    $email=$n['email'];
    $subject=$n['subject'];
    $comment=$n['comment'];
    $comment_id=$n['comment_id'];
  }
}
?>
<form>
<input type ="hidden" name="comment_id" value="<?php echo $comment_id ?>">
<input type ="text" name="email" value="<?php echo $email ?>">
<input type ="text" name="subject" value="<?php echo $subject ?>">

</form>-->

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../css/mountainn.css">
   <link rel="stylesheet" href="../css/styles1.css">
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <style>
      .errors{
        color: #ff726f;
        font-size: 10px;
      }
      .success{
        color: #90ee90;
      }
    </style>

    <?php include('../functions/functional.php') ?>
  <title></title>
  <script>
      function checkExistingEmail(str){
        if (str.length == 0){
          document.getElementById('emailHint').innerHTML = 'This field is required';
          return;

        }
        

        else{
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
              document.getElementById('emailHint').innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "../functions/emailClue.php?q=" + str, true);
          xmlhttp.send();
        }
      }
      
      function checkExistingUsername(str){
        if (str.length == 0){
          document.getElementById('emailHint2').innerHTML = '*This field is required';
          return;
        }else{
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
              document.getElementById('emailHint2').innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "../functions/emailClue.php?q=" + str, true);
          xmlhttp.send();
        }
      }
      
      function checkAddress(str){
        if (str.length < 3){
          document.getElementById('Hint').innerHTML = '*This field is required';
          return;

        } 
      }
      function checkPassword(str){
        if ( str.length < 6){
          document.getElementById('passHint').innerHTML = 'Atleast 6 characters, uppercase, lowercase and a number';
          return;
        //else if (!/[a-z]/.test(#password) || !/[A-Z]/.test(#password)|| !/[0-9]/.(#password)) 
        //document.getElementById('passHint').innerHTML = 'Password require each of a-z, A-Z and 0-9.';
        //return; 
        } 
      }
      function checkFirstName(str){
        if (str.length < 3){
          document.getElementById('first').innerHTML = '*This field is required';
          return;

        } 
      }
      function checkLastName(str){
        if (str.length < 3){
          document.getElementById('last').innerHTML = '*This field is required';
          return;

        } 
      }
      function checkPhone(str){
        if (str.length < 3){
          document.getElementById('Phone').innerHTML = '*This field is required';
          return;

        } 
      }
      
    </script>
      
</head>
<body style="background-color: white;">


 <?php if(isset($_session['message'])): ?>
 <div class ='msg'>
  <?php
  echo $_session['message'];
  unset($_session['message']);
  ?>
</div>
<?php endif ?>
<!--?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM comments"); ?>
<table style="margin-left: 20%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: #f5f5f5;">
    <tr>
      <th>Count</th>
      <th>email</th>
      <th>subject</th>
      <th>comment</th>
      <th> ID </th>
       <th colspan="2">ACTION</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['email']; ?></td>
             <td><?php echo $row['subject']; ?></td>
              <td><?php echo $row['comment']; ?></td>
               <td><?php echo $row['comment_id']; ?></td>
               <td><a href="index.php?edit=<?php echo $row['comment_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="server.php?del=<?php echo $row['comment_id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
             </tr>
           <?php }?>
        }
</table>
<div class="col-md-5 col-md-offset-2">-->
    <form name="addUser" class="form-horizontal" enctype="multipart/form-data" method="post" action="addUser.php" style="margin-left: 50%;border: 1px solid grey;margin-top: 3%;">
      <?php echo display_error(); ?>
        <div class="form-group">
            <label class="control-label col-md-3"> FirstName</label><br>
            <div class="col-md-9">
                <input type="text"  type="text"   name="firstName" id="firstName" maxlength="20" value='<?php
            if(isset($userName)){echo "$userName";}
          ?>' onkeyup="checkFirstName(this.value)"
       />
        <div class='errors' id='first'></div>
      <?php
        if(isset($erremail)){
          echo "<p class='errors'>$erremail 

          </p>"; 

        }
        ?>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"> Last Name</label><br>
            <div class="col-md-9">
       <input type="text"  type="text"   name="lastname" id="lastname" maxlength="20" value='<?php
            if(isset($userName)){echo "$userName";}
          ?>' onkeyup="checkLastName(this.value)"
       />
        <div class='errors' id='last'></div>
      <?php
        if(isset($erremail)){
          echo "<p class='errors'>$erremail 

          </p>"; 

        }
        ?>
            </div>
        </div>
        <div class="input-group">
    <label>Email Address</label><br>
    <input type="email"  name="email" id="email" maxlength="20" value='<?php
            if(isset($email)){echo "$email";}
          ?>' onkeyup="checkAddress(this.value)">
          <div class='errors' id='Hint'></div>
      <?php
        if(isset($erremail)){
          echo "<p class='errors'>$erremail 

           </p>"; 
          }
          ?>
  </div>
           <div class="form-group">
            <label class="control-label col-md-3"> phoneNumber</label><br>
            <div class="col-md-9">
                <<input type="text"  maxlength="10" name="phoneNumber"
    value='<?php
            if(isset($phoneNumber)){echo "$phoneNumber";}
          ?>' onkeyup="checkPhone(this.value)"
       />
        <div class='errors' id='Phone'></div>
      <?php
        if(isset($errphone)){
          echo "<p class='errors'>$erremail 

          </p>"; 

        }
        ?>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3">Physical Address</label><br>
            <div class="col-md-9">
                <input type="text"  name="address" id="address" maxlength="20" value='<?php
            if(isset($address)){echo "$address";}
          ?>' onkeyup="checkAddress(this.value)">
          <div class='errors' id='Hint'></div>
      <?php
        if(isset($erraddress)){
          echo "<p class='errors'>$erraddress 

           </p>"; 
          }
          ?>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3"> Username</label><br>
            <div class="col-md-9">
               <input type="text" maxlength="18"  type="text"  name="userName" id="userName"
    value='<?php
            if(isset($userName)){echo "$userName";}
          ?>' onkeyup="checkExistingUsername(this.value)"
       />
        <div class='errors' id='emailHint2'></div>
      <?php
        if(isset($erruserName)){
          echo "<p class='error'>$erruserName
          </p>";
        }
        ?>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3"> Password</label><br>
            <div class="col-md-9">
               <input type="password"  type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  name="password" id="password" value='<?php
            if(isset($password)){echo "$password";}
          ?>' onkeyup="checkPassword(this.value)">

          <div class='errors' id='passHint'></div>
      <?php
        if(isset($erruserName)){
          echo "<p class='error'>$erruserName
          </p>";
        }
        ?>
      <div class="input-group">
    <label>Confirm Password</label><br>
    <input type="password" name="password_2">
  </div>
  
  <div class="input-group">
    <label> Profile Image</label><br>
    <input type="file" name="image" >
  </div>
        <div class="form-group" style="margin-left: 10%;margin-top: 2%;">
            <label class="control-label col-md-3">&nbsp;</label><br>
            <div class="col-md-9">
                <input type="submit" name="register_btn" value="Register"  class="btn btn-primary"style="margin-top: 2%;"> 
            </div>
        </div>
    </form>
</div>
</body>
 <!--footer><hr>
              <div class="row"><br><br>
                <div class="col-md-4" style="padding-left: 3%">
                  <p> <a href="#"><img src="../public/images/facebook.png" alt="image" id=""class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>facebok</p>
        </p>
                     <p> <a href="#"><img src="../public/images/mail.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>Gmail</p>
        </p>
                  <p>  <a href="#"><img src="../public/images/twitter.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>Twitter</p>
        </p>
                  <p>  <a href="#"><img src="../public/images/skype.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>skype</p>
        </p>
                </div>
                <div class="col-md-4" style="color:#0099ff;">
               Copyright@2020 All rights reserved | Contact the company at <a href="#">mulongodancan25@gmail.com</a>
                or call 0714757251. | About Us | <a href="#">  Laws and regulations.</a> |<br>

                Powered by HiQ solutions
                 
                </div>
              </div>
            </hr></footer>--> 
</html>
<?php
include 'footer.php';
?>