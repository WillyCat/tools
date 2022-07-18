<?php

include 'tools.class.php';

$str = 'Le bon côté';
echo 'IN: ' . $str . "\n";
echo 'OUT: ' . tools::mkSearchString($str) . "\n";

?>
