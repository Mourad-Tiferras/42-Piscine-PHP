#!/bin/php
<?php
function ft_split($str) {
    if ($str === "" || $str === null) {
        return [];
    }
    $result = [];
    $word = "";
    $idx = 0;
    $str_idx = 0;
    $flag = 1;
    $str = trim($str);
    while ($str_idx < strlen($str)) {
        if ($str[$str_idx] != " ") {
            $word = $word . $str[$str_idx];
            $flag = -1;
        }
        else if ($str[$str_idx] === " " && $flag === -1) {
            $result[$idx] = $word;
            $idx++;
            $word = "";
            $flag = 1;
        }
        $str_idx++;
    }
    if (strlen($word) != 0)
    {
        $result[$idx] = $word;
    }
    sort($result);
    return ($result);
}

?>
