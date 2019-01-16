<?php
echo "<a href=\"./\">BACK</a>";
/* 10. --- FUNCTIONS ---
 *
 * A function name can start with a letter or underscore (not a number).
 *
 * function myFunction($argument = 'default'){
 *      code to be executed;
 * }
 *
 * NOTE :
 * Should be using action for function name like : displayResult(), showImage() ...
 * Should be naming by camelCase
 *
 */
echo "<h1>10. FUNCTIONS</h1>";
/*
 * EXERCISE 1 : Using function to show your name and the project which you wanna do, default is Name and News Website
 *
 */
/*
 * SUGGESTION : */
 
 function displayInformation($name = 'Linh', $project = 'News Website')
  {
  echo "Your name is $name and your project is $project";
  }
  $myName = 'Nguyễn Thị Linh';
  $myProject = 'E-commerce Website';
  displayInformation($myName, $myProject);
  echo "<br>";
  displayInformation();
 

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
function Information($name, $project){
    echo "My name is $name and my project is $project";
}
Information("Det", "Cosmetics Web");
echo "<br>";
$myName = "Linh";
$myProject = "News Web";
Information($myName,$myProject);
echo "<br>";
function setNumber($number = 10){
    echo "The number : $number <br>";
}
setNumber(234);
setNumber();
setNumber(22);
echo "<br>";