<?php


class Register {
    public $fname;
    public $lname;
    public $email;
    public $pswd;
    
    function __construct($fname, $lname, $email, $pswd) {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->email = $email;
            $this->pswd = $pswd;
        }

    function getConn() {
        $conn = new mysqli("localhost", "register", "Password", "Accounts");

        if ($conn->connection_aborted) {
            die("Connection failed: " . $conn->connection_aborted);
        }
        echo "Connected Successfully";
        return $conn;
    }

    function checkUser() {
        $grab = "SELECT email FROM Users";
        $result = $conn->query($grab);

        if ($result == $this->email) {
            echo "Email Is Already In Use";
        }
        else {
            $submit = "INSERT INTO MyGuests (fname, lname, email, pswd) VALUES (?, ?, ?)";
        }


    }






}

function registerAccount() {
    $fname = ;
    $lname = ;
    $email = ;
    $pswd = ;

    $register = new Register($fname, $lname, $email, $pswd);
    $register.getConn();
    $register.checkUser();

}


?>