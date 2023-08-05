<?php
// 1- json encode
######################################################
// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
// echo json_encode($age);
######################################################
// $cars = array("Volvo", "BMW", "Toyota");
// echo json_encode($cars);
######################################################


// 2- json encode
// This example shows how to access the values from a PHP object:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter . ' ';
echo $obj->Ben . ' ';
echo $obj->Joe . ' ';

// This example shows how to access the values from a PHP associative array:
$jsonobj2 = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj2, true);
echo $arr["Peter"] . ' ';
echo $arr["Ben"] . ' ';
echo $arr["Joe"] . ' ';

// loop on data
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
