<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "luis"; //String
$age = 32; // Int
$has_kids = false; // Boolean
$cash_on_hand = 0.1; //Float


//CONCATENATION

//echo "${name} is ${age}"; it can be done with numeral and curly braces

//echo $name." is ". $age; or with dots

//OPERATORS
$X = "5" + "5" ;

//var_dump($x)
//echo 10 - 5;
//echo 5 * 6;
//echo 10 / 2;
//echo 10 % 3;

define('HOST', 'localhost');
define("DB_NAME", 'localhost');

echo(HOST);



?>