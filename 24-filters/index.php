<!-- <table border="3">
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach (filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table> -->



<?php
// Sanitize a String
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br>";
?>




<?php
//Validate an Integer
$int = 100;

if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
echo "<br>";
?>





<?php
//Validate 0
$int = 0;
// problem
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
echo "<br>";
// solution
if (filter_var($int, FILTER_VALIDATE_INT) === 0) {
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
echo "<br>";
?>




<?php
//Validate ip
$ip = "255.0.0.1";

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo ("$ip is a valid IP address");
} else {
    echo ("$ip is not a valid IP address");
}
echo "<br>";
?>



<?php
// Sanitize and Validate an Email Address

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address");
} else {
    echo ("$email is not a valid email address");
}
echo "<br>";
?>



<?php
// check url
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo ("$url is a valid URL");
} else {
    echo ("$url is not a valid URL");
}
echo "<br>";
?>




<?php
// check number between range
$int = 2;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo ("Variable value is not within the legal range");
} else {
    echo ("Variable value is within the legal range");
}
echo "<br>";
?>

<?php
// Validate IPv6 Address
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo ("$ip is a valid IPv6 address");
} else {
    echo ("$ip is not a valid IPv6 address");
}
echo "<br>";
?>

<?php
//Remove Characters With ASCII Value > 127
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>