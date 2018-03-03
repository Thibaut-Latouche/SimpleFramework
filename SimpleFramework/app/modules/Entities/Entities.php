<?php
namespace SimpleFramework\Entities;
/**
 * Entities
 * @author Thibaut Latouche
 * @copyright Thibaut Latouche, 2017
 */
class Entities {

    public $id;
    public $name;
    public $description;
    public $createdAt;
    public $createdBy;

    public function mapDB($arrayDB) {
        $entity = new Entities();
        $entity->id = $arrayDB["id"];
        $entity->name = $arrayDB["name"];
        $entity->description = $arrayDB["description"];
        $entity->createdAt = $arrayDB["created_at"];
        $entity->createdBy = $arrayDB["created_by"];
        return $entity;
    }

}
