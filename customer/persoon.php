<?php


class Person {
public $name;
protected $age;
private $phone;


function __construct($name, $age, $phone){
    $this->name = $name;
    $this->age = $age;
    $this->phone = $phone;
 }


public function talk() {
    echo "hallo ik ben $this->name, mijn leeftijd is $this->age en dit is mijn telefoonnummer $this->phone <br/>";

 }

 protected function walk() {
     return "ik loop ";
 }

 protected function run() {

    return "ik ren";
 }


}




class Tom extends Person {

public function talk() {
    echo "hallo ik ben een childclass <br/>";
}
public function walk() {
    echo parent :: walk() .  "en " .  parent:: run(); 
}

}






$person = new Person("Dara", 38, "0987655555");
$person-> talk();

$tom = new Tom ("Mike", 20, "098786686");
$tom-> talk();
$tom-> walk();






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>