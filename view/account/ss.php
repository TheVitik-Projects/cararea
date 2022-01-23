    <main id="content" class="account-content">
        <section>
            <div class="container">
            <h1 class="section-title">Профіль</h1>
            <div class="row">
                <div class="col-4">
                    <img width="250px" height="250px" src="images/<?php echo $user['avatar'];?>.png">
                </div>
                <div class="col text-center">
                    <form action="../tools/setdata.php" method="POST">
                    <table>
                    <tr>
                        <td>Ім'я</td>
                        <td><input class="profile-input" type="text" value="<?php echo $user['name'];?>" maxlength=24 name="lastname"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    <tr>
                        <td>Прізвище</td>
                        <td><input class="profile-input" type="text" value="<?php echo $user['lastname'];?>" maxlength=24 name="firstname"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    <tr>
                        <td>По-батькові</td>
                        <td><input class="profile-input" type="text" value="<?php echo $user['fathername'];?>" maxlength=24 name="fathername"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    <tr>
                        <td>Номер водійських прав</td>
                        <td>123123</td>
                    </tr>
                    <tr>
                        <td>Номер телефону</td>
                        <td><input class="profile-input" type="tel" value="<?php echo $user['phone'];?>" maxlength=10 name="number"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    <tr>
                        <td>Дата реєстрації</td>
                        <td><?php echo $user['date'];?></td>
                    </tr>
                    </table><br>
                    <table>
                    <tr>
                        <td width=43%>Старий пароль</td>
                        <td><input class="profile-input" type="password" name="oldpassword"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    <tr>
                        <td>Новий пароль</td>
                        <td><input class="profile-input" type="password" name="newpassword"><i class="fas fa-user-edit"></i></td>
                    </tr>
                    </table>
                    <input type="submit" class="submit" value="Зберегти">
                    </form>
                </div>
            </div>
        </div>
        </section>
</main>