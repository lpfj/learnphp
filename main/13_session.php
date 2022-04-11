<?php

/* 
las sesiones son la forma en la que la informacion se mantiene (en variables) entre multiples paginas 

a diferancia de las cookies esas son alojadas en el servidor
*/

session_start();

if (isset($_POST["submit"])) {
  $username = filter_input(
    INPUT_POST,
    "username",
    FILTER_SANITIZE_SPECIAL_CHARS
  );

  $password = $_POST["password"];

  if ($username == "luis" && $password == "password") {
    $_SESSION["username"] = $username;
    header("Location: /extras/dashboard.php");
  } else {
    echo "Incorrect Login";
  }
}
?>



<form action="<? echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">User Name</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="submit" name="submit">
</form>