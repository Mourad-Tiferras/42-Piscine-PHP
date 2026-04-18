#!/bin/php
<?php
    $idx = 0;
    if (count($argv) === 2)
    {
        $str = trim($argv[1]);
        $result = "";
        $flag = 1;
        while ($idx < strlen($str)) {
            if ($str[$idx] != " ") {
                $result .= $str[$idx];
                $flag = -1;
            }
            else if ($str[$idx] === " " && $flag === -1) {
                $result .= " ";
                $flag = 1;
            }
            $idx++;
        }
        echo "$result\n";
    }
?>