<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Paper Ticket</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
</head>
<body>
    <div class="container">
        <h1 class="container-title">Internal Ticket System</h1>
        <h4 class="container-subtext">Help Desk Portal</h4>
        <div class="art3"></div>
        <div class="art2"></div>
        <div class="art1"></div>
        <div class="art6"></div>
        <div class="art4"></div>
        <div class="art5"></div>
        
        

        <div class="btn-container"> 
        <button id="login-btn">Login</button>
        <br>
        <button id="register-btn">Register</button>
        </div>
        </div>

        <!--- Registration Modal --->
        <div id="register-modal">
                <span class="close">&times;</span>
                <form id="register-form">
                    <label for="fname">First Name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last Name:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <label for="pswd">Password:</label><br>
                    <input type="text" id="pswd" name="pswd"><br>
                    <label for="verpswd">Verify Password:</label><br>
                    <input type="text" id="verpswd" name="verpswd"><br>
                    <input id="submitbtn" type="submit" value="Submit">
                    <h4 id="nomatch">Passwords Do Not Match </h4>
    
                </form> 
        </div>

        <!--- Login Modal --->
        <div id="login-modal">
            <span class="close">&times;</span>
            <form id="login-form">
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="pswd">Password:</label><br>
                <input type="text" id="pswd" name="pswd"><br>
                <input type="submit" value="Submit">

            </form> 
        </div>
    

    



    <script>

        // Makes user verify pswd if not the same then they cant submit
        function verify(pswd, verpswd) {
            if (verpswd != pswd){
                document.getElementById('nomatch').style.display = "block";
            } elseif (verpswd == pswd){
                document.getElementById('nomatch').style.display = "none";
                document.getElementById("submitbtn").enabled = true;
            }

        }
        
        // For Modals Functionality
        function modals() {
            const span = [document.getElementsByClassName('close')[0], document.getElementsByClassName('close')[1]];
            const modal = [document.getElementById('register-modal'), document.getElementById('login-modal')];
            const btn = [document.getElementById('register-btn'), document.getElementById('login-btn')];
        
            btn[0].onclick = function() {
            modal[0].style.display = "block";
            }

            btn[1].onclick = function() {
            modal[1].style.display = "block";
            }

            span[0].onclick = function() {
            modal[0].style.display = "none";
            }

            span[1].onclick = function() {
            modal[1].style.display = "none";
            }


            window.onclick = function(event) {
            if (modal.includes(event.target)) {
                modal[0].style.display = "none";
                modal[1].style.display = "none";
                }
            }
        }

    modals();
    document.getElementById("submitbtn").disabled = true;
    verify(document.getElementById("pswd").value, document.getElementById("verpswd").value);


    </script>
    
    
</body>
</html>