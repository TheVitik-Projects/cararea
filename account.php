<?php
define('_ROOT_', dirname(dirname(__FILE__)));
require_once(_ROOT_.'/cararea.ua/model/User.php');
use \model\User;
session_start();
if(isset($_SESSION['user'])){
    $user=unserialize($_SESSION['user']);
}
else{
    header("Location: signin.php");
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarArea</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/b2700bfb4b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
</head>
<body>
<header class="hide">
        <div class="container">
            <div class="row">
            <div class="col-2">
            <a href="index.php" class="logo-text">CARAREA</a>
            </div>
            <div class="col">
                <label alt="menu" for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
		        <input type="checkbox" id="toggle-1" alt="menu">
                <nav class="nav-menu">
                    <ul>
                        <li><a class="link" href="index.php">Головна</a></li>
                        <li><a class="link" href="cars.php">Автопарк</a></li>
                        <li><a class="link" href="terms.php">Умови оренди</a></li>
                        <li><a class="link" href="contacts.php">Контакти</a></li>
                        <li><a class="link button" href="account.php" ><?echo $user->getFirstname()." ".$user->getLastname();?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<?include("view/blocks/navbar.php");?>
<?include(_ROOT_.'/cararea.ua/controller/UserController.php');?>
<?php include("view/blocks/footer.php"); ?>