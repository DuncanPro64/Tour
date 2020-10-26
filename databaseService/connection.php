<?php
    //begin session
    //session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Geotraveller";
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //Test Connection
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
?>