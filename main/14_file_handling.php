<?php

$file = "extras/users.txt";

if (file_exists($file)) {
  //echo readfile($file);3
  $handle = fopen($file, "r");
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, "w");
  $contents = "jesus" . PHP_EOL . "maria" . PHP_EOL . "jose";
  fwrite($handle, $contents);
  fclose($handle);
}
?>
