<?php 
require "../classes/Crud.php";

require_once "../databaseService/connection.php";
$crud = new Crud();

//getting id from url
$id= $_GET['email'];
$query = "SELECT * FROM users WHERE email= $id";
$users= $crud->getData($query);

//selecting data associated with this particular userid
$users = $crud->getData("SELECT * FROM users WHERE email='$id'");
 
foreach ($users as $user) {
    
     $firstName=$user['firstName']; 
     $email=$user['email']; 
     $phoneNumber=$user['phoneNumber']; 
     $userName=$user['userName']; 
     $password=$user['password']; 
    $user_type=$user['user_type']; 
     $address=$user['address']; 

    }

    if(isset($_POST['Update'])) 
    {   
    	$email = $_POST['email'];
	    $firstName = $_POST['firstName'];
	    $email = $_POST['email'];
	    $phoneNumber = $_POST['phoneNumber'];
	    $userName = $_POST['userName'];
	    $password = $_POST['password'];
	    $user_type = $_POST['user_type'];
	    $address = $_POST['address'];

	    //updating data in the users table
	    $users = $crud->execute("UPDATE users SET firstName='$firstName',email='$email',phoneNumber='$phoneNumber',userName='$userName',password='$password',userType='$userType',address='$address' WHERE email=$id");
	        
	       
	        header("Location: viewUsers.php");
	}
?>

<div class="col-md-5 col-md-offset-2">
    <form class="form-horizontal" method="post" action="editUser.php">
        <div class="form-group">
            <div class="col-md-9">
                <input type="text" name="email" class="form-control" value="<?php echo $_GET['email'];?>" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">Full Name</label>
            <div class="col-md-9">

                <input type="text" name="firstName" class="form-control" value="<?php echo $firstName;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input type="number" name="phoneNumber" class="form-control" value="<?php echo $phoneNumber;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">UserName</label>
            <div class="col-md-9">
                <input type="text" name="userName" class="form-control" value="<?php echo $userName;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" value="<?php echo $password;?>" required>
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-md-3">User Type</label>
            <div class="col-md-9">
                <input type="text" name="userType" class="form-control" value="<?php echo $user_type;?>" required>
            </div>
        </div>
        
         <div class="form-group">
            <label class="control-label col-md-3">address</label>
            <div class="col-md-9">
                <input type="text" name="address" class="form-control" value="<?php echo $address;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Update" value="Update" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>