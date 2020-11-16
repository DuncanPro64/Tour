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
  $id = $_REQUEST['service_category_id'];

//getting userid of the data from url
 	
$id = $_GET['service_category_id'];
   if (isset($_POST['delete'])){
    
                    
        $category=$con->connection->query("DELETE FROM category WHERE service_category_id='$id'");

if ($category) {
   
   echo "<div class='alert alert-success tex-center'>Service category Deleted Successfully.<img src='../public/images/icon_success1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'></div>
                <a href='../components/addServices.php'>Home</a>";
}
else{
    echo "Error: ".$category."<br />". $db->error;
    }

        }
else{
            $category = "select * from category where service_category_id='$id'";
            $results = $db->query("$category");
            $product = $results->fetch_assoc();
            $service_category= $product['service_category'];
            $service_category_id = $product['service_category_id'];

                echo "
            <form method='post'>

      
     
    
                <div class='text-center' >
                    You have requested to delete <br>service_category: <b>$service_category</b>,<br> service_Id.  :<tt class='font-italic font-weight-bold'>$service_category_id</tt>.<br> Are you sure?
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