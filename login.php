<?php
if (isset($_POST["submitButton"])) {
    echo "Login completed";
}



?>


<!DOCTYPE html>
<html>

<head>

    <title>Welcome to Netflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">

</head>

<body>

    <div class="signInContainer">

        <div class="column">

            <div class="header">
            <img src="assets/images/logo.png" title="Logo" alt="Logo"/>
                <h3>Signup</h3>
                <span>to continue</span>
                


            </div>


            <form method="POST">

                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" placeholder="Submit" value="Submit" name="submitButton">




            </form>

            <a href="register.php" class="signInMessage"> Get an account </a>

        </div>



    </div>




</body>

</html>