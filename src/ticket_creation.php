<?php


$servername = "localhost";
$username = "admin";
$password = "Pass1word!";
$dbname = "ticketsystem";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Tickets WHERE status='open'";
$results = mysqli_query($conn, $sql);

// Puts In Array
$tickets = array();
while ($row = mysqli_fetch_assoc($results)) {
    $tickets[] = $row;
}

$json = json_encode($tickets);
echo $json;
$conn->close();
?>