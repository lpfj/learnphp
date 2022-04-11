<?php

//Loops 

//For

//for(acumulador, condicional, incrementador)
//for($x = 0; $x <= 10; $x++){
//    echo($x);
//}

$x = 1;

$posts = [ 'Post1', 'Post2', 'Post3', 'Post4', 'Post5', 'Post6'];

//foreach($posts as $index => $post){
//    echo $index+1 . '-' . $post . '<br>';
//}

$person = [
        'first_name' => 'Pedro',
        'last_name' => 'Gonzalez',
        'email' => 'pgonzalez@fulljaus.com'
    ];

foreach($person as $key => $data) {
    echO $key . ' - ' . $data.'<br>' ;
}


?>