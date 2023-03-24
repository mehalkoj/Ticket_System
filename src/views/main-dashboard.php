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
    <nav id="navbar">
    <a href="log_view.php">
        <button id="log" >Log Viewer</button>
    </a>
    </nav>

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

    <script>

        const dashboard = document.querySelector('#dashboard');
        let selectedCheckbox

        dashboard.addEventListener('click', function(event) {
            if (event.target.classList.contains('ticket-toggle')) {
                selectTicketId(event.target);
            }
        });

        // Gets Selected Ticket's ID, Gets The Selected ID's Update Box, and Makes It Allow Only One Check At A Time
        function selectTicketId(checkbox) {
            const ticket = checkbox.closest('.ticket-container');
            const updateBox = document.getElementById(ticket.id + "-UpdateBox");

            if (selectedCheckbox && selectedCheckbox !== checkbox) {
                selectedCheckbox.checked = false;
                const selectedTicket = selectedCheckbox.closest('.ticket-container');
                const selectedUpdateBox = document.getElementById(selectedTicket.id + "-UpdateBox");
                selectedUpdateBox.style.display = 'none';
            }

            if (checkbox.checked) {  
                console.log("Ticket "+ ticket.id + " - Selected");
                updateBox.style.display = 'block';
                selectedCheckbox = checkbox;
            } else {
                updateBox.style.display = 'none';
                selectedCheckbox = null;
            }
        };
        
        


    </script>

</body>
</html>