<?php include('../functions/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Geotraveller Login</title>
  <link rel="stylesheet" type="text/css" href="../css/Login.css">
</head>
<body>
 <img src="../public/images/skype.png" alt="image" id="photo" style="width: 60px; height:60px;margin-left:43%; padding-top:8%;"></br>
  <div class="header">
    <h2>Login to Geotraveller Web Portal</h2>
  </div>
  
  <form method="post" action="login.php">

    <?php echo display_error(); ?>

    <div class="input-group">
      <!--label>Username</label>-->
      <input type="text" name="userName" placeholder="Enter your Username">
    </div>
    <div class="input-group">
      <!--label>Password</label>-->
      <input type="password" name="password" placeholder="Enter your password">
    </div>
    <div class="input-group">
      <style type="text/css">
        button{
        background-color:#3498db; 
        border: 1px solid #3498db; 
        height: 40px;
        width: 90%;
        border-radius: 5px;
      }
      p{
        position: center;
        color:#3498db;
        margin-left:22%;
        font-size: 18px;

      }
      p label{
        outline-style: none;
      }
      </style>
      <button type="submit" class="btn" name="login_btn">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a><br>
      <a href="#"> Forgot password?</a>
    </p >
  </form>


</body>
</html>