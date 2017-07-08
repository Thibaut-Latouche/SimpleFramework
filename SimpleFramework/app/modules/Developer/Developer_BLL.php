<?php
/**
 * Developer - Business Logic Layer
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class Developer_BLL{
    
    public static function read($id = null){
        try{
            $ds = new Developer_Search();
            if(isset($id)){
                $ds->id = $id;
            }
            return Developer_DAO::load($ds);
        } catch (Exception $ex) {
            throw new Exception("ERR_DEVELOPER_BLL_READ");
        }
    }
}