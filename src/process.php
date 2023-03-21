<?php
$servername = "localhost";
$username = "admin";
$password = "Pass1word!";
$dbname = "ticketsystem";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


$user = $_POST['user'];
$header = $_POST['header'];
$subject = $_POST['subject'];
$status = 'open';


//$sql = "INSERT INTO Tickets (employee, header, subject)
//VALUES ('$user', '$header', '$subject')";

$sql = $conn->prepare('INSERT INTO Tickets (header, subject, employee, status, issue, dept, office, email, priority, assigned) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    if ($sql === false) {
        die("ERROR preparing statment: " . $conn->error);
    }

        $sql->bind_param('ssssssssss', $header, $subject, $user, $status, NULL, NULL, NULL, NULL, NULL, NULL);
        $sql->execute();

if ($sql->affected_rows > 0) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$inserted_id = $conn->insert_id;

$result = $conn->query("SELECT * FROM Tickets WHERE id = $inserted_id");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Encapsulate the row data in JSON
    $json_data = json_encode($row);

} else {
    echo "No data found";
}
$conn->close();

return $json_data;



?>