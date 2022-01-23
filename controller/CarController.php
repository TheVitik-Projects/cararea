<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/model/Car.php');
use \model\Car;
class CarController{
    private $mysql;

    public function __construct(){
        include_once(__ROOT__.'/tools/db.php');
        $this->mysql=$mysql;
    }
    public function post($data){
        return $this->searchCars($data);
    }
    public function get($data){
            $page = $data['page'] ?? 1;
            return $this->selectCars($page);
        }
    private function searchCars($data){
        $name = $data['name']!="" ? "%".$data['name']."%" : "%";
        $priceFrom = $data['priceFrom']>0 ? $data['priceFrom'] : 1;
        $priceTo = $data['priceTo']>0 ? $data['priceTo'] : 10000;
        $fuel1 = $data['fuelType'][0] ?? "";
        $fuel2 = $data['fuelType'][1] ?? "";
        $fuel3 = $data['fuelType'][2] ?? "";
        $fuelFrom = $data['fuelFrom']>0 ? $data['fuelFrom'] : 1;
        $fuelTo = $data['fuelTo']>0 ? $data['fuelTo'] : 10000;
        $transmission = (isset($data['transmission']) && $data['transmission']!="") ? $data['transmission'] : "Усі";
        $engineFrom = $data['engineFrom']>0 ? $data['engineFrom'] : 1;
        $engineTo = $data['engineTo']>0 ? $data['engineTo'] : 10000;
        $drive1 = $data['driveType'][0] ?? "";
        $drive2 = $data['driveType'][1] ?? "";
        $drive3 = $data['driveType'][2] ?? "";
        $sql = "SELECT * FROM cars WHERE name LIKE ? AND price BETWEEN ? AND ? AND fuelCons BETWEEN ? AND ? AND motorVolume BETWEEN ? AND ?";
        if($transmission!="Усі"){
            $sql.=" AND transmission='$transmission'";
        }
        if($fuel1!=""){
            $sql.=" AND fuelType='$fuel1'";
            if($fuel2!=""){
                $sql.=" OR fuelType='$fuel2'";
                if($fuel3!=""){
                    $sql.=" OR fuelType='$fuel3'";
                }
            }
        }
        if($drive1!=""){
            $sql.=" AND driveType='$drive1'";
            if($drive2!=""){
                $sql.=" OR driveType='$drive2'";
                if($drive3!=""){
                    $sql.=" OR driveType='$drive3'";
                }
            }
        }
        $stmt = $this->mysql->prepare($sql);
        $stmt->bind_param("siiiiii", $name,$priceFrom,$priceTo,$fuelFrom,$fuelTo,$engineFrom,$engineTo);
        $stmt->execute();
        $result = $stmt->get_result();
        $cars=array();
        while($carData = $result->fetch_array()){
            $car = new Car($carData['id'],$carData['name'],$carData['motorVolume'],$carData['transmission'],$carData['driveType'],$carData['fuelType'],$carData['fuelCons'],$carData['active'],$carData['image'],$carData['price']);
            array_push($cars,$car);
        }
        return $cars  ?? null;
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
    private function selectCars($page){
        if(is_numeric($page)){
            $check=null;
            $page*=9;
            $f = $page-8;
            while($check==null){
                $sql = "SELECT * FROM cars WHERE id BETWEEN ? AND ?";
                $stmt = $this->mysql->prepare($sql); 
                $stmt->bind_param("ss", $f,$page);
                $stmt->execute();
                $result = $stmt->get_result();
                $check = $result->fetch_array();
                $page-=9;
                $f-=9;
            }
            $cars=array();
            mysqli_data_seek($result, 0);
            while($data = $result->fetch_array()){
                $car = new Car($data['id'],$data['name'],$data['motorVolume'],$data['transmission'],$data['driveType'],$data['fuelType'],$data['fuelCons'],$data['active'],$data['image'],$data['price']);
                array_push($cars,$car);
            }
        }
        return $cars  ?? null;
    }
    public function selectPopularCars(){
        $result = $this->mysql->query("SELECT carId, COUNT(*) as rate FROM orders Group By carId Order By rate DESC LIMIT 9");
        $cars=array();
        while($topCar = $result->fetch_array()){
            $carId = $topCar['carId'];
            $carres = $this->mysql->query("SELECT * FROM cars WHERE id='$carId'");
            $data = $carres->fetch_assoc();
            $car = new Car($carId,$data['name'],$data['motorVolume'],$data['transmission'],$data['driveType'],$data['fuelType'],$data['fuelCons'],$data['active'],$data['image'],$data['price']);
            array_push($cars,$car);
        }
        return $cars;
        
    }
}
$cc = new CarController();
if(count($_GET)==0 && $_SERVER['REQUEST_URI']=="/cars.php"){
    $_GET['page']=1;
}
if(count($_POST)>0){
    $cars=$cc->post($_POST);
}
elseif(count($_GET)>0 && $_SERVER['SCRIPT_NAME']=="/cars.php"){
    $cars=$cc->get($_GET);
}
else{
    $cars = $cc->selectPopularCars();
}
?>