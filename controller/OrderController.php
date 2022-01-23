<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/model/User.php');
require_once(__ROOT__.'/model/Order.php');
require_once(__ROOT__.'/model/Car.php');
use \model\User;
use \model\Order;
use \model\Car;
class OrderController{
    private $mysql;
    public function post($data,$userId){
        include_once(__ROOT__.'/tools/db.php');
        $this->mysql=$mysql;
        $fdate=str_replace("T"," ",$data['first_date']);
        $sdate=str_replace("T"," ",$data['second_date']);
        if(count($data)==4){
            $order = new Order($userId,$data['car'],$fdate,$sdate,$data['price']);
            $this->order($order);
            echo 1;
        }
        elseif(count($data)==9){
            $id=$this->getIdByName($data['firstname'],$data['lastname']);
            if($id==null){
                $this->createUser($data['firstname'],$data['lastname'],$data['paternity'],$data['phone'],$data['license']);
                $id=$this->getIdByName($data['firstname'],$data['lastname']);
            }
            $order = new Order($id,$data['car'],$fdate,$sdate,$data['price']);
            $this->order($order,1);
            echo 1;
        }
        elseif(isset($data['paternity'])){
            $this->updatePaternity($userId,$data['paternity']);
            $order = new Order($userId,$data['car'],$fdate,$sdate,$data['price']);
            $this->order($order);
            echo 1;
        }
        elseif(isset($data['license'])){
            $this->updateLicense($userId,$data['license']);
            $order = new Order($userId,$data['car'],$fdate,$sdate,$data['price']);
            $this->order($order);
            echo 1;
        }
    }
    public function get($data){
        include_once(__ROOT__.'/tools/db.php');
        $this->mysql=$mysql;
        return $this->selectCar($data['car']);
    }
    private function order($order,$temp=0){
        $sql = "INSERT INTO orders(userId,carId,firstDate,secondDate,price,temp) VALUES(?,?,?,?,?,?)";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("iissii",$order->getUserId(),$order->getCarId(),$order->getDateStart(),$order->getDateEnd(),$order->getPrice(),$temp);
        $stmt->execute();
    }
    private function selectCar($carId){
        $sql = "SELECT * FROM cars WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $carId);
        $stmt->execute();
        $result = $stmt->get_result();
        $scar = $result->fetch_assoc();
        if($scar==null){
            return $scar;
        }
        $car = new Car($scar['id'],$scar['name'],$scar['motorVolume'],$scar['transmission'],$scar['driveType'],$scar['fuelType'],$scar['fuelCons'],$scar['active'],$scar['image'],$scar['price']);
        return $car;
    }
    private function getIdByName($firstname,$lastname){
        $sql = "SELECT id FROM tempusers WHERE firstname=? AND lastname=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("ss", $firstname,$lastname);
        $stmt->execute();
        $result = $stmt->get_result();
        $temp=$result->fetch_assoc();
        return $temp['id']  ?? null;
    }
    private function createUser($firstname,$lastname,$paternity,$phone,$license){
        $sql = "INSERT INTO tempusers(firstname,lastname,paternity,phone,license) VALUES(?,?,?,?,?)";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("sssss",$firstname,$lastname,$paternity,$phone,$license);
        $stmt->execute();
    }
    private function updatePaternity($id,$paternity){
        $sql = "UPDATE users SET paternity=? WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("si",$paternity,$id);
        $stmt->execute();
    }
    private function updateLicense($id,$license){
        $sql = "UPDATE users SET license=? WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("si",$license,$id);
        $stmt->execute();
    }
    
}
$oc = new OrderController();
if(count($_POST)>0){
    session_start();
    $userId=null;
    if($_SESSION!=null){
        $user=unserialize($_SESSION['user']);
        $userId=$user->getId();
    }
    $oc->post($_POST,$userId);
}
elseif(count($_GET)>0){
    $car=$oc->get($_GET);
}
else{
    die ("NULL");
}
?>