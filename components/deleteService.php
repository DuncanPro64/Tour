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
  $id = $_REQUEST['service_Id'];

//getting userid of the data from url
 	
$id = $_GET['service_Id'];
   if (isset($_POST['delete'])){
    
                    
        $users=$con->connection->query("DELETE FROM services WHERE service_Id='$id'");

if ($users) {
   
   echo "<div class='alert alert-success tex-center'>Service Deleted Successfully.<img src='../public/images/icon_success1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'></div>
                <a href='../components/addServices.php'>Home</a>";
}
else{
    echo "Error: ".$users."<br />". $db->error;
    }

        }
else{
            $services = "select * from services where service_Id='$id'";
            $results = $db->query("$services");
            $product = $results->fetch_assoc();
            $service_tag= $product['service_tag'];
            $service_Id = $product['service_Id'];

                echo "
            <form method='post'>

      
     
    
                <div class='text-center' >
                    You have requested to delete <br>comment: <b>$service_tag</b>,<br> service_Id.  :<tt class='font-italic font-weight-bold'>$service_Id</tt>.<br> Are you sure?
                    <div class='text-center mt-2'>
                    
                        <a href='../components/comment.php' class='btn btn-success'>Cancel</a>
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