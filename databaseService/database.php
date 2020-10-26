<?php
$servername = "localhost";
$username = "root";
$password = "";
//create connection
$conn = new mysqli($servername, $username, $password);
//check connection
if ($conn->connect_error) {
	die(" Connection failed :" . $conn->connect_error);
}
//create Database
$sql = "CREATE DATABASE Geotraveller";
if($conn->query($sql) === TRUE) {
	echo " 0. Database created successfully <br/>";
	$conn->select_db("GeoTraveller");

	  $sql_services = " CREATE TABLE IF NOT EXISTS services( service_name VARCHAR(50) NOT NULL, service_description VARCHAR(250) NOT NULL, service_quantity VARCHAR(50) NOT NULL, service_Id VARCHAR(250)  PRIMARY KEY,image VARCHAR(250), service_quality VARCHAR(50), service_category VARCHAR(250), service_category_id VARCHAR(50) , status VARCHAR(50),    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP )";
	 
	 if( $conn->query($sql_services) === TRUE){
	 echo " 1. Table services created successfully <br/>";
	 } else { echo " Error creating table :" . $conn->error;
	 }
	  $sql_category  = " CREATE TABLE IF NOT EXISTS category(category_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, Category VARCHAR(15),created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
	 if($conn->query($sql_category) === TRUE){
	 echo " 2. Table category created successfuly <br/>";
	 }else{
	 echo " Error creating table :" . $conn->error;
		 }
		  $sql_address  = " CREATE TABLE IF NOT EXISTS address(address_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, adress VARCHAR(15), Longitude VARCHAR(50) NOT NULL, Latitude VARCHAR(50) NOT NULL)";
	 if($conn->query($sql_address) === TRUE){
	 echo " 3. Table Address created successfuly <br/>";
	 }else{
	 echo " Error creating table :" . $conn->error;
		 }
		  $sql_Orders  = " CREATE TABLE IF NOT EXISTS Orders( OrderId INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, ItemOdered VARCHAR(50) NOT NULL, quantityBooked VARCHAR(50) NOT NULL,service_Id VARCHAR(50),created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP )";
	 if($conn->query($sql_Orders) === TRUE){
	 echo " 4. Table Orders created successfuly <br/>";
	 }else{
	 echo " Error creating table :" . $conn->error;
		 }
		  $sql_transactions  = " CREATE TABLE IF NOT EXISTS transactions( transactionId VARCHAR(50) PRIMARY KEY, itemBooked VARCHAR(50) NOT NULL, quantityBooked VARCHAR(50) NOT NULL, totalAmountpaid VARCHAR(50) NOT NULL, service_Id VARCHAR(50) NOT NULL,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
	 if($conn->query($sql_transactions) === TRUE){
	 echo " 5. Table transactions created successfuly <br/>";
	 }else{
	 echo " Error creating table :" . $conn->error;
		 }
		  $sql_comments  = " CREATE TABLE IF NOT EXISTS comments( email VARCHAR(50) PRIMARY KEY, comment VARCHAR(250) NOT NULL,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
	 if($conn->query($sql_comments) === TRUE){
	 echo " 6. Table comments created successfuly <br/>";
	 }else{
	 echo " Error creating table :" . $conn->error;
		 }
	 $sql_users  = " CREATE TABLE IF NOT EXISTS users( firstName VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL , address VARCHAR(50) NOT NULL, PhoneNumber VARCHAR(50) NOT NULL, email VARCHAR(50) PRIMARY KEY, userName VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, image VARCHAR(250) NOT NULL, user_type VARCHAR(50),created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP )";
	 if($conn->query($sql_users) === TRUE){
	 echo " 7. Table users created successfuly <br/>";
	 echo " //You will have to upade the record in table 'category' 
	 and 'adress ' manually by filling in arbitrary values for the moment being. 
	 Thank you.
	 To login as an administrator , go modify the user table by assigning the user_type with '@admin' instead of 'user'.
	

	 //REFRESH THE PAGE TO START.";
	 }else{
	 echo " Error creating table :" . $conn->error;
	 }
	// else{
	// echo " Error creating database :" . conn->error;
		
	}
	 
	 $conn->close();


?>