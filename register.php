<?php
# reference to the class
require_once("includes/classes/FormSanitizer.php");

    if(isset($_POST["submitBtn"])){
        # Access the sanitizer class
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]); 
        # :: represents the static function property
        
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

        echo $firstName."<br>", $lastName."<br>", $username."<br>", $email."<br>", $email2."<br>", $password."<br>", $password2."<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Reeceflix</title>
    <link rel="stylesheet" type="text/css"
    href="assets/style/style.css">
</head>
<body>
    <div class="signInContainer">
        <div class="column">

            <div class="header">
                <img src="assets/images/logo.png" title="Logo" alt="reeceflix.png">
                <h3>Sign Up</h3>
                <span>to continue to reeceflix</span>                
            </div>

            <form action="" method="POST">
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="lastName" placeholder="Last Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="email2" placeholder="Confirm Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password2" placeholder="Confirm Password" required>
                <input type="submit" name="submitBtn" value="Submit">
            </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
       
        </div>
    </div>
</body>
</html>