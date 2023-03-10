<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="main.js"></script>



</head>
<body>
    <h2>Send Ticket</h2>
    <form id="test-form" action="process.php" method="POST">
        <label for="user">Username:</label><br>
        <input type="text" id="user" name="user"><br>

        <label for="header">Header:</label><br>
        <input type="text" id="header" name="header"><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br>
        <input type="submit" value="Submit">
    </form>

    <section id="dashboard">
        <h1 id="dashboard-title">Tickets</h1>
        </section>

</body>
</html>