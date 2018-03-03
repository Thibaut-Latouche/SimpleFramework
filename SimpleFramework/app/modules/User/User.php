<?php
namespace SimpleFramework\User;

use SimpleFramework\Outils\Outils;
use SimpleFramework\Role\RoleBLL;

class User{
    
    private $id;
    private $login;
    private $firstname;
    private $lastname;
    private $email;
    private $createdAt;
    private $createdBy;
    private $role;
    
    public static function mapDB($arrayDB){
        $user = new User();
        $user->setId($arrayDB["id"]);
        $user->setFirstname($arrayDB["firstname"]);
        $user->setLastname($arrayDB["lastname"]);
        $user->setEmail($arrayDB["email"]);
        $user->setCreatedAt($arrayDB["created_at"]);
        $user->setCreatedBy($arrayDB["created_by"]);
        $user->setRole($arrayDB["role_id"]);       
        return $user;
    }
    
    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }
    
    function getRole() {
        return $this->role;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }
    
    function setRole($role) {
        $this->role = Outils::getFirstObject(RoleBLL::read($role));
    }
    
}
