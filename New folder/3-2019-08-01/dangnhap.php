<?php
 echo $_GET['thu-dien-tu'] ."<br>";
 echo $_GET['mat-khau'] . "<br>";

 if($_GET['thu-dien-tu']==='a@gmail.com' && $_GET['mat-khau']==='12345'){
     echo "Dang nhap thanh cong";

 }
 else{
    echo "Dang nhap that bai";
 } 
 