<header>
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