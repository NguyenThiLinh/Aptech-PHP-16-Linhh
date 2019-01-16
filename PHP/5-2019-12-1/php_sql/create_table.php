<?php
include 'connect.php';
 $dbname = "myDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);

 
//create table user
$sql = "create table Users (
    id int not null primary key auto_increment,
name varchar(50),
email varchar(255) UNIQUE,
password varchar(20),
role  int not null default '1'  ,
 FOREIGN KEY (role) REFERENCES roles(id))";


// $sql = "drop table roles";
 //create table roles
//  $sql = "Create table roles ( 
//     id int  not null primary key auto_increment ,
//     name varchar(50) UNIQUE
//     )";

    if(mysqli_query($conn,$sql)){
        echo "Table Users created successfully";
    }
    else {
        echo "erro creating table : " . mysqli_erro($conn);
    }
    mysqli_close($conn);

?>