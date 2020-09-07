<?php

class Account {

    private $uid;
    private $fullname;    
    private $email;
    private $pass;
    private $points;
    
    public function __construct($uid, $fullname, $email, $pass, $points) {
        $this->uid = $uid;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->pass = $pass;
        $this->points = $points;
    }

    public function getUID() {
        return $this->uid;
    }

    public function getFullName() {
        return $this->fullname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->pass;
    }

    public function getPoints() {
        return $this->points;
    }
}

?>