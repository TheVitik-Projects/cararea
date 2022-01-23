<?php
define('_ROOT_', dirname(dirname(__FILE__)));
require_once(_ROOT_.'/cararea.ua/model/User.php');
use \model\User;
session_start();
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
        if($user->getType()!=0){
            header("Location: manager.php");
        }
        else{
            header("Location: account.php?page=active");
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
                        <li><a class="link" href="signin.php" >Вхід</a></li>
                        <li><a class="link button" href="signup.php">Реєстрація</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="wrapper fadeInDown">
            <div class="col-12 text-center">
                <h2 class="main-text fadeIn first">Вхід</h2>
            </div>
              <div id="formContent">
                <form id="form">
                  <input class="text fadeIn first" type="number" name="phone" placeholder="Номер телефону" style="margin-top:30px;" required min=0 length=10>
                  <input class="text fadeIn first" type="password" name="password" placeholder="Пароль" required>
                  <input class="submit fadeIn second" type="button" value="Увійти" id="submit">
                </form>
                <span id="message"></span>
                <div id="formFooter">
                    <a href="signup.php">Реєстрація</a>
                  
                </div>
            
              </div>
            </div>
            </section>
        </main>
            <?php include("view/blocks/footer.php"); ?>
<script>
$("#submit").click(function(){
    let form = $(document).find("#form");
    form.validate({
             rules:{
                phone:{
                  required: true,
                  minlength: 10,
                  maxlength: 10,
                  number: true,
                },
                password:{
                  required: true,
                  minlength: 8,
                  maxlength: 24,
                },
             },
             messages:{
               phone:{
                 required: "Це поле обов'язкове для заповнення",
                 minlength: "Неправильний номер. Приклад: 0987654321",
                 maxlength: "Неправильний номер. Приклад: 0987654321",
             },
               password:{
               required: "Це поле обов'язкове для заповнення",
               minlength: "Довжина пароля повинна бути більше 8 символів",
               maxlength: "Довжина пароля повинна бути менше 24 символів",
               },
             }
          });
    if ($('#form').valid()){
    let fdata=$("#form").serializeArray()
        $.ajax({
            type: 'POST',
            url: 'controller/AccountController.php',
            data: fdata,
            success: function(text){
                if(text=="201"){
                    location.href = "account.php";
                }
                else if(text=="202"){
                    location.href = "manager.php";
                }
                else{
                    $("#message").html(text);
                }
                
            },
            error: function() {
                alert('Error!');
            }
        });
    }
});
</script>
</body>
</html>