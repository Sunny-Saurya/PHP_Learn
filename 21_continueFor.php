<?php
$number = array("sunny", '20', 'sunny@gmail.com', "kumar");
for( $i = 0; $i < count( $number ); $i++ ){
    if( $number[$i] == "sunny"){
        continue;
        }
        echo "". $number[$i] ."<br>";
}
?>

<?php
$number = array("sunny", "20", "sunny@gmial","kumar ") ;
$i = 0;
while( $i < count( $number ) ){
    if( $number[$i] == "sunny"){
        continue;
    }
    echo "". $number[$i] ."<br>";
    $i++;
}
?>