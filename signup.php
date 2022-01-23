<?php
session_start();
    if(isset($_SESSION['user'])){
        header("Location: account.php?page=active");
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
            <h2 class="main-text fadeIn first">Реєстрація</h2>
          </div>
        <div id="formContent">
            <form id="form">
              <input type="text" class="text fadeIn first" name="firstname" placeholder="Ім'я" style="margin-top:30px;" required>
              <input type="text" class="text fadeIn first" name="lastname" placeholder="Прізвище" required>
              <input type="text" class="text fadeIn first" name="paternity" placeholder="По-батькові">
              <input type="number" class="text fadeIn first" name="phone" placeholder="Номер телефону" required min=0 length=10>
              <input type="text" class="text fadeIn first" name="license" placeholder="Номер прав">
              <input type="password" class="text fadeIn second" id="password" name="password" placeholder="Пароль">
              <input type="password" class="text fadeIn second" id="repassword" name="repassword" placeholder="Повторіть пароль">
              <input class="submit" type="button" class="fadeIn third" value="Зареєструватись" id="submit">
          </form>
          <span id="message"></span>
          <div id="formFooter">
              <a href="signin.php">Я вже маю акаунт</a>
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
                firstname:{
                  required: true,
                  minlength: 2,
                  maxlength: 24,
                },
                lastname:{
                  required: true,
                  minlength: 2,
                  maxlength: 24,
                },
                paternity:{
                  required: false,
                  minlength: 2,
                  maxlength: 24,
                },
                phone:{
                  required: true,
                  minlength: 10,
                  maxlength: 10,
                  number: true,
                },
                license:{
                  required: false,
                  minlength: 9,
                  maxlength: 9,
                },
                password:{
                  required: true,
                  minlength: 8,
                  maxlength: 24,
                },
                repassword:{
                  required: true,
                  equalTo: '[name="password"]',
                },
             },
             messages:{
              firstname:{
                required: "Це поле обов'язкове для заповнення",
                minlength: "Довжина повинна бути більше 2 символів",
                maxlength: "Довжина повинна бути менше 24 символів",
              },
              lastname:{
                required: "Це поле обов'язкове для заповнення",
                minlength: "Довжина повинна бути більше 2 символів",
                maxlength: "Довжина повинна бути менше 24 символів",
              },
              paternity:{
                required: "Це поле обов'язкове для заповнення",
                minlength: "Довжина повинна бути більше 2 символів",
                maxlength: "Довжина повинна бути менше 24 символів",
              },
              phone:{
                required: "Це поле обов'язкове для заповнення",
                minlength: "Неправильний номер. Приклад: 0987654321",
                maxlength: "Неправильний номер. Приклад: 0987654321",
              },
              license:{
                required: "Це поле обов'язкове для заповнення",
                minlength: "Неправильний номер. Приклад: ABC123456",
                maxlength: "Неправильний номер. Приклад: ABC123456",
              },
              password:{
                required: "Це поле обов'язкове для заповнення",
                minlength: "Довжина пароля повинна бути більше 8 символів",
                maxlength: "Довжина пароля повинна бути менше 24 символів",
              },
              repassword:{
                required: "Це поле обов'язкове для заповнення",
                equalTo: "Паролі не співпадають",
              },
            }
          });
    if ($('#form').valid()){
    let fdata=$("#form").serializeArray()
        $.ajax({
            type: 'POST',
            url: 'controller/AccountController.php',
            data: fdata,
            success: function(text) {
                $("#message").html(text);
                
            },
            error: function(text) {
                alert(text);
            }
        });
    }
});
</script>
</body>
</html>