<?php

/**
 * Developer - Data Access Object
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class Developer_DAO {

    public static function load(Developer_Search $ds) {
        $arrRslt = array();
        $db = Outils_Bd::getInstance()->getConnexion();
        $sql = "SELECT * FROM sf_users WHERE 1=1";
        if (isset($ds->id)){
            $sql .= " and id=$ds->id";
        }
        $sth = $db->query($sql);
        while ($r = $sth->fetch()) {
            $arrRslt[] = Developer::mapDB($r);
        }
        return $arrRslt;
    }

}
