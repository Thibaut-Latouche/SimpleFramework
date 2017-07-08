<?php
/**
 * Developer Entity
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class Developer{
    
    private $id;
    private $firstname;
    private $lastname;
    private $fonction;
    private $adress;
    private $phone;
    private $email;
    
    public static function mapDB($arrayDB){
        $developer = new Developer();
        $developer->setId($arrayDB["id"]);
        $developer->setFirstname($arrayDB["firstname"]);
        $developer->setLastname($arrayDB["lastname"]);
        $developer->setFonction($arrayDB["fonction"]);
        $developer->setAdress($arrayDB["adress"]);
        $developer->setPhone($arrayDB["phone"]);
        $developer->setEmail($arrayDB["email"]);
        return $developer;
    }
    
    function getId() {
        return $this->id;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getFonction() {
        return $this->fonction;
    }

    function getAdress() {
        return $this->adress;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setFonction($fonction) {
        $this->fonction = $fonction;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

 
    
}