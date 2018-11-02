<?php


class User {
public $username;
private $password;    



function __construct($username, $password){
    $this->name = $username;
    $this->password = $password;
}


}

class Database {

   private  $servername ;
   private  $username ;
   private  $password ;
   private  $dbname ;


  

    protected function connection(){

    
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "mydb";

   

   $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;

    }

}




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo "<br>";

