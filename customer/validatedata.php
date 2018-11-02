<?php


//validatie klasse maken
class Validate{

    private $username; 
    private $password; 


    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function validate (){ 
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($this->username)) {
            echo "naam is niet ingevuld";
            return false;
        }
        else {
     
          echo  $this->username . '<br>'  ;   
        }
        if (empty($this->password)) {
           echo "wachtwoord is niet ingevuld";
           return false;
        }
        else {
            echo  $this->password    ;   
        }
      return true;  
    }
}
}
?>