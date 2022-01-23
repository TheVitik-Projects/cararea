<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/model/User.php');
use \model\User;
class AccountController{
    private $mysql;
    public function post($data){
        include_once(__ROOT__.'/tools/db.php');
        $this->mysql=$mysql;
        if(count($data)==2){
            $user = new User(phone: $data['phone'], password: md5($data['password']));
            $this->login($user);
        }
        else{
            $user = new User(null,0,$data['firstname'],$data['lastname'],$data['paternity'],$data['phone'],md5($data['password']),$data['license']);
            $this->register($user);
        }
    }
    public function login($user){
        if($this->isExistsUser($user,false)){
            if($user->getPassword()==$this->getPassword($user->getPhone())){
                session_start();
                $_SESSION['user']=serialize($this->selectUser($user->getPhone()));
                $user=$this->selectUser($user->getPhone());
                if($user->getType()==0){
                    echo 201;
                }
                else{
                    echo 202;

                }
            }
            else{
                echo "Пароль неправильний";
            }
        }
        else{
            echo "Такого користувача не існує.";
        }
    }
    private function register($user){
        if(!$this->isExistsUser($user)){
            $sql = "INSERT INTO users(firstname,lastname,paternity,phone,password,license) VALUES(?,?,?,?,?,?)";
            $stmt = $this->mysql->prepare($sql); 
            $stmt->bind_param("ssssss",$user->getFirstname(),$user->getLastname(),$user->getPaternity(),$user->getPhone(),$user->getPassword(),$user->getLicense());
            $stmt->execute();
            session_start();
            $_SESSION['user']=serialize($this->selectUser($user->getPhone()));
            header("Location: account.php?page=active");
        }
        else{
            if($this->checkPhone($user->getPhone())){
                echo "Цей номер телефону вже зареєстровано.";
            }
            elseif($this->checkName($user->getFirstname(),$user->getLastname())){
                echo "Користвач з таким іменем вже зареєстрований.";
            }
            else{
                echo "Водійські права з таким номером вже зареєстровано.";
            }
        }
    }
    private function isExistsUser($user,$isreg=true){
        if($isreg){ //If register
            //return ($this->checkPhone($user->getPhone()) && // return true if data exists else false
            //$this->checkName($user->getFirstname(),$user->getLastname()) &&
            //$this->checkLicense($user->getLicense()));
            $exist=false;
            if($this->checkPhone($user->getPhone())){
                $exist=true;
            }
            elseif($this->checkName($user->getFirstname(),$user->getLastname())){
                $exist=true;
            }
            elseif($this->checkLicense($user->getLicense())){
                $exist=true;
            }
            return $exist;
        }
        else{
            return $this->checkPhone($user->getPhone()); //return true if phone exists
        }
    }
    private function checkPhone($phone){
        $sql = "SELECT id FROM users WHERE phone=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc()!=null;
    }
    private function checkName($firstname,$lastname){
        $sql = "SELECT id FROM users WHERE firstname=? AND lastname=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("ss", $firstname,$lastname);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc()!=null;
    }
    private function checkLicense($license){
        $sql = "SELECT id FROM users WHERE license=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("s", $license);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc()!=null;
    }
    private function getPassword($phone){
        $sql = "SELECT password FROM users WHERE phone=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        return $user['password'];
    }
    private function selectUser($phone){
        $sql = "SELECT * FROM users WHERE phone=?";
        $stmt = $this->mysql->prepare($sql); 
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $sessionUser = new User($data['id'],$data['type'],$data['firstname'],$data['lastname'],$data['paternity'],$data['phone'],$data['password'],$data['license']);
        return $sessionUser;
    }
}
$ac = new AccountController();
if(count($_POST)>0){
    $ac->post($_POST);
}
else{
    echo "NULL";
}
?>