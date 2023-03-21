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

    <script>
        const dashboard = document.querySelector('#dashboard');

        dashboard.addEventListener('click', function(event) {
            if (event.target.classList.contains('ticket-toggle')) {
                ticketUpdateLink(event.target);
            }
        });


        function ticketUpdateLink(checkbox) {
            if (checkbox.checked) {
                const ticket = checkbox.closest('.ticket-container');
                console.log("Ticket "+ ticket.id + " - Selected");
            };


            //let ticketUUID = ticketId.split('-')[0];
            //let updateBoxUUID = updateBoxId.split('-')[0];
        };
/*            if (ticketUUID.startsWith(updateBoxUUID)){
                updateBox.style.marginRight = '200px';
                updateBox.style.marginTop = '200px';
                updateBox.style.border = '10px';
                updateBox.style.display = 'block';
            };
        }; */
        // Checks boxes looped so only one is selected
        
        


    </script>

</body>
</html>