<?php 
	include"../functions/functions.php";
	require "../classes/Crud.php";
	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}
	$crud = new Crud();
  $count = 1;
$query = "SELECT * FROM users WHERE user_type='user' ";
$users = $crud->getData($query);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/adminn.css">
	<!--link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title> Geotraveller</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

</head>
<body>
	<div class="header" style=" height: 17%; width: 100%; margin-left: none;">
		<h4>Admin - Home Page</h4>
		
		<div class= "notification" style="float: left;">
      <a href="../components/addUser.php"><img src="../public/images/icon_users.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px; "></a><br><h style="font-size: 10px;color:green; "> USERS</h ></p>
        
      </div>
      <div class= "notification" style="float: left;">
      <a href="../components/Address.php"><img src="../public/images/icon_news.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px; "></a><br><h style="font-size: 10px;color:green; ">  UPDATES</h ></p>
        
      </div>
      <div class= "notification" style="float: left;">
      <a href="../components/addServices.php"><img src="../public/images/icon_reports.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px; "></a><br><h style="font-size: 10px;color:green; "> REPORTS</h ></p>
        
      </div>
      <div class= "notification" style="float: left;">
      <a href="../components/comment.php"><img src="../public/images/icons/comments.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px; "></a><br><h style="font-size: 10px;color:green; "> COMMENT</h ></p>
        
      </div>
      <div class= "notification" style="float: left;">
      <a href="../components/addCategory.php"><img src="../public/images/icon_dashboard.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px; "></a><br><h style="font-size: 10px;color:green; "> DASHBOARD</h ></p>
        
      </div>
	</div>
	<!--div class="content">
		< notification message 
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>-->
        </nav>
		 <div class="userinfo">
    
       <div class= "notification">
      <a href="#"><img src="../public/images/icon_media.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;box-shadow: 0px 1px 5px #bbbbbb; "></a><br><h style="font-size: 10px;color:black;"> settings</h ></p>
        
      </div>
       <div class= "notification">
      <a href="#"><img src="../public/images/icon_media.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;box-shadow: 0px 1px 5px #bbbbbb;"></a><br><h style="font-size: 10px;color:green; font-family: 'calibri', Gadget, myriad;font-weight: small;"> notifications</h ></p>
       
      </div>

     <div class= "messages">
      <a href="#"><img src="../public/images/mail.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top:1px;box-shadow: 0px 1px 5px #bbbbbb;"></a><h style="font-size: 10px;color:green;"> messages</h ></p>
        
      </div>

		<!-- logged in user information -->
    <div class="userprofile"> <?php if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['firstName']; ?></strong>
					
		<?php echo $_SESSION['user']['user_type']; ?>
				<?php endif ?>

     
    </div> 
 <a href='../Components/editImage.php?email=<?php echo $_SESSION['user']['email']; ?>' class='btn btn-danger'>
  <?php if (isset($_SESSION['user'])) : ?>
  <img   src="http://localhost/ProjectTour/public/images/<?php  echo $_SESSION['user']['image']; ?>"
  <?php endif ?> alt="image" id="photo" /></strong>
 <div class= "calculator">
      <a href="calculator.php"><img src="../public/images/phone_icon.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a><br><h style="font-size: 10px;color:green; font-family:  'calibri', Gadget, myriad;font-weight: small;"> calculator</h ></p>
        
      </div>

 </div>
    <div class="users">
       <table class="table table-bordered">
                <thead >
                <tr>
                     <th>Count</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone Number</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <!--th>UserType</th>-->
                    <th>Address</th>
                     <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($users as $user):
                ?>
                <tr>
                    <td><?php echo $count++ ?></td>
                    <td><?php echo $user['firstName'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['PhoneNumber'] ?></td>
                    <td><?php echo $user['userName'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <!--td><?php echo $user['user_type'] ?></td>-->
                    <td><?php echo $user['address'] ?></td>
                      
                    <td class='text-center'>
                    <a href='../components/editUser.php?email=<?php echo $user['email'] ?>' class='btn btn-primary'><img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a>
                    <a href='../Components/deleteUser.php?email=<?php echo $user['email'] ?>' class='btn btn-danger'><img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a>
                </td>
                </tr>
                
                <?php
                endforeach;
                ?>
                </tbody>
           
            </table>
    </div> 
</li>
<!--adminlogin End-->

</div>
<!--Page wrapper End-->

 </div>
 <!--div class="datetime"><title>--></title>
</div>
</div>


		

			</div>
		</div>



	</div>


<footer><hr>
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
            </hr></footer> 
</html>