<?php
// force data type
declare(strict_types=1);
// PHP Function without Arguments
function writeMsg()
{
    echo "Hello world!<br>";
}
writeMsg();
// PHP Function Arguments
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}
familyName("Jani");

function familyName2($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}
familyName2("Hege", "1975");

function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5, 5);
function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
?>
<?php
function sum(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>
<?php
function addNumbersf(float $a, float $b): int
{
    return (int) ($a + $b);
}
echo addNumbersf(1.2, 5.2).'<br>';
// call by ref
function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>