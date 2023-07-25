<?php
// while
echo 'while<br>';
$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
// do while
echo 'do while<br>';
$y = 1;
do {
    echo "The number is: $y <br>";
    $y++;
} while ($y <= 5);
// for
echo 'for<br>';
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
// for each
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}
// break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}
// continue
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
?>