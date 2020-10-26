<?php 
//include 'homeheader.php';
 require_once "../databaseService/connection.php";
 require "../classes/Crud.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> Geotraveller registration</title>
    <link rel="stylesheet" href="../css/mountains.css">
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
<body>
	
<div class="header">

	<h4>CREATE ACCOUNT</h4>

</div>
<form id="regform" method="post" action="register.php">
	<?php echo display_error(); ?>


	<div class="input-group">
		<label>firstName</label><br>
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
	<div class="input-group">
		<label>lastName</label><br>
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
<div class="input-group">
		<label>Physical Address</label><br>
		<input type="text" type="text"   name="address" id="address" maxlength="20" value='<?php
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
	<div class="input-group">
		<label>Phone Number</label><br>
		<input type="text"  maxlength="10" name="phoneNumber"
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
	<div class="input-group">
		<label>email address</label><br>
		<input type="email" name="email" id="email"
				value='<?php
						if(isset($email)){echo "$email";}
					?>' onkeyup="checkExistingEmail(this.value)"
			 />
			  <div class='errors' id='emailHint'></div>
			<?php
				if(isset($erremail)){
					echo "<p class='errors'>$erremail 

					</p>"; 

				}
				?>
	</div>
	<div class="input-group">
		<label> username</label><br>
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
	<div class="input-group">
		<label>password</label><br>
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
	</div>
	<div class="input-group">
		<label>Confirm Password</label><br>
		<input type="password" name="password_2">
	</div>
	
	<div class="input-group">
		<label> Profile Image</label><br>
		<input type="file" name="image" >
	</div>
	<div class="input-group">
		<label>confirm you're Human </label>
		<input type="checkbox" name="checkbox" required="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn" value="Submit">Register</button>
	</div>
	<p>
		<strong>Already a member? <a href="login.php">Sign in</a></strong></br> <strong>Terms and conditions <a href="condition.php">conditions</a></strong>
	</p>
</form>

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
</body>
</html>