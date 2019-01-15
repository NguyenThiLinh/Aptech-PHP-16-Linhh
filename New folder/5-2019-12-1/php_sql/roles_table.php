<?php
include 'connect.php';
 $dbname = "myDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "create table Roles (
    id int auto_increment primary key,
    name varchar(30) not null)";

    if(mysqli_query($conn,$sql)){
        echo "Table Roles created successfully";
    }
    else {
        echo "erro creating table : " . mysqli_erro($conn);
    }
    mysqli_close($conn);

?>