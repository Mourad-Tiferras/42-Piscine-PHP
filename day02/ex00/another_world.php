#!/bin/php
<?php
if ($argc == 1) {
    echo "\n";
}
if ($argc > 2) {
    echo "This arg is used\n";
}
if ($argc == 2) {
    $tresult = trim($argv[1]);
    $result = "";
    $tidx = 0;
    $flag = 1;

    while ($tidx < strlen($tresult)) { 
        if (ord($tresult[$tidx]) >= 33) { 
            $result = $result . $tresult[$tidx];
            $flag = 1;
        }
        else if (ord($tresult[$tidx]) <= 32 && $flag == 1) {
            $result = $result . " ";
            $flag = -1;
        }
        $tidx++; 
    }
    echo "$result";
    echo "\n";
}
?>