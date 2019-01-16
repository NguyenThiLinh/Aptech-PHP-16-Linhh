<?php
include './connect.php';
$dbname = "myDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
$sql="select  users.id ,  users.name , users.role,  roles.name as name_role
from  users   join  roles on  users.role =  roles.id ";



if(mysqli_query($conn,$sql)){
    // echo "Selected successfully";
    
$result =$conn ->query($sql);
if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "id: ". $row["id"]." - User.Name: " .$row["name"]. "- Role name: ". $row["id"]. "<br>";}
}
else {
    echo "0 result";
}
}
else {
    echo "erro Selecting table : " . mysqli_erro($conn);
}
mysqli_close($conn);

