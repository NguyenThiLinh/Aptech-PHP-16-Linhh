<?php
echo "<a href=\"./\">BACK</a>";
/* 5. --- CONSTANT ---
 *
 * Using define(name, value, [optional: case-insensitive = false]).
 *
 * Can not change anyway.
 *
 * NOTE :
 * Should be naming by upper case and using syntax snake_case.
 *
 */
echo "<h1>5. CONSTANT</h1>";
/*
 * EXERCISE 1 : Set your name is constant and display it, try to change it :).
 *
 */

 /* SUGGESTION :*/
  
define("my_name", "Nguyễn Thị Linh", true);
define("my_name1", "Linh Bee", true);
/*
echo my_name;
echo "<br>" . MY_NAME1;
echo "<br>";
*/
function myTest(){
    echo my_name;
    echo "<br>";
    echo MY_NAME1;
}
myTest();
 
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";