<?php
namespace SimpleFramework\User;

use SimpleFramework\User\UserDAO;
use SimpleFramework\User\UserSearch;
use SimpleFramework\User\UserException;

/**
 * User - Business Logic Layer
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class UserBLL{
    
    public static function read($id = null, $roleId = null){
        try{
            $us = new UserSearch();
            if(isset($id)){
                $us->id = $id;
            }
            if(isset($roleId)){
                $us->roleId = $roleId;
            }
            return UserDAO::load($us);
        } catch (Exception $ex) {          
            throw new UserException("ERR_USER_BLL_READ");
        }
    }
}