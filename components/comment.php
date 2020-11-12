<?php
session_start();
// connect to database
  $db = mysqli_connect('localhost', 'root', '', 'Geotraveller');
  //initilalize variables
  $email="";
  $comment="";
  $subject="";
  $momment_id=0;
  
  $update= false;
  if(isset($_POST['save'])){
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $comment=$_POST['comment'];
    

    mysqli_query($db,"INSERT INTO comments(email, subject,comment) VALUES ('$email','$subject','$comment' )");
    $_session['message']="Comment posted successfully.";
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
</div>
<?php endif ?>
<?php 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM comments"); ?>
<table style="margin-left: 20%;font-size: 9px;font-family: sans-serif;color: green;">
  <thead style="background-color: #f5f5f5;">
    <tr>
      <th>Count</th>
      <th>email</th>
      <th>subject</th>
      <th>comment</th>
      <th> ID </th>
       <th colspan="2">ACTION</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['email']; ?></td>
             <td><?php echo $row['subject']; ?></td>
              <td><?php echo $row['comment']; ?></td>
               <td><?php echo $row['comment_id']; ?></td>
               <td><a href="index.php?edit=<?php echo $row['comment_id'];?>" class= "edit-btn"> <img src="../public/images/icon_content_small.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
               <td><a href="server.php?del=<?php echo $row['comment_id'];?>" class= "edit-btn"> <img src="../public/images/action_delete.gif" alt="image" class="photo" style="width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;"></a></td>
             </tr>
           <?php }?>
        }
</table>
<div class="col-md-5 col-md-offset-2">
    <form name="addcomment" class="form-horizontal" enctype="multipart/form-data" method="post" action="comment.php" style="margin-left: 50%;border: 1px solid grey;margin-top: 3%;">
        <div class="form-group">
            <label class="control-label col-md-3"> email</label><br>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control" required>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"></label><br>
            <div class="col-md-9">
        <textarea rows=5 cols=10 type="text" name="subject" class="form-control" required >subject</textarea>     
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3"> comment</label><br>
            <div class="col-md-9">
                <input type="text" name="comment" class="form-control" required>
            </div>
       
      
        <div class="form-group" style="margin-left: 10%;margin-top: 2%;">
            <label class="control-label col-md-3">&nbsp;</label><br>
            <div class="col-md-9">
                <input type="submit" name="save" value="Comment"  class="btn btn-primary"style="margin-top: 2%;"> 
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
include 'footer.php';
?>