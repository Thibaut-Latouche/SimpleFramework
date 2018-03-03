<?php
namespace SimpleFramework\Role;

/**
 * Role Entity
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class Role{
    
    private $id;
    private $name;
    private $users;

    public static function mapDB($arrayDB){
        $role = new Role();
        $role->setId($arrayDB["id"]);
        $role->setName($arrayDB["name"]);
        return $role;
    }
 
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }
    
    function getUsers() {
        return $this->users;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setUsers($users) {
        $this->users = $users;
    }
    
}