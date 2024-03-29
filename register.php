<?php
require_once ("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

#account class
$account=new Account($conn);

if(isset($_POST['submitButton'])){

    $firstName=FormSanitizer::formString($_POST['firstName']);
    $lastName=FormSanitizer::FormString($_POST['lastName']);
    $userName=FormSanitizer::FormUsername($_POST['userName']);
    $email=FormSanitizer::FormEmail($_POST['email']);
    $email2=FormSanitizer::FormEmail($_POST['email2']);
    $password=FormSanitizer::FormPassword($_POST['password']);
    $password2=FormSanitizer::FormPassword($_POST['password2']);

    $success=$account->register($firstName,$lastName,$userName,$email,$email2,$password,$password2);
    if($success){
        # store session
        $_SESSION["userLoggedIn"]=$userName;
        header("Location: index.php");
    }
}

function getInputValue($name)
{
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
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
      <h3>Sign Up</h3>
      <span>to continue to Narng</span>
    </div>

  <form action="" method="POST">


      <?php echo $account->getError(Constants::$firstNameCharacters);?>
    <input type="text" name="firstName" placeholder="First name" value="<?php getInputValue("firstName") ;?>" required>

      <?php echo $account->getError(Constants::$lastNameCharacters);?>
    <input type="text" name="lastName" placeholder="Last name" value="<?php getInputValue("lastName") ;?>" required>

      <?php echo $account->getError(Constants::$userNameCharacters);?>
      <?php echo $account->getError(Constants::$userNameTaken);?>
    <input type="text" name="userName" placeholder="username" value="<?php getInputValue("userName") ;?>" required>

      <?php echo $account->getError(Constants::$emailsDontMatch);?>
      <?php echo $account->getError(Constants::$emailInvalid);?>
      <?php echo $account->getError(Constants::$emailTaken);?>
    <input type="email" name="email" placeholder="Email" value="<?php getInputValue("email") ;?>" required>

    <input type="email" name="email2" placeholder="Confirm email" value="<?php getInputValue("email2") ;?>" required>

      <?php echo $account->getError(Constants::$passwordsDontMatch);?>
      <?php echo $account->getError(Constants::$passwordLength);?>
    <input type="password" name="password" placeholder="Password" required>

    <input type="password" name="password2" placeholder="Confirm password" required>

    <input type="submit" name="submitButton" value="Submit">

  </form>

  <a href="login.php" class="signMessage">Already have an account? Sign in here!</a>
  </div>
  </div>

  <script src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous"></script>
</body>
</html>