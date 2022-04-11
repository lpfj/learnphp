<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methoid is a function that belongs to  class
  //setter
  function set_name($name)
  {
    $this->name = $name;
  }

  //getter
  function get_name()
  {
    return $this->name;
  }
}

$user1 = new User("luis", "lp@mail.com", 12234);
$user2 = new User("pepe", "pepe@mail.com", 1234);

var_dump($user1);

//inheritance
class employee extends user

?>
