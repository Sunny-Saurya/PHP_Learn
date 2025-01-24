<?php
define("WISHES","Good Moves");
echo WISHES;
echo constant("WISHES"). '<br /><br /><br /><br /><br />';

// const array 

define("courses",["PHP", "HTML", "PDF", "CSS"]);
echo courses[0], courses[1] ."<br>";

// __LINE__
echo "The Current Line Nnumbered is ". __LINE__ . "."."<br>";
// __FILE__
echo "THe current file is ". __FILE__."." ."<br>"."<br>"."<br>"."<br>";

// __DIR__

echo "The current directory is ". __DIR__."."."<br>";

// __FUNCTION__

function welcome() {
    echo "Welcome to our website!"."<br>";
}
welcome();
?>