#!/bin/php
<?php
while (1) {
    echo "Enter a number: ";
    $user_input = fgets(STDIN);
    if ($user_input == false) {
        echo "\n";
        return;
    }
    if (is_numeric($user_input) == true) {
        $user_input = (int) $user_input;
        if ($user_input % 2 == 0) {
            echo "The number $user_input is even\n";
        }
        else {
            echo "The number $user_input is odd\n";
        }
    }
    if (!is_numeric($user_input)) {
        $user_input = str_replace("\n", "", $user_input);
        echo "'$user_input' is not a number\n";
    }
    if ($user_input == "\n") {
        echo "'' is not a number\n";
    }
}
?>
