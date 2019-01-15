
<?php
// $file = fopen("linh.txt", "w") or die("Can't open the file.");
// fwrite($file, "Nguyen Thi Linh");
// fclose($file);
// echo readfile("linh.txt");

$file = fopen("linh.txt", "a+") or die("Can't open the file");
fwrite($file, "\nNews Website");
fclose($file);
$file = fopen("linh.txt", "a+") or die("Can't open the file");
while (!feof($file)) {
echo fgets($file) . "<br>";
}
fclose($file);