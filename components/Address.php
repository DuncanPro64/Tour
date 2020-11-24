<?php
session_start();
// connect to database
  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  //initilalize variables
  $adress="";
    $name="";
      $type="";
  $Longitude="";
  $Latitude="";
  $address_id=0;
  
  $update= false;
  if(isset($_POST['save'])){
    $adress=$_POST['adress'];
    $Longitude=$_POST['Longitude'];
    $Latitude=$_POST['Latitude'];
      $name=$_POST['name'];
        $type=$_POST['type'];
    

    mysqli_query($db,"INSERT INTO address(adress, Longitude,Latitude,name,type) VALUES ('$adress','$Longitude','$Latitude' ,'$name','$type')");
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
       <th>Name</th>
        <th>Type</th>


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
               <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['type']; ?></td>
               
               <td><a href="EditAddress.php?address_id=<?php echo $row['address_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="deleteAddress.php?address_id=<?php echo $row['address_id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="server.php?del=<?php echo $row['address_id'];?>" class= "edit-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></a></td>
             </tr>
           <?php }?>
        }
</table>

<input type="button" name="save" value="Add Service launch"  class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"> 


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5 style="color: green;" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="col-md-7 col-md-offset-1">
    <form name="addcomment" class="form-horizontal" enctype="multipart/form-data" method="post" action="Address.php" style="margin-left: 50%;border: 1px solid grey;margin-top: 3%;width: 100%; display: flex;justify-content: space-between;">
        <div class="form-group">
            <label class="control-label col-md-3">  Name</label><br>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" required>
            </div>
          <div class="form-group">
            <label class="control-label col-md-3"> Address Name</label><br>
            <div class="col-md-9">
                <input type="text" name="adress" class="form-control" required>
            </div>
        <div class="form-group">
            <label class="control-label col-md-3"> Type</label><br>
            <div class="col-md-9">
                 <select name="type" class="form-control"required >
                      
                       <option>restaurant</option>
                       <option>bar</option>
                        <option>other</option>
                      
                   </select>
            </div>
             <div class="form-group">
            <label class="control-label col-md-3"> Longitude</label><br>
            <div class="col-md-9">
        <input type="float" name="Longitude" class="form-control" maxlength="15" required>    
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3"> Latitude</label><br>
            <div class="col-md-9">
                <input type="float" name="Latitude" class="form-control" maxlength="15" required>
            </div>
       
      
        <div class="form-group" style="margin-left: 10%;margin-top: 2%;">
            <label class="control-label col-md-3">&nbsp;</label><br>
            <div class="col-md-9">
                <input type="submit" name="save" value="add to address"  class="btn btn-primary"style="margin-top: 2%;"> 
            </div>
        </div>
    </form>
    </div>
</div>
</div>
  <!-- scripts -->
   <script type="text/javascript" src="../add/js/jquery.min.js"></script>
   <script type="text/javascript" src="../add/js/popper.min.js"></script>
    <script type="text/javascript" src="../add/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../add/js/mdb.min.js"></script>
    <script type="text/javascript" src="../add/js/app.js"></script>



</div>
</body>
</html>
<?php
include 'footer.php';
?>