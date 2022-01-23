<main id="content" class="account-content">
        <section>
            <div class="container">
            <?php if($orders!=null){
                
                foreach($orders as $order){
                $car = $mc->selectCar($order->getCarId());
                $u = $mc->selectUser($order->getUserId());
                ?>
            <div class="order-block">
                <div class="row">
                    <div class="col-9">
                        <h1><i class="far fa-dot-circle text-info" style="margin-right:10px"></i><?php echo $car->getName();?></h1>
                    </div>
                    <div class="col-3">
                        <p class="c-price text-success">Зареєстрований</p>
                    </div>
                    </div>
                <hr>
                <div class="row">
                    <div class="col-10">
                <div class="c-task">
                    <p>Замовник: <?php echo $u->getLastName()." ".$u->getFirstName()." ".$u->getPaternity();?></p>
                    <p>Телефон: <?php echo $u->getPhone();?></p>
                    <p>Номер водійських прав: <?php echo $u->getLicense();?></p>
                    <p>Дата початку оренди: <?php echo $order->getDateStart();?></p>
                    <p>Дата кінця оренди: <?php echo $order->getDateEnd();?></p>
                    <?if($order->getMessage()!=null){
                        echo "<p>Повідомлення від менеджера: ".$order->getMessage()."</p>";
                    }?>
                    
                </div>
                </div>
                <div class="col-2">
                <div class="order-buttons">
                        <a class="text-success mb" data-toggle="modal" onclick="setId(<?php echo $order->getId();?>)" data-target="#confirmModal"><i class="fas fa-check-circle"></i></a>
                        <a class="text-warning" data-toggle="modal" onclick="setId(<?php echo $order->getId();?>)" data-target="#rejectModal"><i class="fas fa-times-circle"></i></a>
                        <a class="text-danger" href="delete.php?id=<?php echo $order->getId();?>"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                </div>
                <hr>
                <p class="to-pay">До сплати: <?php echo $order->getPrice();?>$</p>
                
            </div>
            
            <?php }}if($tempOrders!=null){
                
                foreach($tempOrders as $order){
                $car = $mc->selectCar($order->getCarId());
                $u = $mc->selectTempUser($order->getUserId());
                ?>
            <div class="order-block">
                <div class="row">
                    <div class="col-9">
                        <h1><i class="far fa-dot-circle text-info" style="margin-right:10px"></i><?php echo $car->getName();?></h1>
                    </div>
                    <div class="col-3">
                    <p class="c-price text-danger">Незареєстрований</p>
                    </div>
                    </div>
                <hr>
                <div class="row">
                    <div class="col-10">
                <div class="c-task">
                    <p>Замовник: <?php echo $u->getLastName()." ".$u->getFirstName()." ".$u->getPaternity();?></p>
                    <p>Телефон: <?php echo $u->getPhone();?></p>
                    <p>Номер водійських прав: <?php echo $u->getLicense();?></p>
                    <p>Дата початку оренди: <?php echo $order->getDateStart();?></p>
                    <p>Дата кінця оренди: <?php echo $order->getDateEnd();?></p>
                    <?if($order->getMessage()!=null){
                        echo "<p>Повідомлення від менеджера: ".$order->getMessage()."</p>";
                    }?>
                    
                </div>
                </div>
                <div class="col-2">
                <div class="order-buttons">
                        <a class="text-success mb" data-toggle="modal" onclick="setId(<?php echo $order->getId();?>)" data-target="#confirmModal"><i class="fas fa-check-circle"></i></a>
                        <a class="text-warning" data-toggle="modal" onclick="setId(<?php echo $order->getId();?>)" data-target="#rejectModal"><i class="fas fa-times-circle"></i></a>
                        <a class="text-danger" href="delete.php?id=<?php echo $order->getId();?>"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                </div>
                <hr>
                <p class="to-pay">До сплати: <?php echo $order->getPrice();?>$</p>
                
            </div>
        <?php }}if($orders==null && $tempOrders==null){?>
            <h1 class="article-text text-center" style="margin-top:100px;">Замовлень немає, можна відпочивати</h1>
            <img style="width:350px; display:block; margin:auto" src="images/noorders.png">
            <?php }?>
        </div>
        
        </section>

<?php if($orders!=null){include("view/blocks/modals.php");} ?>