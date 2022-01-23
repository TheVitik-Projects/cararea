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
    <title>Fitcourses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/b2700bfb4b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
    <?php include("view/blocks/header.php"); ?>
    <section class="bg-gray" style="padding-top:100px">
        <div class="container goal-block">
            <h1 class="section-title">Контакти</h1>
            <div class="row">
                <div class="col text-center">
                    <i class="fas fa-map-marker-alt icon"></i>
                    <p class="icon-des">Київ,вул.фівфів, 1</p>
                </div>
                <div class="col text-center">
                    <i class="fas fa-phone icon"></i>
                    <p class="icon-des">+380123456789</p>
                </div>
                <div class="col text-center">
                    <i class="fas fa-envelope icon"></i>
                    <p class="icon-des">help@cararea.ua</p>
                </div>
            </div>
        </div>
    </section>
    <?php include("view/blocks/call.php"); ?>
    <?php include("view/blocks/footer.php"); ?>
    <script>
        document.getElementById('text').onkeyup = function () {
            document.getElementById('symbols').innerHTML = (256 - this.value.length)+"/256 символів залишилось";
        };
    </script>
</body>
</html>