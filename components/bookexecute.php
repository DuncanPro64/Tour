<?php
if(!isset($_SESSION)) {
session_start();
   include('../databaseService/connect.php');
$id = $_GET['service_Id']; 
$email= $_SESSION['user']['email'];
  }
        include('../components/static.php');
// $service_Id=$_POST['service_Id'];
//$email = $_POST['email'];
 /* $service_tag=$_POST['service_tag'];
  $service_description=$_POST['service_description'];
  $servive_rating=$_POST['service_rating'];
  $available_space=$_POST['available_space'];*/
  
    ?>
    <div class="container">
      <div class="row">
        <?php echo $_SESSION['user']['email']; ?>

   </div>
<?php



       //$id = $_REQUEST['asp_id'];

//getting userid of the data from url




//$sql=mysqli_query($con,'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="voted"');


 $result = mysqli_query($db, "SELECT * FROM services where service_Id='$id'");
    while($row = mysqli_fetch_array($result))
      {
        $image=$row['image'];

          // $service_Id= $row['service_Id'];
           $service_tag= $row['service_tag']; 
           $service_description=$row['service_description']; 
            $available_space= $row['available_space']; 
              $service_rating=$row['service_rating']; 
              $price=$row['price']; 
               
           $address_id= $row['address_id']; 
      }

	
if(isset($_POST['book'])){
	
      $check= mysqli_query($db, "SELECT * FROM orders WHERE email= '$email' AND service_Id='$id'")or die(mysqli_error($db));
      if(mysqli_num_rows($check)>0){
    echo" You are already listed on this tour<br>
    You can not book more than one. ";
  exit();
}
        

 $order=mysqli_query($db,"INSERT INTO orders(ItemOdered,QuantityBooked, service_Id,email) VALUES ('$service_tag','1', '$id', '$email')") or die(mysqli_error($db));
    
;
  $order2=mysqli_query( $db,"UPDATE services SET available_space=available_space-1 WHERE service_Id= '$id'")or die(mysqli_error($db));
    
;
    $_session['message']="Category saved successfully.";
    //header('location:home.php');

 

   if ($order) {
   
   echo "<div class='alert alert-success tex-center'>You booked Successfully.<img src='../public/images/icon_success1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'></div>
                <a href='../components/book.php'>Home</a>";
}
else{
    echo "Error: ".$order."<br />". $db->error;
    }

        }
else{
            $service = "select * from services where service_Id='$id'";
            $results = $db->query("$service");
            $service = $results->fetch_assoc();
            $service_tag= $service['service_tag'];
            $service_Id = $service['service_Id'];

                echo "
            <form method='post'>

      
     
    
                <div class='text-center' >
                    You have resolved to book tour <br>Tag: <b>$service_tag</b>,<br> Registration N0.  :<tt class='font-italic font-weight-bold'>$service_Id</tt>.<br> Are you sure?
                    <div class='text-center mt-2'>
                    
                        <a href='index1.php' class='btn btn-success'>Cancel</a>
                        <input type='submit' name='book' id='delete' value='book'  class='btn btn-danger'/> 
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