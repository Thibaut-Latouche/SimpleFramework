<?php
/**
 * User - Business Logic Layer
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class User_BLL{
    
    public static function read($id = null, $roleId = null){
        try{
            $us = new User_Search();
            if(isset($id)){
                $us->id = $id;
            }
            if(isset($roleId)){
                $us->roleId = $roleId;
            }
            return User_DAO::load($us);
        } catch (Exception $ex) {          
            throw new Exception("ERR_USER_BLL_READ");
        }
    }
}