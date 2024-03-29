<?php
require_once ("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

$account=new Account($conn);

if(isset($_POST['submitButton'])){

    $userName=FormSanitizer::FormUsername($_POST['userName']);
    $password=FormSanitizer::FormPassword($_POST['password']);


    $success=$account->login($userName,$password);
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
      <h3>Sign In</h3>
      <span>to continue to Narng</span>
    </div>

  <form action="" method="POST">

      <?php echo $account->getError(Constants::$loginFailed);?>
    <input type="text" name="userName" placeholder="username" value="<?php getInputValue("userName"); ?>" required>

    <input type="password" name="password" placeholder="Password" required>

    <input type="submit" name="submitButton" value="Submit">

  </form>

  <a href="register.php" class="signMessage">Need an account? Sign up here!</a>
  </div>
  </div>

  <script src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous"></script>
</body>
</html>