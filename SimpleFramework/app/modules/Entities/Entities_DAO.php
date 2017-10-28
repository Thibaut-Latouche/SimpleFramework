<?php

/**
 * Entities - Data Access Object
 * @author Thibaut Latouche
 * @copyright Thibaut Latouche, 2017
 */
class Entities_DAO {

    /**
     * Load
     * @param Entities_Search $es
     * @return Entities[]
     */
    public static function load(Entities_Search $es) {
        $arrRslt = array();
        $db = Outils_Bd::getInstance()->getConnexion();
        $sql = "SELECT * FROM sf_entities WHERE 1=1";
        if (isset($es->id)){
            $sql .= " and id=$es->id";
        }
        $sth = $db->query($sql);
        while ($r = $sth->fetch()) {
            $arrRslt[] = Entities::mapDB($r);
        }
        return $arrRslt;
    }

    /**
     * Save
     * @param Entities $e
     * @return PDOStatement
     */
    public static function save(Entities $e) {
        $db = Outils_Bd::getInstance()->getConnexion();
        if (!is_null($e->id)) {
            $sql = "UPDATE sf_entities set name=" . $db->quote($e->name) . ", description=" . $db->quote($e->description) . " where id=$p->id";
        } else {
            $sql = "INSERT INTO sf_entities(name,description,created_by) "
                    . "values(" . $db->quote($e->name) . "," . $db->quote($e->description) . "," . $e->createdBy . ")";
        }
        return $db->query($sql);
    }

    /**
     * Delete
     * @param Entities $e
     */
    public static function delete(Entities $e) {
        $db = Outils_Bd::getInstance()->getConnexion();
        $sth = $db->prepare("DELETE FROM sf_entities WHERE id=:id");
        $data = array(
            "id" => $e->id
        );
        $sth->execute($data);
    }

}
