<main id="content" class="account-content">
        <section>
            <div class="container">
            <?php if($orders!=null){?>
                <h1 class="section-title">Історія замовлень</h1>
	        <?php }else{?>
	            <h1 class="section-title">У вас немає замовлень</h1>
	        <?php }?>
            <?php foreach($orders as $order){
                $car = $this->selectCar($order->getCarId());
                if($order->getStatus()==1){
                    $icon="far fa-dot-circle text-info";
                }
                elseif($order->getStatus()==2){
                    $icon="far fa-check-circle text-success";
                }
                else{
                    $icon="far fa-times-circle text-danger";
                }
                ?>
            <div class="order-block">
                <div class="row">
                    <div class="col-9">
                        <h1><i class="<?echo $icon;?>" style="margin-right:10px"></i><?echo $car->getName();?></h1>
                    </div>
                    <div class="col-3">
                        <p class="c-price"><?echo $car->getPrice();?>$/день</p>
                    </div>
                    </div>
                <hr>
                <div class="c-task">
                    <p>Дата початку оренди: <?echo $order->getDateStart();?></p>
                    <p>Дата кінця оренди: <?echo $order->getDateEnd();?></p>
                    <?if($order->getMessage()!=null){
                        echo "<p>Повідомлення від менеджера: ".$order->getMessage()."</p>";
                    }?>
                    <p>
                </div>
                <hr>
                <p class="to-pay">До сплати: <?echo $order->getPrice();?>$</p>
            </div>
            
        
        <? }?>
        </div>
        </section>
                </main>