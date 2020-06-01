<?php
$a = 3;
$b = &$a; // $b is a reference to $a

echo $a;
echo "</br>";
echo $b;
echo "</br>";

$a = 4;
echo $a;
echo "</br>";
echo $b;
?>