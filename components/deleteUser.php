<?php
include('../components/loginerror.php');
?>

<body class='ml-4 mr-4'>

        <h4 class='text-center'>Confirm User Deletion!</h4>
        <img src="../public/images/icon_warning1.gif" alt="image" class="photo" style="width: 30px; height: 30px;border-radius: ; margin-top: 3px;margin-left: 50%; ">
        <div> <hr><?php echo display_error(); ?></hr></div>
        <hr>
<?php
//including the database connection file
include_once("../classes/Constant.php");
include('../databaseService/connect.php');
 $con=new DbConfig();//creating object con
  $id = $_REQUEST['email'];

//getting userid of the data from url
 	
$email = $_GET['email'];
   if (isset($_POST['delete'])){
    
                    
        $users=$con->connection->query("DELETE FROM users WHERE email='$email'");

if ($users) {
   
   echo "<div class='alert alert-success tex-center'>Product Deleted Successfully.</div>
                <a href='../admin/home.php'>Home</a>";
}
else{
    echo "Error: ".$users."<br />". $db->error;
    }

        }
else{
            $users = "select * from users where email='$email'";
            $results = $db->query("$users");
            $product = $results->fetch_assoc();
            $num = $product['firstName'];
            $email = $product['email'];

                echo "
            <form method='post'>

      
     
    
                <div class='text-center' >
                    You have requested to delete <br>user: <b>$num</b>,<br> email.  :<tt class='font-italic font-weight-bold'>$email</tt>.<br> Are you sure?
                    <div class='text-center mt-2'>
                    
                        <a href='../admin/home.php' class='btn btn-success'>Cancel</a>
                        <input type='submit' name='delete' id='delete' value='Delete'  class='btn btn-danger'/> 
                    </div>
                </div>
            </form> ";
        }
?>
<?php
include 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
  <style>
      .error{
        color: #ff726f;
      }
      .success{
        color: #90ee90;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title></title>
</head>
<body>

</body>
</html>