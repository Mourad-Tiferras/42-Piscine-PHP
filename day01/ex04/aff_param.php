#!/bin/php
<?php
    $idx = 0;
    while ($idx < count($argv))
    {
        if ($idx != 0) {
            echo "$argv[$idx]\n";
        }
        $idx++;
    }
?>
