<?php
    if(isset($_POST["submitBtn"])){
        echo "submitted successfully!";
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
                <h3>Sign In</h3>
                <span>to continue to reeceflix</span>                
            </div>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" required>                
                <input type="password" name="password" placeholder="Password" required>                
                <input type="submit" name="submitBtn" value="Submit">
            </form>
            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
        </div>
    </div>
</body>
</html>