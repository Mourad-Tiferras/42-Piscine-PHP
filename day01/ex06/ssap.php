#!/bin/php
<?php
    include("../ex03/ft_split.php");
    if ($argc > 1) {
        $idx = 1;
        $str = "";
        while ($idx < $argc) {
            $str .= $argv[$idx];
            $str .= " ";
            $idx++;
        }
        $result = ft_split($str);
        $idx = 0;
        while ($idx < count($result)) {
            echo "$result[$idx]\n";
            $idx++;
        }
    }
?>