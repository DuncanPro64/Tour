<?php
session_start();
 require "../classes/Crud.php";
include "../databaseService/connection.php";
$crud = new Crud();
if(isset($_POST['Submit'])) {    
    $service_name = $_POST['service_name'];
    $service_description = $_POST['service_description'];
    $service_quantity = $_POST['service_quantity']; 
    $service_quality=$_POST['service_quality'];
    $service_category =$_POST['service_category'];
    $service_category_id= $_POST['service_category_id'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];        
     //selecting servicetype from the category table based on type name selected.
    $service_type_id_query = "SELECT * FROM category where service_category='$service_category'";
    $category = $crud->getData($service_type_id_query);
    foreach ($category as $type) {
           $service_type_id = $type['service_category_id'] ;
        }                        
         move_uploaded_file($image_tmp,"C:\\wamp\\www\\tourProj-master\\public\\images\\$image");   
        //insert data to database
$user=$crud->execute("INSERT INTO `services`(service_name,service_description,service_quantity, image, service_category_id) VALUES('$service_name','$service_description','$service_quantity','$image','$service_quality',$service_category_id') ");
   var_dump($user);
        //display success message
if($user){
        echo "<font color='green'>Service added successfully.";
       }
}
?>
<?php
    $service_query = "SELECT * FROM category";
    $service_types = $crud->getData($service_query);                                      
?>                    
<div class="col-md-5 col-md-offset-2">
    <form name="addservice" class="form-horizontal" enctype="multipart/form-data" method="post" action="addService.php">
        <div class="form-group">
            <label class="control-label col-md-3"> Name</label>
            <div class="col-md-9">
                <input type="text" name="service_name" class="form-control" required>
            </div>

             <div class="form-group">
            <label class="control-label col-md-3"></label>
            <div class="col-md-9">
        <textarea rows=5 cols=10 type="text" name="service_description" class="form-control" required >Service description</textarea>     
            </div>
        </div>
           <div class="form-group">
            <label class="control-label col-md-3"> Service  Quantity</label>
            <div class="col-md-9">
                <input type="text" name="service_quantity" class="form-control" required>
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-md-3"> Service Quality</label>
            <div class="col-md-9">
                <input type="text" name="service_quality" class="form-control" required>
            </div>
        </div>
        
         <!-- <div class="form-group">
            <label class="control-label col-md-3">User Type</label>
            <div class="col-md-9">
                <input type="text" name="userType" class="form-control" required>
            </div>
        </div> -->
         <div class="form-group">
            <label class="control-label col-md-3">select service Type</label>
            <div class="col-md-9">
                <select name="service_category" class="form-control" >
                      
                        <?php foreach($service_types as $type):?>
                       <option><?php echo $type['service_category'] ?></option>
                       <?php endforeach; ?>
                   </select>
            
        </div>
         </div>
        <div class="form-group">
            <label class="control-label col-md-3"> Service Profile</label>
            <div class="col-md-9">
                <input type="file" name="image" class="form-control" >
            </div>
        </div>
      
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Submit" value="Add Service" onclick="return(validate())" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>