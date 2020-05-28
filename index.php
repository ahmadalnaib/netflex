<?php
require_once ("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

if(!isset($_SESSION["userLoggedIn"])){
    header("Location: register.php");
}

?>