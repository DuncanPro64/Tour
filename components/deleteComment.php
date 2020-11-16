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
  $id = $_REQUEST['comment_id'];

//getting userid of the data from url
 	
$comment_id = $_GET['comment_id'];
   if (isset($_POST['delete'])){
    
                    
        $category=$con->connection->query("DELETE FROM comments WHERE comment_id='$id'");

if ($category) {
   
   echo "<div class='alert alert-success tex-center'>Comment Deleted Successfully.<img src='../public/images/icon_success1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;'></div>
                <a href='../admin/home.php'>Home</a>";
}
else{
    echo "Error: ".$users."<br />". $db->error;
    }

        }
else{
            $comments = "select * from comments where comment_id='$comment_id'";
            $results = $db->query("$comments");
            $product = $results->fetch_assoc();
            $comment = $product['comment'];
            $comment_id = $product['comment_id'];

                echo "
            <form method='post'>

      
     
    
                <div class='text-center' >
                    You have requested to delete <br>comment: <b>$comment</b>,<br> comment_id.  :<tt class='font-italic font-weight-bold'>$comment_id</tt>.<br> Are you sure?
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