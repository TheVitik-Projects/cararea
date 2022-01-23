<?php
namespace model;
class User{
    protected $id=null;
    protected $type;
    protected $firstname;
    protected $lastname;
    protected $paternity=null;
    protected $phone;
    protected $password;
    protected $license=null;

    public function __construct(int $id=null, int $type=null, string $firstname=null, string $lastname=null, string $paternity=null, string $phone, string $password, string $license=null) {
        $this->id=$id;
        $this->type=$type;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->paternity=$paternity;
        $this->phone=$phone;
        $this->password=$password;
        $this->license=$license;
    }

    public function getId(){
        return $this->id;
    }
    public function getType(){
        return $this->type;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getPaternity(){
        return $this->paternity;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getLicense(){
        return $this->license;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setType($type){
        $this->type=$type;
    }
    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }
    public function setLastname($lastname){
        $this->lastname=$lastname;
    }
    public function setPaternity($paternity){
        $this->paternity=$paternity;
    }
    public function setPhone($phone){
        $this->phone=$phone;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setLicense($license){
        $this->license=$license;
    }
}

?>