<?php 
	include('../functions/functions.php');
	include('../databaseService/connect.php');
	  include('../functions/static.php');
	   // include('../components/header.php');


	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
">
<link rel="stylesheet" type="text/css" href="../css/index.css">
   <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/all.css">

	 <!--link rel="stylesheet" href="../css/mountainn.css">
   <link rel="stylesheet" href="../css/styles1.css">-->
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="../css/admin1.css">

</head>
<body style="background-color: #fff;">
	<div class="card-header" style="height: 75px; background-color:green; color: black;">
		<h2>Home Page</h2>
		<! logged in user information 
		<div class="profile_info" style="position: right;">
			<img src="../public/images/IMG_20191010_185436.jpg" style="width: 50px; height: 50px;border-radius: 300px;background: green; margin-left:80px; font-size: 8px;" >
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
	<!--div class="content">
		<notification message 
		
		
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['userName']; ?></strong>

					

				<?php endif ?>
			</div>
		</div>
	</div>-->
	<?php 
$count = 1;
$result=mysqli_query($db,"SELECT * FROM services  "); ?>

<div class="container">
 <form>
  <div class="row display-asp">
 <?php while ($row=mysqli_fetch_array($result)){
          ?>
          
    <div class="card border-success mb-3 col-md-4" style="max-width: 20rem; font-size: 10px;font-family: verdana;color: black; font-weight: bold; border: none; justify-content: space-between;">
     
      <div class="card-header" style="font-size: 10px; box-shadow: 1px 0px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;background: white;border-bottom: none;">Category:<?php echo $row['service_category_id']; ?>
      	<p class="card-text"><img  style="width:100%; height: 200px; box-shadow:1px 1px 1px  green; " src="http://localhost/ProjectTour/public/images/<?php echo $row['image'];?>"></p>
      	Subject:<?php echo $row['service_tag']; ?><br>
      	<?php echo $row['service_description']; ?>
      </div>
      <div class="card-body text-black" style="font-size: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; display: ; justify-content: ;">    
        <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>:<?php echo $row['address_id']; ?></h5 >
         <h5 class="card-title" style=" font-size: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>:<?php echo $row['available_space']; ?>available spaces</h5>
         <h5 class="card-title" style=" font-size: 10px;color:black; font-family: verdana;"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>:</span>happening on<?php echo '24' ?></h5>
         
         <h5 class="card-title" style=" font-size: 10px;"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>:</span><?php echo '29' ?>people attending</h5>
          <h5 class="card-title" style=" font-size: 10px;color:black; font-family: verdana;"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>:</span><?php echo '24' ?>no of stops</h5>
        
         <h5 class="card-title" style=" font-size: 10px;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>:Ksh<?php echo $row['price']; ?>.00/=<br>unit price per day</h5 >
          <h5 class="card-title" style=" font-size: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="orange" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><span>*Rating:(</span><?php echo $row['service_rating']; ?>/10)</h5 >

    
     
        <!-- <input type="radio" name="1" value="1"> -->
       
  <a href='book.php?service_Id=<?php echo $row['service_Id'] ; ?>' class="btn btn-success" style="height: 40px; width: 100px; border-radius: 100px;" >  DETAILS</a>
      </div >
    </div>

    <?php }?>
  </div>
  </form>
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
            <script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">// Animations init
  new WOW().init();
</script>

</html>