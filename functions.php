<?php
$num_password = $_GET['number'] ?? '';
$letters = $_GET['letters'] ?? '';
$numbers = $_GET['numbers'] ?? '';
$special = $_GET['special'] ?? '';


// $arr_numbers = str_split('1234567890');
// $arr_special = str_split('*#@%&£_-!?');
$arr_letters_int = str_split('abcdefghilmnopqrstuvzxkjywABCDEFGHILMNOPQRSTUVZXKJWY1234567890*#@%&£_-!?');

$arr_letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$arr_numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

$arr_special = ["!", "@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];

$arr_password = '';

if (isset($_GET['button'])) {
    if ($letters) {
        $arr_password .= generate_password($arr_letters, $num_password);
    }

    if ($numbers) {
        $arr_password .= generate_password($arr_numbers, $num_password);
    };

    if ($special) {
        $arr_password .= generate_password($arr_special, $num_password);
    } else {
        $arr_password = generate_password($arr_letters_int, $num_password);
    }
}


function generate_password($array, $user_number)
{
    $generated_password = '';
    for ($i = 0; $i < $user_number; $i++) {
        $character = rand(0, count($array) - 1);
        $generated_password .= $array[$character];
    }
    return $generated_password;
}
