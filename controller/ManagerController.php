<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/model/User.php');
require_once(__ROOT__.'/model/Car.php');
require_once(__ROOT__.'/model/ProcessedOrder.php');
use \model\User;
use \model\Car;
use \model\ProcessedOrder;
class ManagerController{
    private $mysql=null;
    private $user;

    public function __construct(){
        include_once(__ROOT__.'\tools\db.php');
        echo __ROOT__.'/tools/db.php';
        $this->mysql=$mysql;
    }
    public function post($data){
        switch($data['action']){
            case "confirm":
                //$this->confirm($data['id'],$data['message']);
                return "CONFIRM SUCCESS";
                break;
            case "reject":
                return "REJECT SUCCESS";
                //$this->reject($data['message'],$data['id']);
                break;
            default:
                return "INVALID ACTION";
                header("Location: ../manager.php");
        }
    }
    public function get($data){
        switch($data['action']){
            case "exit":
                $this->exit();
                break;
            case "delete":
                $this->delete($data['id']);
            	header("Location: ../manager.php");
                break;
            default:
                header("Location: ../manager.php");
        }
    }
    public function selectCar($carId){
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
    public function selectUser($userId){
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $sessionUser = new User($data['id'],$data['type'],$data['firstname'],$data['lastname'],$data['paternity'],$data['phone'],$data['password'],$data['license']);
        
        return $sessionUser;
    }
    public function selectTempUser($userId){
        $sql = "SELECT * FROM tempusers WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $sessionUser = new User($data['id'],2,$data['firstname'],$data['lastname'],$data['paternity'],$data['phone'],"",$data['license']);
        
        return $sessionUser;
    }
    public function selectOrders(){
        $sql = "SELECT * FROM orders WHERE status=1 and temp=0";
        $result = $this->mysql->query($sql);
        $orders = array();
        while($data = $result->fetch_array()){
            $order = new ProcessedOrder($data['userId'],$data['carId'],$data['firstDate'],$data['secondDate'],$data['price']);
            $order->setId($data['id']);
            $order->setStatus($data['status']);
            $order->setMessage($data['message']);
            array_push($orders,$order);
        }
        return $orders;
    }
    public function selectTempOrders(){
        $sql = "SELECT * FROM orders WHERE status=1 and temp=1";
        $result = $this->mysql->query($sql);
        $orders = array();
        while($data = $result->fetch_array()){
            $order = new ProcessedOrder($data['userId'],$data['carId'],$data['firstDate'],$data['secondDate'],$data['price']);
            $order->setId($data['id']);
            $order->setStatus($data['status']);
            $order->setMessage($data['message']);
            array_push($orders,$order);
        }
        return $orders;
    }
    private function confirm($id,$message){
        $sql = "UPDATE orders SET status=2,message=? WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("si", $message,$id);
        $stmt->execute();
    }
    private function reject($message,$id){
        $sql = "UPDATE orders SET status=0,message=? WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("si", $message,$id);
        $stmt->execute();
        $result = $this->mysql->query("SELECT carId FROM orders WHERE id='$id'");
      	$car=$result->fetch_array();
      	$carId=$car['carId'];
        $this->mysql->query("UPDATE cars SET active=1 WHERE id='$carId'");
    }
    private function delete($id){
        $sql = "DELETE FROM orders WHERE id=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    private function exit(){
        $_SESSION['user']=null;
        header("Location: ../signin.php");
    }
}
$mc = new ManagerController();
$orders = $mc->selectOrders();
$tempOrders = $mc->selectTempOrders();
if(isset($_GET['action'])){
    $mc->get($_GET);
}
elseif(isset($_POST['action']) && isset($_POST['id'])){
    $mc->post($_POST);
}
?>