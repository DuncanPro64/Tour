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
<form>
<input type ="hidden" name="service_category_id" value="<?php echo $service_category_id ?>">
<label class="control-label col-md-3"> Category </label><br>
<input type ="text" name="service_category" value="<?php echo $service_category ?>">
<label class="control-label col-md-3"> Description</label><br>
<input type ="textarea" name="Description" value="<?php echo $Description ?>">
<label class="control-label col-md-3">Title</label><br>
<input type ="text" name="Title" value="<?php echo $Title ?>">
</form>

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
  
</div>
<?php endif ?>
<?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM category"); ?>
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
               <td><a href="index.php?edit=<?php echo $row['service_category_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="server.php?del=<?php echo $row['service_category_id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
             </tr>
           <?php }?>
        }
</table>
<div class="col-md-5 col-md-offset-2">
    <form name="addservice" class="form-horizontal" enctype="multipart/form-data" method="post" action="addCategory.php" style="margin-left: 50%;border: 1px solid #bbbbbb;margin-top: 3%;">
        <div class="form-group">
            <label class="control-label col-md-3"> Category Name</label><br>
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
</body>
</html>
<?php
include 'footer.php';
?>