<?php
require_once('../cararea.ua/model/Car.php');
use \model\Car;
include('../cararea.ua/controller/CarController.php');
if($cars!=null){
?>
<section>
    <div class="container">
        <div class="row">
        <?php foreach($cars as $car){?>
                
                <div class="col car">
                    <h3 class="car-name"><?echo $car->getName();?></h3>
                    <p class="car-type"><?echo $car->getMotorVolume()." м<sup>3</sup>. | ".$car->getFuelType()." | ".$car->getFuelCons()."л/100км | ".$car->getTransmission()." | ".$car->getDriveType();?></p>
                    <img class="car-img" src="<?echo $car->getImage();?>"> 
                    <div style="display:flex">
                        <h5 class="car-price"><?echo $car->getPrice();?>$/день</h5>
                        <a href="order.php?car=<? echo $car->getId();?>" class="car-button">Орендувати</a>
                    </div>
                </div>
        <?php }}else{?>
            <h1 class="main-text text-center mt-4">Нічого не знайдено</h1><?php }?>
    </div>
</section>