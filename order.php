<?php
define('_ROOT_', dirname(dirname(__FILE__)));
require_once(_ROOT_.'/cararea.ua/model/User.php');
use \model\User;
session_start();
    if(isset($_SESSION['user'])){
        $user=unserialize($_SESSION['user']);
    }
include(_ROOT_.'/cararea.ua/controller/OrderController.php');
if($car==null){
    $exists=false;
}
else{
    $exists=true;
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
    <script src="js/bootstrap.min.js"></script>
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
                        <?if(isset($user)){?>
                        <li><a class="link button" href="account.php" >Мій кабінет</a></li>
                        <?}else{?>
                        <li><a class="link" href="signin.php" >Вхід</a></li>
                        <li><a class="link button" href="signup.php">Реєстрація</a></li>
                        <?}?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="wrapper fadeInDown">
            <div class="col-12 text-center">
                <h2 class="main-text fadeIn first">Замовлення</h2>
            </div>
              <div id="formContent" style="max-width:1024px" class="container">
                <div class="row">
                    <div class="col-lg">         
                        <form id="form" class="mt-4">
                            <?if(!isset($user)){?>
                            <input type="text" class="text fadeIn first" name="firstname" placeholder="Ім'я" style="margin-top:30px;" required>
                            <input type="text" class="text fadeIn first" name="lastname" placeholder="Прізвище" required>
                            <input type="text" class="text fadeIn first" name="paternity" placeholder="По-батькові" required>
                            <input type="number" class="text fadeIn first" name="phone" placeholder="Номер телефону" required min=0 length=10>
                            <input type="text" class="text fadeIn first" name="license" placeholder="Номер прав" required>
                            <?}else{
                                if($user->getPaternity()==null){?>
                                    <input type="text" class="text fadeIn first" name="paternity" placeholder="По-батькові" required>
                                <?}if($user->getLicense()==null){?>
                                    <input type="text" class="text fadeIn first" name="license" placeholder="Номер прав" required>
                            <?}}?>
                            <input onchange="changePrice()" class="text fadeIn first" type="datetime-local" id="first_date" name="first_date" style="padding:10px" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" placeholder="dd.mm.yy --:--">
                            <input onchange="changePrice()" class="text fadeIn first" type="datetime-local" id="second_date" name="second_date" style="padding:10px" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" placeholder="dd.mm.yy --:--">
                            <input type="number" class="text fadeIn first" id="price" name="price" placeholder="Ціна" required readonly>
                            <input type="hidden" id="dayprice" value="<? echo $car->getPrice();?>">
                            <input type="hidden" name="car" value="<? echo $_GET['car'];?>">
                            <input class="submit fadeIn second" type="button" class="fadeIn third" value="Замовити" id="submit">
                        </form>
                        <span id="message"></span>
                    </div>
                    <div class="col-lg text-center mt-4">
                        <h3><? echo $car->getName();?></h3>
                        <img width="400px" src="<? echo $car->getImage();?>">
                        <h3><? echo $car->getPrice();?>$/день</h3>
                    </div>
                </div>
                <div id="formFooter">
                    <a href="cars.php">До автопарку</a>
                  
                </div>
            
              </div>
            </div>
            </section>
            <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
                <i class="fas fa-check"></i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Все чудово!</h4>	
				<p>Ваше замовлення успішно створено.</p>
				<a href="account.php" class="btn btn-success"><span>До списку замовлень</span><i class="fas fa-arrow-right text-light"></i></a>
			</div>
		</div>
	</div>
</div>     
        </main>
            <?php include("view/blocks/footer.php"); ?>
            <script>
                $(document).ready(function() {
                    let today = new Date();
                    let month = today.getMonth()+1;
                    let day = today.getDate();
                    let hour = today.getHours();
                    let minute = today.getMinutes();
                    let day2=day+1;
                    if(month<10){
                        month='0'+month;
                    }
                    if(day<10){
                        day='0'+day;
                    }
                    if(day2<10){
                        day2='0'+day2;
                    }
                    if(hour<10){
                        hour='0'+hour;
                    }
                    if(minute<10){
                        minute='0'+minute;
                    }
                    let date = today.getFullYear()+'-'+month+'-'+day;
                    let time = hour + ":" + minute;
                    $("#first_date").attr({
                        "min": date+'T'+time,
                        "value": date+'T'+time
                    });
                    date = today.getFullYear()+'-'+month+'-'+day2;
                    $("#second_date").attr({
                        "min": date+'T'+time,
                    });
                });
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
                  required: true,
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
                  required: true,
                  minlength: 9,
                  maxlength: 9,
                },                   
                                second_date:{
                                  required: true,
                                },
                             price:{
                                  required: true,
                                  number:true,
                                },
                             },
                             messages:{
                              paternity:{
                                required: "Це поле обов'язкове для заповнення",
                                minlength: "Довжина повинна бути більше 2 символів",
                                maxlength: "Довжина повинна бути менше 24 символів",
                              },
                              license:{
                                required: "Це поле обов'язкове для заповнення",
                                minlength: "Неправильний номер. Приклад: ABC123456",
                                maxlength: "Неправильний номер. Приклад: ABC123456",
                              },
                              second_date:{
                                required: "Це поле обов'язкове для заповнення",
                              },
                              price:{
                                required: "Помилка при обчисленні",
                                number: "Помилка при обчисленні"
                              },
                            }
                          });
                    if ($('#form').valid()){
                    let fdata=$("#form").serializeArray();
                        $.ajax({
                            type: 'POST',
                            url: 'controller/OrderController.php',
                            data: fdata,
                            success: function(code) {
                                if(code==1){
                                    $('#myModal').modal('show');
                                }
                                
                            },
                            error: function(text) {
                                alert(text);
                            }
                        });
                    }
                });
    
    function changePrice() {
        let day_1 = Date.parse($("#first_date").val()),
        day_2 = Date.parse($("#second_date").val());
        $("#price").val((day_2 - day_1) / (60 * 60 * 24 * 1000)*$("#dayprice").val());
    };
</script>
</body>
</html>