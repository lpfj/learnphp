<?php

/*-------------Cookies------------- */

/*
    Son un mecanismo para aalmacenar informacion en un navegador remoto y poder mantener la sesion del usuario retornante, puedes mantener en estas data especifica en el navegador, y luego buscarla de vuelta cuando el usuario visite nuevamente.

*/

//Set Cookie

setcookie("name", "Luis", time() + 86499 * 30);

if (isset($_COOKIE["name"])) {
  echo $_COOKIE["name"];
}

?>
