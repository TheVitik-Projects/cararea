<?php
define('_ROOT_', dirname(dirname(__FILE__)));
require_once(_ROOT_.'/cararea.ua/model/User.php');
use \model\User;
session_start();
if(isset($_SESSION['user'])){
    $user=unserialize($_SESSION['user']);
    if($user->getType()!=0){
        header("Location: manager.php");
    }
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php include("view/blocks/header.php"); ?>
    <?php include("view/blocks/index_content.php"); ?>
    <?php include("view/blocks/footer.php"); ?>
</body>
</html>