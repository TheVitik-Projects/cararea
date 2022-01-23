<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/model/User.php');
require_once(__ROOT__.'/model/Car.php');
require_once(__ROOT__.'/model/ProcessedOrder.php');
use \model\User;
use \model\Car;
use \model\ProcessedOrder;
class UserController{
    private $mysql;
    private $user;

    public function __construct(){
        include_once(__ROOT__.'/tools/db.php');
        $this->mysql=$mysql;
        session_start();
        $this->user = unserialize($_SESSION['user']);
        if($this->user!=null){
            if($this->user->getType()!=0){
                header("Location: ../manager.php");
            }
        }
        else{
            header("Location: ../signin.php");
        }
    }
    public function post($data){
        $userId=$this->user->getId();
        if(isset($data['password'])){
            echo $data['password'];
            $this->updatePassword($userId,md5($data['password']));
            $this->saveUser($userId);
        }
        if(isset($data['paternity'])){
            echo $data['paternity'];
            $this->updatePaternity($userId,$data['paternity']);
            $this->saveUser($userId);
        }
        if(isset($data['license'])){
            echo $data['license'];
            $this->updateLicense($userId,$data['license']);
            $this->saveUser($userId);
        }
        echo 1;
    }
    public function get($data){
        switch($data['page']){
            case "active":
                $orders = $this->showActiveOrder();
                include_once(__ROOT__.'/view/account/active.php');
                break;
            case "history":
                $orders = $this->showOrderHistory();
                include_once(__ROOT__.'/view/account/history.php');
                break;
            case "profile":
                include_once(__ROOT__.'/view/account/profile.php');
                break;
            case "exit":
                $this->exit();
                break;
            default:
                include_once(__ROOT__.'/view/account/404.php');
        }
        
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
    private function showActiveOrder(){
        $sql = "SELECT * FROM orders WHERE userId=? AND temp=0 AND status!=0";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $this->user->getId());
        $stmt->execute();
        $result = $stmt->get_result();
        $orders = array();
        while($data = $result->fetch_array()){
            $order = new ProcessedOrder($this->user->getId(),$data['carId'],$data['firstDate'],$data['secondDate'],$data['price']);
            $order->setId($data['id']);
            $order->setStatus($data['status']);
            $order->setMessage($data['message']);
            array_push($orders,$order);
        }
        return $orders;
    }
    public function showOrderHistory(){
        $sql = "SELECT * FROM orders WHERE userId=? AND temp=0 AND status=0 OR status=2";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $this->user->getId());
        $stmt->execute();
        $result = $stmt->get_result();
        $orders = array();
        while($data = $result->fetch_array()){
            $secondDate=$data['secondDate'];
            $date = date_parse($secondDate);
            $date = $date['year']."-".$date['month']."-".$date['day'];
            $date = strtotime($date);
            $now = time();
            $datediff = $now - $date;
            $days = round($datediff / (60 * 60 * 24));
            if($days>7 || $data['status']==0){
                $order = new ProcessedOrder($this->user->getId(),$data['carId'],$data['firstDate'],$data['secondDate'],$data['price']);
                $order->setId($data['id']);
                $order->setStatus($data['status']);
                $order->setMessage($data['message']);
                array_push($orders,$order);
            }
        }
        return $orders;
        
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
    private function updatePassword($id,$password){
        $sql = "UPDATE users SET password=? WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("si",$password,$id);
        $stmt->execute();
    }
    private function saveUser($id){
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $sessionUser = new User($data['id'],$data['type'],$data['firstname'],$data['lastname'],$data['paternity'],$data['phone'],$data['password'],$data['license']);
        $_SESSION['user']=serialize($sessionUser);
    }
    private function exit(){
        $_SESSION['user']=null;
        header("Location: ../signin.php");
    }
}
$uc = new UserController();
if(count($_GET)==0 && count($_POST)==0 && $_SERVER['REQUEST_URI']=="/account.php"){
    header("Location: /account.php?page=active");
}
if(count($_POST)>0){
    session_start();
    $userId=null;
    if($_SESSION==null){  
        header("Location: signin.php");
    }
    $uc->post($_POST);
}
elseif(count($_GET)>0 && $_SERVER['SCRIPT_NAME']=="/account.php"){
    $uc->get($_GET);
    
}
?>