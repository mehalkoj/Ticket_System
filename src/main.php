<?php

$conn = new mysqli("localhost", "username", "password");

class sqlconnection {
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "username", "password"); 
    }

    function establish() {
        if ($this->conn->connect_error) {
            die('Connection failed: ' . $this->conn->connect_error);
        }
        echo "Connected Succesfully!";
        
    }

}


class registration {
    public $user;
    public $pswd;
    public $verpswd;
    public $email;
    public $conn;

    function __construct($user, $pswd, $verpswd, $email, $conn)
    {
        $this->user = $user;
        $this->pswd = $pswd;
        $this->verpswd = $verpswd;
        $this->email = $email;
        $this->conn = $conn;
    }

    function prepStatements() {

    }

    function checkdb() {
        #if ($conn == True) {

        }
    }
#}

$test = new sqlconnection();
$test1 = new registration('meh', 'asdas', 'asfgds', 'gdfgfd', $conn);
echo "Here is" . $conn;



?>