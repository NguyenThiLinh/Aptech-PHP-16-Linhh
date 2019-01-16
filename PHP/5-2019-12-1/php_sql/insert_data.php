<?php
include 'connect.php';

$dbname = "myDB";

$conn = mysqli_connect($servername,$username,$password,$dbname);
//inser table roles
// $sql = "insert into  roles (id,name) 
// values  ('1','hoc'), 
//         ('2','choi') ";


//insert table user
$sql = "insert into users(id,name,email,password,role) values ('1','linh','nguyenlynh@gmail','linh1234','2'),
        ('2','lan','nguyenlanh@gmail','lan1234','1') ,
        ('3','hoa','nguyenhoa@gmail','lan1234','1'),
        ('4','nam','nguyennam@gmail','lan1234','2') ";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
