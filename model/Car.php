<?php
namespace model;
class Car{
    protected $id;
    protected $name;
    protected $motorVolume;
    protected $transmission;
    protected $driveType;
    protected $fuelType;
    protected $fuelCons;
    protected $active;
    protected $image;
    protected $price;

    public function __construct(int $id, string $name, float $motorVolume, string $transmission, string $driveType, string $fuelType, float $fuelCons, int $active, string $image, int $price) {
        $this->id=$id;
        $this->name=$name;
        $this->motorVolume=$motorVolume;
        $this->transmission=$transmission;
        $this->driveType=$driveType;
        $this->fuelType=$fuelType;
        $this->fuelCons=$fuelCons;
        $this->active=$active;
        $this->image=$image;
        $this->price=$price;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getMotorVolume(){
        return $this->motorVolume;
    }
    public function getTransmission(){
        return $this->transmission;
    }
    public function getDriveType(){
        return $this->driveType;
    }
    public function getFuelType(){
        return $this->fuelType;
    }
    public function getFuelCons(){
        return $this->fuelCons;
    }
    public function getActive(){
        return $this->active;
    }
    public function getImage(){
        return $this->image;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setMotorVolume($motorVolume){
        $this->motorVolume=$motorVolume;
    }
    public function setTransmission($transmission){
        $this->transmission=$transmission;
    }
    public function setDriveType($driveType){
        $this->driveType=$driveType;
    }
    public function setFuelType($fuelType){
        $this->fuelType=$fuelType;
    }
    public function setFuelCons($fuelCons){
        $this->fuelCons=$fuelCons;
    }
}

?>