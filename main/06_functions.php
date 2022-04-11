<?php

function registerUser($email) {
    echo $email.' Registered';
}

registerUser("Luis");
//conventional functions
function sum($arg1 = 0, $arg2 = 0) {
    return $arg1+$arg2;
};

echo sum();
//anonimous functions
$subtract = function($n1, $n2) {
    return $n1-$n2;
};
//arrow functions
$multiply = fn($n1, $n2) => $n1 * $n2;


echo $multiply(2,2);
?>