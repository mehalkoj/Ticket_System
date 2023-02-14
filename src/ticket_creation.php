<?php


    function generateUUID() {
        $rdmString = uniqid('', true);
        $uuid = md5($randomString);
        return $uuid;
    }

Class TicketCreation {

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
        // Insert new sql connection
        // Inserts Data to sql ticket table
        // Return ticket process

}


}




/* Decalred here will be the ticketCreation object. It will run the process method.
   Then it will be encoded by json so that the MAIN.js can grab this data to make
   the ticket object on the front end
*/




?>