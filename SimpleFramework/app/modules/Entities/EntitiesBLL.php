<?php
namespace SimpleFramework\Entities;

class EntitiesBLL {

    public static $libPath = "app/lib";
    
    public static function read($id = null) {
        try {
            $es = new EntitiesSearch();
            if (!is_null($es)){
                $es->id = $id;
            }
            return EntitiesDAO::load($es);
        } catch (Exception $ex) {
            throw new Entities_Exception("ENTITIES_BLL_READ");
        }
    }

    public static function create($name, $description) {
        try {
            $entity = new Entities();
            $entity->name = $name;
            $entity->description = $description;
            $entity->createdBy = Auth::getInstance()->getId();
            $entity->createdAt = date("Y-m-d H:i:s");
            self::generateEntityFiles($name);
            Entities_DAO::save($entity);
        } catch (Exception $ex) {
            throw new Entities_Exception("ENTITIES_BLL_CREATE");
        }
    }
    

    public static function generateEntityFiles($name) {
        self::makeRepository($name);
        self::makeEntityFile($name);
        self::makeDAOFile($name);
        self::makeBLLFile($name);
    }

    public static function makeRepository($name) {
        $dirPath = BASE_FILE . Entities_BLL::$libPath . $name;
        mkdir($dirPath, 0777);
    }

    public static function makeBLLFile($name) {
        $file = fopen(BASE_FILE . Entities_BLL::$libPath . $name . "/" . $name . "_BLL.php", "a");
        fclose($file);
    }

    public static function makeDAOFile($name) {
        $file = fopen(BASE_FILE . Entities_BLL::$libPath . $name . "/" . $name . "_DAO.php", "a");
        fclose($file);
    }

    public static function makeEntityFile($name) {
        $varArray = array(
            "classname" => $name
        );
        $file = fopen(BASE_FILE . Entities_BLL::$libPath . $name . "/" . $name . ".php", "a");
        fwrite($file, Outils_Ui::display("entities/Entity.tpl", $varArray));
        fclose($file);
    }

    public static function makeEntitySearchFile($name) {
        $file = fopen(BASE_FILE . "lib/" . $name . "/" . $name . "_Search.php", "a");
        fclose($file);
    }

}
