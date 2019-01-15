<?php
echo "<a href=\"./\">BACK</a>";
/* 8. --- CONDITIONS ---
 *
 * Conditional statements are used to perform different actions based on different conditions.
 *
 * Some common conditions in PHP :
 * if ... else ...
 * switch
 *
 */
echo "<h1>8. CONDITIONS</h1>";
/*
 * EXERCISE 1 : Checking $a = 9 is smaller or larger $b = 15 and display your result, using if else.
 *
 */
/*
 * SUGGESTION :*/
  $a = 9;
  $b = 15;
  if ($a > $b) {
  echo "$a larger than $b";
  } else {
  echo "$a smaller than $b";
  }
 
 
/*
 * EXERCISE 2 : Display the meaning of acronym of some programming language  , using switch
 */
/*
 * SUGGESTION :*/
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";
$a = 5;
$b = 8;
if( $a < $b){
    echo "a nhỏ hơn b";
}elseif( $a > $b ){
    echo "a lớn hơn b";
}else{
    echo "a bằng b";
}

 
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";