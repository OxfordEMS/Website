<?php

$mo = $_GET['mo'];
$d = $_GET['d'];

$h = $_GET['h'];
$m = $_GET['m'];

echo('{<br/>"time": "' . strtotime($mo . '/' . $d . ' ' . $h . ':' . $m) . '"<br/>}');