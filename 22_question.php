<?php
$marks = 97;
if($marks > 90){
    echo"Grade A";
}
else if( $marks > 80 && $marks < 89){
    echo "Grade B";
}
else if( $marks > 70&& $marks < 79){
    echo "Grade C";
}
else if( $marks > 60&& $marks < 69){
    echo "Grade D";
}
else{
    echo "Sorry, You are fail :(";
}

$purchase = 5200;
if($purchase > 5000){
    echo (5200 * 20) / 100;
}
else if( $purchase > 2000 && $purchase < 5000){
    echo ($purchase * 10)/100;
}
else{
    echo "Sorry no discount";
}