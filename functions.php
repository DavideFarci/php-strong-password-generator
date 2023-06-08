<?php
$num_password = $_GET['number'] ?? '';

function generate_password($user_number)
{
    $arr_password = str_split("abcdefghilmnopqrstuvzxkjywABCDEFGHILMNOPQRSTUVZXKJWY1234567890*#@%&£_-!?");
    shuffle($arr_password);
    $generated_password = '';
    foreach ($arr_password as $pass) {
        if (strlen($generated_password) < $user_number) {
            $generated_password .= $pass;
        }
    }
    return $generated_password;
}
