<?php

include_once('lib/Functions.php');

$string = "Welcome's To's The's Microsoft's Office's";

echo $string . "</br>";

$substr="'";
$attachment="\\";

$newString = str_replace($substr, $attachment.$substr, $string);

echo $newString;
echo "<br />";

echo strtotime("now");
echo "<br />";
echo date("m/d/y h:i A", strtotime("now"));
echo "<br />";
echo "<br />";
echo "<br />";
