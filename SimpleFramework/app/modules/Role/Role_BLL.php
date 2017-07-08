<?php
/**
 * Role - Business Logic Layer
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class Role_BLL{
    
    public static function read($id = null, $withUsers = FALSE){
        try{            
            $rs = new Role_Search();
            if(isset($id)){
                $rs->id = $id;
            }
            $roles = Role_DAO::load($rs);
            foreach($roles as $role){
                if($withUsers) $role->setUsers(User_BLL::read(null,$role->getId()));         
            }
            return $roles;
        } catch (Exception $ex) {            
            throw new Exception("ERR_ROLE_BLL_READ");
        }
    }
}