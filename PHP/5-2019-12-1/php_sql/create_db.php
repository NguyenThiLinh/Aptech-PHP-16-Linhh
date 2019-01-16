<?php
include 'connect.php';
$sql = "create database myDB";
if(mysqli_query($conn,$sql)){ 
    echo "database create successfully";
}else{
    echo "Error creating database: ".$conn->error;
}
$conn->close();?>