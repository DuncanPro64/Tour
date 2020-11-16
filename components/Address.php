<?php
session_start();
// connect to database
  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  //initilalize variables
  $adress="";
  $Longitude="";
  $Latitude="";
  $address_id=0;
  
  $update= false;
  if(isset($_POST['save'])){
    $adress=$_POST['adress'];
    $Longitude=$_POST['Longitude'];
    $Latitude=$_POST['Latitude'];
    

    mysqli_query($db,"INSERT INTO address(adress, Longitude,Latitude) VALUES ('$adress','$Longitude','$Latitude' )");
    $_session['message']="Address Book Updated successfully.";
    //header('location:home.php');
  }
?>
<!--?php 
if (isset($_GET['edit'])){
  $id= $_GET['edit'];
  $upade=true;
  $record= mysqli_query($db,"SELECT * FROM comments WHERE comment_id = $id");
  if(count($record)==1){
    $n= mysqli_fetch_array($record);
    $email=$n['email'];
    $subject=$n['subject'];
    $comment=$n['comment'];
    $comment_id=$n['comment_id'];
  }
}
?>
<form>
<input type ="hidden" name="comment_id" value="<?php echo $comment_id ?>">
<input type ="text" name="email" value="<?php echo $email ?>">
<input type ="text" name="subject" value="<?php echo $subject ?>">

</form>-->

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../css/mountainn.css">
   <link rel="stylesheet" href="../css/styles1.css">
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title></title>
</head>
<body style="background-color: white;">


 <?php if(isset($_session['message'])): ?>
 <div class ='msg'>
  <?php
  echo $_session['message'];
  unset($_session['message']);
  ?>
  <img src="../public/images/icon_success1.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;">
</div>
<?php endif ?>
<?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM address"); ?>
<table style="margin-left: 20%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: #f5f5f5;">
    <tr>
      <th>Count</th>
      <th>ID </th>
      <th>Address</th>
      <th>Longitude</th>
      <th>Latitude</th>
       <th colspan="3">ACTION</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['address_id']; ?></td>
            <td><?php echo $row['adress']; ?></td>
             <td><?php echo $row['Longitude']; ?></td>
              <td><?php echo $row['Latitude']; ?></td>
               
               <td><a href="EditAddress.php?address_id=<?php echo $row['address_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="deleteAddress.php?address_id=<?php echo $row['address_id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="server.php?del=<?php echo $row['address_id'];?>" class= "edit-btn"> <img src="../public/images/address_icon.png" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
             </tr>
           <?php }?>
        }
</table>
<div class="col-md-5 col-md-offset-2">
    <form name="addcomment" class="form-horizontal" enctype="multipart/form-data" method="post" action="Address.php" style="margin-left: 50%;border: 1px solid grey;margin-top: 3%;">
        <div class="form-group">
            <label class="control-label col-md-3"> Address Name</label><br>
            <div class="col-md-9">
                <input type="text" name="adress" class="form-control" required>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"> Longitude</label><br>
            <div class="col-md-9">
        <input type="number" name="Longitude" class="form-control" maxlength="15" required>    
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3"> Latitude</label><br>
            <div class="col-md-9">
                <input type="number" name="Latitude" class="form-control" maxlength="15" required>
            </div>
       
      
        <div class="form-group" style="margin-left: 10%;margin-top: 2%;">
            <label class="control-label col-md-3">&nbsp;</label><br>
            <div class="col-md-9">
                <input type="submit" name="save" value="add to address"  class="btn btn-primary"style="margin-top: 2%;"> 
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
include 'footer.php';
?>