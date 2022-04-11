<?php

//Simple Array

$numbers = [1,2,3,4];

$fruits = array("apple", "orange", "pear");

//var_dump($numbers);

//Asociative Array
$colors = [
    1 => 'blue',
    4 => 'red',
    6 => 'green'
];

//var_dump($colors);

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f' 
];

//echo $hex['red'];

$person = [
    'first_name' => 'Luis',
    'last_name' => 'Pirela',
    'email' => 'lpirela@fulljaus.com'
];

//echo $person['first_name'];

$people = [
        [
            'first_name' => 'Luis',
            'last_name' => 'Pirela',
            'email' => 'lpirela@fulljaus.com'
        ],
        [
            'first_name' => 'Pepe',
            'last_name' => 'Perez',
            'email' => 'pperez@fulljaus.com'
        ],
        [
            'first_name' => 'Pedro',
            'last_name' => 'Gonzalez',
            'email' => 'pgonzalez@fulljaus.com'
        ]    
    ];

//echo ($people[1]['email']);

var_dump(json_encode($people));

?>