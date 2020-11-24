<?php
session_start();
// connect to database
  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  //initilalize variables
  $service_category="";
  $Description="";
  $Title="";
  $service_category_id=0;
  $update= false;
  if(isset($_POST['save'])){
    $service_category=$_POST['service_category'];
    $Description=$_POST['Description'];
    $Title=$_POST['Title'];

    mysqli_query($db,"INSERT INTO category(service_category,Description, Title) VALUES ('$service_category','$Description', '$Title')");
    $_session['message']="Category saved successfully.";
    //header('location:home.php');
  }
?>
<?php 
if (isset($_GET['edit'])){
  $id= $_GET['edit'];
  $upade=true;
  $record= mysqli_query($db,"SELECT * FROM category WHERE service_category_id = $id");
  if(count($record)==1){
    $n= mysqli_fetch_array($record);
    $service_category=$n['service_category'];
    $Description=$n['Description'];
    $Title=$n['Title'];
  }
}
?>

<!DOCTYPE html>
<html>
<head>

 <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
 <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->


   <link rel="stylesheet" href="../css/mountainn.css">
   <link rel="stylesheet" href="../css/styles1.css">
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <title></title>
</head>

<body style="backgroundd-color: white;">

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-6 mt-md-2">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add category
</button>
</div>
</div>
</div>



 <?php if(isset($_session['message'])): ?>
 <div class ='msg' style="margin-left: 23%; width: 45%;">
  <?php
  echo $_session['message'];
  unset($_session['message']);
  ?>
  
</div>
<?php endif ?>
<?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM category"); ?>
<div class="container">
<table style="margin-left: 20%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: #f5f5f5;">
    <tr>
      <th>Count</th>
      <th>Category</th>
      <th>Description</th>
        <th>Title</th>
          <th> ID </th>
            <th colspan="2">ACTION</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['service_category']; ?></td>
             <td><?php echo $row['Description']; ?></td>
              <td><?php echo $row['Title']; ?></td>
               <td><?php echo $row['service_category_id']; ?></td>
               <td><a href="EditCategory.php?edit=<?php echo $row['service_category_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="deleteCategory.php?service_category_id=<?php echo $row['service_category_id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
             </tr>
           <?php }?>
        
</table>


</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5 style="color: green;" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body"style="width: 100%; height: 50%; background: orange;">
         <form name="addservice" class="form-horizontal" enctype="multipart/form-data" method="post" action="addCategory.php" style="margin-left: none;border: 1px solid green;margin-top: 3%; width: 80%;">
        <div class="form-group">
            <label class="control-label col-md-6"> Category Name</label style="color: green;"><br>
            <div class="col-md-9">
                <input type="text" name="service_category" class="form-control" required>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"></label><br>
            <div class="col-md-9">
        <textarea rows=5 cols=10 type="text" name="Description" class="form-control" required >Description</textarea>     
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3"> Title</label><br>
            <div class="col-md-9">
                <input type="text" name="Title" class="form-control" required>
            </div>
       
      
        <div class="form-group" style="margin-left: 10%;margin-top: 2%;">
            <label class="control-label col-md-3">&nbsp;</label><br>
            <div class="col-md-9">
                <input type="submit" name="save" value="Add Category"  class="btn btn-primary"style="margin-top: 2%;">
                
            </div>
        </div>
    </form>
      </div>
      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button style="margin-top: 2%; margin-left:70%;"> 
      <div class="modal-footer">
        
      
      </div>
    </div>
  </div>
</div>


<!-- scripts -->
   <script type="text/javascript" src="../add/js/jquery.min.js"></script>
   <script type="text/javascript" src="../add/js/popper.min.js"></script>
    <script type="text/javascript" src="../add/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../add/js/mdb.min.js"></script>
    <script type="text/javascript" src="../add/js/app.js"></script>


</body>
</html>
<?php
include 'footer.php';
?>