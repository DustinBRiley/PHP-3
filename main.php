<?php 

/* NOTE: to see your output in the console,
   follow your output with a new line "\n"

   2nd NOTE: This is only for Repl.
   Do not make a habit of adding the new line character
   in your PHP projects.
*/

/* 01: create a class named Pizza that has two 
properties: size and type.
*/
class Pizza{
  public $size;
  public $type;
  private $slices;

  function set_size($size){
    $this->size = $size;
    switch ($size) {
      case "small": $this->slices = 6; break;
      case "medium": $this->slices = 8; break;
      case "large": $this->slices = 10; break;
    }
  }
  function set_type($type){
    $this->type = $type;
  }
  function get_size(){
    return $this->size;
  }
  function get_type(){
    return $this->type;
  }
  function get_slices(){
    return $this->slices;
  }
  function description(){
    return "My pizza is a " . $this->size . " " . $this->type . " and has " . $this->slices . " slices!";
  }
  function serve(){
    return "Here's your " . $this->type . " pizza!";
  }
}

/* 02: Add set_size and set_type methods to Pizza. */



/* 03: Add get_size and get_type methods to Pizza. */



/* 04: Create a $pizza object from the Pizza class. */
$pizza = new Pizza;

/* 05: Set the $pizza size to "medium" */
$pizza->set_size("medium");

/* 06: Set the $pizza type to "Pepperoni". */
$pizza->set_type("Pepperoni");

/* 06: Call the get_size method and echo the 
returned value. */
echo $pizza->get_size() . "\n";

/* 07: Call the get_type method and echo the 
returned value. */
echo $pizza->get_type() . "\n";

/* 08: Add a method to Pizza named serve. 
The serve method should output: 
"Here's your {type} pizza!" 
Replace {type} with the value of the type 
property.*/


/* 09: Call the serve method and echo the 
returned value. */
echo $pizza->serve() . "\n";

/* 09: Add a private property named 
slices to the Pizza class. 
Add a method named get_slices  
to the Pizza class. 
The method should return the number 
of slices.
A small pizza has 6 slices. 
A medium pizza has 8 slices.
A large pizza has 10 slices.
Set the value of the private slices 
property when the size is set.  
Call the get_slices method and 
echo the returned value. 
*/
echo $pizza->get_slices() . "\n";

/* 10: Add a method named description 
to the Pizza class. 
The method should return: 
"My pizza is a {size} {type} and 
has {slices} slices!" 
Replace {slices} with the number of slices.
Replace {size} and {type} with their values.  

Create a $myPizza object. 
Set the size to "large". 
Set the type to "Supreme". 
Call the description method for $myPizza 
and output the returned value. 
*/
$myPizza = new Pizza;
$myPizza->set_size("large");
$myPizza->set_type("Supreme");
echo $myPizza->description();