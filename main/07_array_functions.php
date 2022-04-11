<?php
    $fruits = ['apple', 'oranges', 'pear'];

    //Get Length
    //echo count($fruits);

    //Search Array
    //var_dump(in_array('apple', $fruits))

    //Add to array
    $fruits[]= 'grape';
    array_push($fruits, 'melon', 'strawberry');
    //print_r($fruits);

    //remove from array
    array_pop($fruits); //removes "strawberry"
    array_shift($fruits); //removes "apple"
    unset($fruits[2]); //removes specific items, also removes the index
    
    //divide array
    $chunked_array = array_chunk($fruits, 2);
    //print_r($chunked_array);
    
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    //join arrays

    //via function
    $arr3 = array_merge($arr1, $arr2);
    //by array deconstruction
    $arr4 = [...$arr1, ...$arr2]; 
    //print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana' ];

    $c = array_combine($a, $b);

    $keys = array_keys($c);
    
    $flipped = array_flip($c);

    $numbers = range(1, 20);


    //MAP===========================================

    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    
    //print_r($newNumbers);


    //FILTER=========================================

    $lessThan10 = array_filter($numbers, fn($number)=> $number <= 10);

    //print_r($lessThan10);

    //REDUCE=========================================
    

    $sum = array_reduce($numbers, fn($carry, $number) =>  $carry + $number);

    var_dump($sum);

    
?> 