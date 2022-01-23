<?php
namespace model;
class Order{
    protected $userId;
    protected $carId;
    protected $dateStart;
    protected $dateEnd;
    protected $price;

    public function __construct(int $userId, int $carId, string $dateStart, string $dateEnd, int $price) {
        $this->userId=$userId;
        $this->carId=$carId;
        $this->dateStart=$dateStart;
        $this->dateEnd=$dateEnd;
        $this->price=$price;
    }
    public function getUserId(){
        return $this->userId;
    }
    public function getCarId(){
        return $this->carId;
    }
    public function getDateStart(){
        return $this->dateStart;
    }
    public function getDateEnd(){
        return $this->dateEnd;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setUserId($userId){
        $this->userId=$userId;
    }
    public function setCarId($carId){
        $this->carId=$carId;
    }
    public function setDateStart($dateStart){
        $this->dateStart=$dateStart;
    }
    public function setDateEnd($dateEnd){
        $this->dateEnd=$dateEnd;
    }
    public function setPrice($price){
        $this->price=$price;
    }
}
?>