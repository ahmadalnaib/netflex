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
  <form action="" method="POST">
    
    <input type="text" name="firstName" placeholder="First name" required>

    <input type="text" name="lastName" placeholder="Last name" required>

    <input type="text" name="userName" placeholder="User name" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="email" name="email2" placeholder="Confirm email" required>

    <input type="password" name="password" placeholder="Password" required>

    <input type="password" name="password2" placeholder="Confirm password" required>

    <input type="submit" name="submitButton" value="Submit">


  </form>
  </div>
  </div>
</body>
</html>