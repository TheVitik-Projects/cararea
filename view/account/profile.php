<main id="content" class="account-content">
        <section>
            <div class="container">
            <h1 class="section-title">Профіль</h1>
            <div class="row">
                <div class="col-4">
                    <img width="250px" height="250px" src="images/unknown.png">
                </div>
                <div class="col text-center">
                    <form action="../controller/UserController.php" method="POST" id="form">
                    <table>
                    <tr>
                        <td>Ім'я</td>
                        <td><input class="profile-input" type="text" value="<?php echo $this->user->getFirstname();?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Прізвище</td>
                        <td><input class="profile-input" type="text" value="<?php echo $this->user->getLastname();?>" disabled></td>
                    </tr>
                    <tr>
                        <td>По-батькові</td>
                        <td><input class="profile-input" type="text" value="<?php echo $this->user->getPaternity(); if($this->user->getPaternity()!=null){ $p="disabled";}?>" maxlength=24 name="paternity" pattern="[А-Яа-я]{2,}" <?php echo $p ?? "";?>><?php if(!isset($p)){?><i class="fas fa-user-edit"></i><?}?></td>
                    </tr>
                    <tr>
                        <td>Номер водійських прав</td>
                        <td><input class="profile-input" type="text" value="<?php echo $this->user->getLicense(); if($this->user->getLicense()!=null){ $l="disabled";}?>" maxlength=24 name="license" pattern="[А-Я]{3}[1-9]{6}" <?php echo $l ?? "";?>><?php if(!isset($l)){?><i class="fas fa-user-edit"></i><?}?></td>
                    </tr>
                    <tr>
                        <td>Номер телефону</td>
                        <td><input class="profile-input" type="tel" value="<?php echo $this->user->getPhone();?>" disabled></td>
                    </tr>
                    </table><br>
                    <table>
                    <tr>
                        <td width=48%>Новий пароль</td>
                        <td><input class="profile-input" type="password" name="password"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    </table>
                    <input type="button" class="submit" id="submit" value="Зберегти">
                    </form>
                </div>
            </div>
        </section>
                </main>
                <script>
$("#submit").click(function(){
    if ($('#form').valid()){
    let form = $('#form').serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/UserController.php',
            data: form,
            success: function(text){
                location.reload();
            },
            error: function() {
                alert('Error!');
            }
        });
    }
});
    </script>