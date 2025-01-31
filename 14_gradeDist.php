<?php

$a = 30;

// grade assigning
if ($a >= 80 && $a <= 100) {
    echo " Grade A";
}
else if( $a >= 70 && $a <= 80){
    echo "Grade B";
}
else if( $a >= 50 && $a <= 70){
    echo "Grade C";
}
else if( $a >= 40 && $a <= 50){
    echo "Grade D";
}
else{
    echo "Sorry You're Fail";
}

?>