<?php 
//include 'emailClue.php';

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'Geotraveller');

// variable declaration
$userName = "";
$email    = "";
$address = "";
$phoneNumber = "";
$password= "";
$image="";
$errors   = array(); 
$error = 0;

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors,$error, $username, $email,$firstName,$lastname ,$address,$phoneNumber,$userName,$password, $image, $image_tmp;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$firstName    =  e($_POST['firstName']);
	$lastname    =  e($_POST['lastname']);
	$address      =  e($_POST['address']);
	$phoneNumber       =  e($_POST['phoneNumber']);
	$email       =  e($_POST['email']);
	$userName       =  e($_POST['userName']);
	$password  =  e($_POST['password']);
	$password_2  =  e($_POST['password_2']);
	// $image = $_FILES['image']['name'];
    //$image_tmp = $_FILES['image']['tmp_name']; 
	// form validation: ensure that the form is correctly filled
	if (empty($userName) or (empty($email)) or(empty($password)) or ($password!=$password_2)){
	//echo  " <p><font color=' #ff726f'><font size='3px'>check your details and try again!!.</p >"; 	
	} 		
	
	if (empty($userName)) { 
		array_push($errors, "Username is required");
	
	}
	else{
	$sql = "SELECT * FROM users WHERE userName='$userName'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0)
					{
						$erremail="A user with this userName address already exists!";
						$error = 1;
						
					}
				}
				//echo "<p class='error'>$db->error</p>";
	if (empty($email)) { 
		array_push($errors, "Email is required");
		
	}
	else{
	$sql = "SELECT * FROM users WHERE email='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0)
					{
						$erremail="A user with this email address already exists!";
						$error = 1;
					}
				}
				
				//echo "<p class='error'>$db->error</p>";	
	/*if (empty($idNumber)) { 
		//array_push($errors, "idNumber is required"); 
		
	}
	else{
	$sql = "SELECT * FROM users WHERE idNumber='$idNumber'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0)
					{
						$erridNumber="A user with this ID address already exists!";
						$error = 1;
					}
				}*/
				//echo "<p class='error'>$db->error</p>";
	if (empty($password)) { 
		array_push($errors, "password is required");
		
	}
	if ($password != $password_2) {
		array_push($errors, "The two passwords do not match");
	
	}
		
	$sql = "SELECT * FROM users WHERE email='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0){
  		array_push($errors,"!! The email you choose is used by another person");	
  	}
  /*	$sql = "SELECT * FROM users WHERE idNumber='$idNumber'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0){
  		array_push($errors," !!The id Number you used belongs to some other person");	
	  }*/
  	$sql = "SELECT * FROM users WHERE userName='$userName'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0){
  		array_push($errors," Sorry, the username you choose is already taken.");
  		}		 

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		array_push($errors,"Account created successfully , welcome to GeoTravel");
		$password = md5($password);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (firstName,lastname,address, phoneNumber, email,userName,password,image,user_type) 
					  VALUES('$fistName', '$lastname' ,$address', '$phoneNumber','$email',$userName','$password','$image','$user_type')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header("location: ../components/sending.php");
		}else{
			 move_uploaded_file($image_tmp,"C:\\wamp\\www\\Geotravel\\public\\images\\$image");
			$query = "INSERT INTO users (firstName, lastname, address, phoneNumber,email,userName,password,image,user_type) 
					  VALUES('$firstName', '$lastname', '$address', '$phoneNumber','$email','$userName','$password','$image','user')";
			mysqli_query($db, $query);
			$logged_in_user_id = mysqli_insert_id($db);
				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: index1.php');	
				}
				if($query){
       echo "<font color='green'>Record added succesfully.";
		}
    						
		}
	}
function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}
// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	