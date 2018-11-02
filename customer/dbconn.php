
<?php

class Database {

   private  $servername ;
   private  $username ;
   private  $password ;
   private  $dbname ;
   private   $sql ;
   private $conn;

    public function connection(){

    
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "users";
        $this ->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
       
// Check connection
if ($this ->conn->connect_error) {
    die("Connection failed: " . $this -> conn->connect_error);
} 



echo "Connected successfully";



echo "<br>";
}

// Create database  ah $sql die je boven hebt geïnstantieerd

// // // Create database
//  $sql = "CREATE DATABASE users";
//  if ($conn->query($sql) === TRUE) {
//      echo "Database created successfully";
//  } else {
//      echo "Error creating database: " . $conn->error;
//  }



//  $sql = "CREATE TABLE  myguests (
//    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//      username VARCHAR(255) NOT NULL,
//      password VARCHAR(255) NOT NULL,
//      reg_date TIMESTAMP
//      )";

//  if ($conn->query($sql) === TRUE) {
//     echo "Table myguests created successfully";
//  } else {
//      echo "Error creating table: " . $conn->error; }






public function injectdb(){


 $gebruiker = $_POST['username'];
 $password = $_POST['password'];
 $sql = "INSERT INTO myguests (username, password)
 VALUES ('$gebruiker', '$password')";

if (mysqli_query($this -> conn, $sql)) {
    echo "<br> New record created successfully <br> " ; 
} else {
    echo "Error: "   . $sql . "<br>" . mysqli_error($this -> conn);


}
mysqli_close($this -> conn);




}   
}







 

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