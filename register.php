<?php
if (isset($_POST["submitButton"])) {
    
    $firstName = sanitizeFormString($_POST["firstName"]);
    echo $firstName;
    
}


function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);
    $inputText = strtolower($inputText);
    $inputText = ucfirst($inputText);

    return $inputText;


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
                <img src="assets/images/logo.png" title="Logo" alt="Logo" />
                <h3>Signup</h3>
                <span>to continue</span>



            </div>


            <form method="POST">

                <input type="text" placeholder="First name" name="firstName" required>
                <input type="text" placeholder="Last name" name="lastName" required>
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="email" placeholder="Confirm Email" name="email2" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm password" name="password2" required>
                <input type="submit" placeholder="Submit" value="Submit" name="submitButton">




            </form>

            <a href="login.php" class="signInMessage"> Already have an account? Sign in here! </a>

        </div>



    </div>




</body>

</html>