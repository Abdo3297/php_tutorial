<?php
    // int
    echo PHP_INT_MAX;
    echo '<br>';
    echo PHP_INT_MIN;
    echo '<br>';
    echo PHP_INT_SIZE;
    echo '<br>';
    // check int
    $x = 5 ;
    echo is_int($x);
    echo is_integer($x);
    echo is_long($x);
    echo '<br>';
    // float
    echo PHP_FLOAT_MAX;
    echo '<br>';
    echo PHP_FLOAT_MIN;
    echo '<br>';
    echo PHP_FLOAT_DIG;
    echo '<br>';
    echo PHP_FLOAT_EPSILON;
    echo '<br>';
    // check float
    $x = 5.6 ;
    echo is_float($x);
    echo is_double($x);
    echo '<br>';
    // string as a numeric
    $x = 5985;
    var_dump(is_numeric($x));
    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    $x = "Hello";
    var_dump(is_numeric($x));

    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
?>