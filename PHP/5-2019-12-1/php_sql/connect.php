<?php
// $servername = "localhost";
// $username = "root";
// $password = "12345";

//  try {

//     $conn = new PDO("mysql:host=$servername;dbname=aptech_php_linh",$username,$password);
//     $conn -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
$servername = "localhost:3307";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";




?>
