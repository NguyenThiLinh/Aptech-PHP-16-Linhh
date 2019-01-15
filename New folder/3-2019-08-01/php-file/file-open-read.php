<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("test.txt", "r") or die("Can't open file.");
while (!feof($file)) {
echo fgets($file) . "<br>";
}
fclose($file);
?>

</body>
</html>