<?php


class Register {
    public $fname;
    public $lname;
    public $email;
    public $pswd;
    public $verpswd;
    
    function __construct($fname, $lname, $email, $pswd, $verpswd) {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->email = $email;
            $this->pswd = $pswd;
            $this->verpswd = $verpswd;
        }

    function getConn() {
        $conn = new mysqli("localhost", "register", "Password", "Accounts");

        if ($conn->connection_aborted) {
            die("Connection failed: " . $conn->connection_aborted);
        }
        echo "Connected Successfully";
        return $conn;
    }

    function createUser($conn) {
        // Prepares Statement
        $grab = "SELECT email FROM Users WHERE email = ?";
        $stmt = $conn->prepare($grab);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Checks if email is already registerd
        if ($result->num_rows > 0) {
            echo "Email Is Already In Use";
        } else {
            $submit = "INSERT INTO Users (fname, lname, email, pswd) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($submit);
            $stmt->bind_param("ssss", $this->fname, $this->lname, $this->email, $this->pswd);
            $stmt->execute();
            echo "Account Created for " . $this->email;
        }
    }
}

function registerAccount() {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $verpswd = $_POST['verpswd'];

    $register = new Register($fname, $lname, $email, $pswd, $verpswd);
    $register.getConn();
    $register.createUser($conn);

}


?>