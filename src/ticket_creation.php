<?php


    function generateUUID() {
        $rdmString = uniqid('', true);
        $uuid = md5($randomString);
        return $uuid;
    }

Class Ticket {

    public $fullName;
    public $email;
    public $uuid;
    public $title;
    public $subject;

    function __construct($fullName, $email, $uuid, $title, $subject) {
        $this->name = $fullName;
        $this->email = $email;
        $this->uuid = $uuid;
        $this->title = $title;
        $this->subject = $subject;
    }

    /* Creates connection to sql database, saves info from the submitted ticket to the table,
        also will need to send this data to the front end after it has been send to the database
    */
    function process(){
        $conn = new mysqli("ip", "ticketCreation", "password");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully";

          $stmt = $conn->prepare("INSERT INTO Tickets (fullname, email, uuid, title, problem, status) VALUES(?, ?, ?, ?, ?, ?");
          $stmt->bind_param("ssssss", $this->name, $this->email, $this->uuid, $this->title, $this->title, $this->subject, "open");
          $stmt->execute();
          echo "New Ticket Added To Table";
          $stmt->close();
          $conn->close();

        // Inserts Data to sql ticket table
        // Return ticket process

}


}




/* Decalred here will be the ticketCreation object. It will run the process method.
   Then it will be encoded by json so that the MAIN.js can grab this data to make
   the ticket object on the front end
*/

/* To create the object it will take the form data from the end users end, it creates the object
the object uses the parameters to search for the users account in the database, pulls their data,
once all data is mapped it is then queried into the Tickets table, then encoded in json and sent
to the main dashboard. */

function main(){
    $new = Ticket();
    
}


?>