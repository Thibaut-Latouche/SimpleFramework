<?php
namespace SimpleFramework\Role;

use SimpleFramework\User\UserBLL;
/**
 * Role - Business Logic Layer
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class RoleBLL{
    
    public static function read($id = null, $withUsers = FALSE){
        try{            
            $rs = new RoleSearch();
            if(isset($id)){
                $rs->id = $id;
            }
            $roles = RoleDAO::load($rs);
            foreach($roles as $role){
                if($withUsers){
                    $role->setUsers(UserBLL::read(null,$role->getId()));         
                }
            }
            return $roles;
        } catch (Exception $ex) {            
            throw new RoleException("ERR_ROLE_BLL_READ");
        }
    }
}