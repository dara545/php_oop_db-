
<?php

include'dbconn.php';
if(isset($_POST['submit']));



require_once( 'validatedata.php' );






?>










class User {
public $username;
private $password;    



function __construct($username, $password){
    $this->name = $username;
    $this->password = $password;
}


}



// // Create database
// $sql = "CREATE DATABASE mydb";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }





class Database {

private  $servername ;
private  $username ;
private  $password ;
private  $dbname ;




 public function createdatabase(){

 
     $this->servername = "localhost";
     $this->username = "root";
     $this->password = "";
     $this->dbname = "mydb";




?>






