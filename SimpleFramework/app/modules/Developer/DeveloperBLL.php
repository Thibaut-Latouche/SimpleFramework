<?php
namespace SimpleFramework\Developer;
/**
 * Developer - Business Logic Layer
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class DeveloperBLL{
    
    public static function read($id = null){
        try{
            $ds = new DeveloperSearch();
            if(isset($id)){
                $ds->id = $id;
            }
            return DeveloperDAO::load($ds);
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
            throw new DeveloperException("ERR_DEVELOPER_BLL_READ");
        }
    }
}