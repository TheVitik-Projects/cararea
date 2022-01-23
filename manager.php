<?php
define('_ROOT_', dirname(dirname(__FILE__)));
require_once(_ROOT_.'/cararea.ua/model/User.php');
use \model\User;
session_start();
if(isset($_SESSION['user'])){
    $user=unserialize($_SESSION['user']);
    if($user->getType()!=1){
        header("Location: account.php?page=active");
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/b2700bfb4b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
</head>
<body>
<header class="hide bg-warning">
        <div class="container">
            <div class="row">
            <div class="col-2">
            <a href="index.php" class="logo-text" style="color:white">CARAREA</a>
            </div>
            <div class="col">
                <label alt="menu" for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
		        <input type="checkbox" id="toggle-1" alt="menu">
                <nav class="nav-menu">
                    <ul>
                        <li><a class="link btn btn-light" href="controller/ManagerController.php?action=exit" title="Вихід з акаунту"><?echo $user->getFirstname()." ".$user->getLastname();?><i class="fas fa-sign-out-alt ml-2"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php include(_ROOT_.'/cararea.ua/controller/ManagerController.php');?>
    <?php include("view/manager/orders.php"); ?>
<?php include("view/blocks/footer.php"); ?>
<script>
    let orderId=0;
    function setId(id){
        $("#confirmId").html("#"+id);
        $("#rejectId").html("#"+id);
        orderId=id;
    }
    function confirm(){
        let message = $("#confirmMessage").val();
        $.ajax({
            type: 'POST',
            url: 'controller/ManagerController.php',
            data: {'action':'confirm','id':orderId,'message':message},
            success: function(){
                location.reload();
            }
        });
    }
    
    function reject(){
        let message = $("#rejectMessage");
        if(message.val()==""){
            $("#alert").html("Ви не ввели повідомлення.")
        }
        else{
        let text=message.val();
        $.ajax({
            type: 'POST',
            url: 'controller/ManagerController.php',
            data: {'action':'reject','id':orderId,'message':text},
            success: function(){
                location.reload();
            }
        });
    }
}
</script>
</body>
</html>