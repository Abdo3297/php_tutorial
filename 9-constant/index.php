<?php
// const
define("GREETING", "Welcome to W3Schools.com!", );
echo GREETING;
// const array 
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
// const as a global scope
function myTest() {
    echo GREETING;
}

myTest();
?>