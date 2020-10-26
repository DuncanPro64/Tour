<?php 
	include('../functions/functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/admin1.css">

</head>
<body>
	<div class="header" style="height: 75px; background-color:#3498db; color: black;">
		<h2>Home Page</h2>
		<!-- logged in user information -->
		<div class="profile_info" style="position: right;">
			<img src="../public/images/IMG_20191010_185436.jpg" style="width: 50px; height: 50px;border-radius: 300px;background: green; margin-left:80px;" >
			<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['userName']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<!--a href="index.php?logout='1'" style="color: red;">logout</a>-->
					</small>

				<?php endif ?>
			<div>
				
			</div>
		</div>
	</div>
	<div class="content">
		
	</div>
	<div class="content">
		<!-- notification message -->
		
		
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['userName']; ?></strong>

					

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
<footer><hr>
              <div class="row"><br><br>
                <div class="col-md-4" style="padding-left: 3%">
                  <p> <a href="calculator.php"><img src="../public/images/facebook.png" alt="image" id=""class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>facebok</p>
        </p>
                     <p> <a href="calculator.php"><img src="../public/images/mail.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>Gmail</p>
        </p>
                  <p>  <a href="calculator.php"><img src="../public/images/twitter.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>Twitter</p>
        </p>
                  <p>  <a href="calculator.php"><img src="../public/images/skype.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a>skype</p>
        </p>
                </div>
                <div class="col-md-4" style="color:#0099ff;">
               Copyright@2020 All rights reserved | Contact the company at <a href="#">mulongodancan25@gmail.com</a>
                or call 0714757251. | About Us | <a href="#">  Laws and regulations.</a> |<br>

                Powered by HiQ solutions
                 
                </div>
              </div>
            </hr></footer> 
</html>