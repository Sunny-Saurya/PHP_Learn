<?php
$con=new mysqli("localhost","root","","test");
if($con){
    echo "Connected";
}
else{
    echo "Not connected";
}
?>