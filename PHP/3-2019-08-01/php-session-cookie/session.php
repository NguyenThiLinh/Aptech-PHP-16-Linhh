<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
$_SESSION["myName"] = "Nguyen Thi Linh";
  $_SESSION["myProject"] = "News Website";
  print_r($_SESSION);
?>

</body>
</html>