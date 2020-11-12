<?php
session_start();

  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  
  //initilalize variables
  $service_Id=0;
  $service_tag="";
  $service_descrption="";
  $available_space="";
  $service_rating=0;
  $image="";
  $service_category="";
  $service_category_id="";
  $host_address="";
  $status="";
  $image_tmp="";
  $adress="";

  
  $update= false;
  if(isset($_POST['save'])){
    $service_tag=$_POST['service_tag'];
    $service_description=$_POST['service_description'];
    $available_space=$_POST['available_space'];
    $service_rating=$_POST['service_rating'];
    $service_category=$_POST['service_category'];
    $adress=$_POST['adress'];
     $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $category_id_query=mysqli_query ($db,"SELECT * FROM category where service_category='$service_category'");
     while($row = mysqli_fetch_array($category_id_query)) { 
   
           $service_category_id=$row['service_category_id'];
           }
     $address_id_query=mysqli_query ($db,"SELECT * FROM address where adress='$adress'");
   
            while($row = mysqli_fetch_array($address_id_query)) { 
   
           $address_id=$row['address_id'];
           }
         
     move_uploaded_file($image_tmp,"C:\\wamp\\www\\ProjectTour\\public\\images\\$image");
    

    $user=mysqli_query($db,"INSERT INTO services(service_tag, service_description,available_space, service_rating,address_id,service_category_id,image) VALUES ('$service_tag','$service_description','$available_space','$service_rating','$address_id','$service_category_id','$image' )") or die(mysqli_error($db));
    

    $_session['message']="service created successfully.";
  
           
    //header('location:home.php');
   }
?>
<?php
    $category_query=mysqli_query ($db,"SELECT * FROM category");
     $address_query=mysqli_query ($db,"SELECT * FROM address");
    

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
$result=mysqli_query($db,"SELECT *FROM services"); ?>
<style type="text/css">
  tr:nth-child(even){
  background-color: #f2f2f2;
 }
 tr:nth-child(even):hover{
  background-color: orange;
 }
 tr:nth-child(odd):hover{
  background-color: orange;
 }

</style>
<table style="margin-left: 25%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: orange;">
    <tr>
      <th>Count</th>
       <th>Service_Id</th>
      <th>Service_tag</th>
      <th>Description</th>
      <th>Available Spaces</th>
      <th> Rating </th>
        <th> Category_id </th>
         <th> Address_id </th>
          <th> Image </th>
       <th colspan="2">ACTION</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
             <td><?php echo $row['service_Id']; ?></td>
            <td><?php echo $row['service_tag']; ?></td>
             <td><?php echo $row['service_description']; ?></td>
              <td><?php echo $row['available_space']; ?></td>
               <td><?php echo $row['service_rating']; ?></td>
                 <td><?php echo $row['service_category_id']; ?></td>
                   <td><?php echo $row['address_id']; ?></td>
                     <td><div class="el-card-item"style="box-shadow: 0px 1px 5px #bbbbbb;">
                    <div class="el-card-avatar el-overlay-1"><a href="../components/editProfile.php?service_Id=<?php echo $row['service_Id'];?>" class= "edit-btn"> <img  style="width:30px; height: 20px;" src="http://localhost/ProjectTour/public/images/<?php echo $row['image'];?>" /></a></div></div></td>
               <td><a href="index.php?edit=<?php echo $row['service_Id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="server.php?del=<?php echo $row['service_Id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
             </tr>
           <?php }?>
      
</table>
<!--?php
    $category_query = "SELECT * FROM category";
    $categories = $crud->getData($category_query);                                      
?>--> 
<div class="col-md-5 col-md-offset-2">
    <form name="addcomment" class="form-horizontal" enctype="multipart/form-data" method="post" action="addServices.php" style="margin-left: 50%;border: 1px solid grey;margin-top: 3%;">
        <div class="form-group">
            <label class="control-label col-md-3"> Service_tag</label><br>
            <div class="col-md-9">
                <input type="text" name="service_tag" class="form-control" required>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"></label><br>
            <div class="col-md-9">
        <textarea rows=5 cols=10 type="textarea" name="service_description" class="form-control" required >Describe your service</textarea>     
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3"> Available Space</label><br>
            <div class="col-md-9">
                <input type="text" name="available_space" class="form-control" required>
            </div>
             <div class="form-group">
            <label class="control-label col-md-3"> Rate out of ten</label><br>
            <div class="col-md-9">
                 <select name="service_rating" class="form-control"required >
                      
                       <option>0</option>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>6</option>
                       <option>7</option>
                       <option>8</option>
                       <option>9</option>
                       <option>10</option>
                      
                   </select>
            </div>
       
       <div class="form-group">
            <label class="control-label col-md-3">select Category Type</label>
            <div class="col-md-9">
                <select name="service_category" class="form-control"required >
                      
                        <?php while($row = mysqli_fetch_array($category_query))  {?>
                       <option><?php echo $row['service_category'] ?></option>
                       <!--?php endforeach; ?>-->
                       <?php }?>
                       <option>Others</option>
                   </select>
            
        </div>
         </div>
           <div class="form-group">
            <label class="control-label col-md-3"> Select Address Name</label><br>
            <div class="col-md-9">
                 <select name="adress" class="form-control"required >
                      <?php while($row = mysqli_fetch_array($address_query))  {?>
                       <option><?php echo $row['adress'] ?></option>
                       <!--?php endforeach; ?>-->
                       <?php }?>
                      
                      <option>Others</option>
                   </select>
            </div>
       <div class="form-group">
            <label class="control-label col-md-3">Good Profile</label>
            <div class="col-md-9">
                <input type="file" name="image" class="form-control" >
            </div>
        </div>
        <div class="form-group" style="margin-left: 10%;margin-top: 2%;">
            <label class="control-label col-md-3">&nbsp;</label><br>
            <div class="col-md-9">
                <input type="submit" name="save" value="Add Service"  class="btn btn-primary"style="margin-top: 2%;"> 
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
include 'footer.php';
?>