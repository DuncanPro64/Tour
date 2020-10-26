<?php
require_once "../databaseService/connection.php";
$q = $_REQUEST['q'];
$erremail = "";
$erruserName = "";
$errors   = array();


//lookup email in db
$check = "select lastname, firstName, userName from users where email='$q'";
$results = $conn->query("$check");
if($results->num_rows > 0){
    $erremail="A user with this email address already exists!";
   
 
echo $erremail;
 
}

$check2 = "select email, firstName, userName from users where userName='$q'";
$results = $conn->query("$check2");
if($results->num_rows > 0){
    $erruserName="A user with this userName  already exists!";
}

echo $erruserName;



?>