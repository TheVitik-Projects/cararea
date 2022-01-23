<?php
namespace model;
require_once(__ROOT__.'/model/Order.php');
use \model\Order;
class ProcessedOrder extends Order{
    protected $id;
    protected $status;
    protected $message;


    public function getId(){
        return $this->id;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getMessage(){
        return $this->message;
    }
    
    public function setId($id){
        $this->id=$id;
    }
    public function setStatus($status){
        $this->status=$status;
    }
    public function setMessage($message){
        $this->message=$message;
    }

}

?>