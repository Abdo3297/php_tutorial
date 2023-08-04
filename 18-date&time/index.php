<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
?>
&copy; 2010-<?php echo date("Y");?>
<?php
echo '<br>';
echo "The time is " . date("h:i:sa");
echo '<br>';
?>
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>