<?php

if(isset($_POST['submitButton'])){
  echo "Form was submitting";
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>Netflex || Welcome</title>
</head>
<body>
  <div class="signInContainer">

  <div class="column">

    <div class="header">
    <i class="fas fa-video fa-2x">
      <span class="ar">نارنج</span>
    </i>
      <h3>Sign In</h3>
      <span>to continue to Narng</span>
    </div>

  <form action="" method="POST">
    

    <input type="text" name="userName" placeholder="User name" required>


    <input type="password" name="password" placeholder="Password" required>


    <input type="submit" name="submitButton" value="Submit">

  </form>

  <a href="register.php" class="signMessage">Need an account? Sign up here!</a>
  </div>
  </div>

  <script src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous"></script>
</body>
</html>