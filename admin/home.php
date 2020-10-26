<?php 
	include"../functions/functions.php";
	require "../classes/Crud.php";
	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}
	$crud = new Crud();
$query = "SELECT * FROM users ";
$users = $crud->getData($query);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title> Geotraveller</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<!--link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/jqueryslidemenu.css" type="text/css" media="screen" />-->

<!-- supersized -->
<!--link rel="stylesheet" href="../css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/supersized.shutter.css" type="text/css" media="screen" />-->
<!-- supersized -->

<link rel="stylesheet" href="../css/carouFredSel.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/quicksand.css" />
<link rel="stylesheet" type="text/css" href=".../js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>

<!-- supersized -->
<script type="text/javascript" src="../js/supersized.3.2.7.js"></script>
<script type="text/javascript" src="../js/supersized.shutter.js"></script>
<!-- supersized -->

<!-- fancybox -->
<script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>-->
<!-- fancybox -->

<!-- quicksand -->
<script type="text/javascript" src="../js/portfolio_sortable.js"></script>
<script type="text/javascript" src="../js/quicksand.js"></script>
<!-- quicksand -->

<script type="text/javascript" src="../js/jquery.carouFredSel-6.0.6.js"></script>

<script type="text/javascript" src="../js/contact.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>

            
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,600,700,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div class="header" style=" height: 15%; width: 100%; margin-left: none;">
		<h4>Admin - Home Page</h4>
		
		
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
      <a href="#"><img src="../public/images/address_icon.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px; "></a><br><h style="font-size: 10px;color:black;"> settings</h ></p>
        
      </div>
       <div class= "notification">
      <a href="#"><img src="../public/images/address_icon.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a><br><h style="font-size: 10px;color:black; font-family: 'calibri', Gadget, myriad;font-weight: small;"> notifications</h ></p>
       
      </div>

     <div class= "messages">
      <a href="#"><img src="../public/images/mail.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top:1px;"></a><h style="font-size: 10px;color:black;"> messages</h ></p>
        
      </div>

		<!-- logged in user information -->
    <div class="userprofile"> <?php if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['firstName']; ?></strong>
					
		<?php echo $_SESSION['user']['user_type'];  ?>
				<?php endif ?>

     
    </div> 
 <img src="../public/images/IMG_20191010_185436.jpg" alt="image" id="photo"></strong>
 <div class= "calculator">
      <a href="calculator.php"><img src="../public/images/phone_icon.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 3px;"></a><br><h style="font-size: 10px;color:#003366; font-family:  'calibri', Gadget, myriad;font-weight: small;"> calculator</h ></p>
        
      </div>

 </div>
<div class="form" style="color: black;">
   <nav id="sidebarmenu">
        <ul id="sidebarmenu1" class="menu" style="color: black;">
            <li><a href="#page_about"></a>DASHBOARD</li>
            <li><a href="#page_gallery"> ITEMS</a></li>
            <li><a href="#page_contact">WRITE</a></li>
            <li><a href="#adminlogin">USERS </a></li>

        </ul>
  
    </div>

    <nav id="sidebarmenu" style="color: black;">
        <ul id="sidebarmenu1" class="menu">
            <li><a href="#page_about">about</a></li>
            <li><a href="#page_gallery">Gallery</a></li>
            <li><a href="#page_contact">FEEDBACK</a></li>
            <li><a href="#adminlogin">Admin Login</a></li>
        </ul>
        
    </nav>
    
</div>
<!--leftside end --> 


<!--Content Start-->
<div class="contWrapper">
<article id="content">



<ul id="ulcontent">

<!--About Us Start-->
<li id="page_about">
    <div class="title-wrapper">
      
<!--Gallery Start-->
<li id="page_gallery">
    
<!--Contact Start-->
<li id="page_contact">
    
    <div class="clear"></div>
    <div class="v_space"></div>
    
    <div class="title-wrapper">
       
<!--adminlogin Start-->
<li id="adminlogin">
   
    <!--div class="title-wrapper">-->
        <h2> USERS</h2>
    </div>
    <div class="contact_form">
       <table class="table table-bordered">
                <thead >
                <tr>
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
                    
                    <td><?php echo $user['firstName'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['PhoneNumber'] ?></td>
                    <td><?php echo $user['userName'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <!--td><?php echo $user['user_type'] ?></td>-->
                    <td><?php echo $user['address'] ?></td>
                    <td class='text-center'>
                    <a href='../components/editUser.php?email=<?php echo $user['email'] ?>' class='btn btn-primary'>Edit</a>
                    <a href='change.php?email=<?php echo $user['email'] ?>' class='btn btn-danger'>Delete</a>
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