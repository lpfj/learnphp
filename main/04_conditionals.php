<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 18;

//if($age >= 18) {
//    echo 'Podes votar';
//} else {
//    echo 'Aun no podes votar';
//}

$t = date("H");

//if($t < 12) {
//    echo 'Buenos Dias';
//} elseif ($t < 17) {
//    echo 'Buenas Tardes';
//} else {
//    echo 'Buenas Noches';
//};

$posts = ['First Post'];

//echo !empty($posts) ? $posts[0] : "Nothing To see here";

$firtsPost = $posts[0] ?? null;

//echo $firtsPost


?>