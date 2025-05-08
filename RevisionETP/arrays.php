<?php
// indexed array
$arr = array("Amit", "Rohan", "Shubham", "Saurabh", "Ravi", "Rahul", "Rohit", "Ramesh", "Rajesh", "Ram");

// echo "<pre>";
print_r($arr);
echo "first element of array is : ". $arr[0];

// associative array
$arr1 = array("Amit" => "Amit is a good",
        "Sunny" => "Sunny is a good",
        "Rohan" => "Rohan is a good",
        "Shubham" => "Shubham is a good",
);
echo "The value of Sunny is :". $arr1["Sunny"];
echo "<br>";

foreach($arr as $yoyo){
    echo $yoyo . "<br>";
}
echo "<br>";
for($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . "<br>";
}

// multidimensional array
$multidim = array(
    array("Amit", "Rohan", "Shubham"),
    array("Saurabh", "Ravi", "Rahul"),
    array("Rohit", "Ramesh", "Rajesh"),
    array("Ram", "Shyam", "Mohan")
);
echo "<br>";
foreach($multidim as $value){
    foreach($value as $yoyo){
        echo $yoyo . "      " ;

    }
    echo "<br>";
}


// to add an element in array
array_push($arr, "Honey Singh");

// to remove an element from array
array_pop($arr); // remove last element from array
array_shift($arr); // remove first element from array
array_splice($arr, 2, 1); // remove element from index 2 and remove 1 element from array


// multidimensional assosiative array


$result = array(
    array(
        "name" => "Manoj",
        "cgpa" => 7.8,
        "status" => "pass"
    ),
    array(
        "name" => "Aditya",
        "cgpa" => 8.5,
        "status" => "pass"
    ),
    array(
        "name" => "Anuj",
        "cgpa" => 4.9,
        "status" => "fail"
    )
);
echo $result[0]["name"]. "----CGPA is: " . $result[0]["cgpa"]." and his status is ".$result[0]["status"]."<br>";
echo $result[1]["name"]. "----CGPA is: " . $result[1]["cgpa"]." and his status is ".$result[1]["status"]."<br>";
echo $result[2]["name"]. "----CGPA is: "  . $result[2]["cgpa"]." and his status is ".$result[2]["status"];
?>
