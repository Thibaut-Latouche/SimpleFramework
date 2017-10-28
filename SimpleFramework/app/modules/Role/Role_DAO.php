<?php

/**
 * Role - Data Access Object
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class Role_DAO {

    public static function load(Role_Search $rs) {
        $arrRslt = array();
        $db = Outils_Bd::getInstance()->getConnexion();
        $sql = "SELECT * FROM sf_roles WHERE 1=1";
        if (isset($rs->id)) {
            $sql .= " and id=$rs->id";
        }
        $sth = $db->query($sql);
        while ($r = $sth->fetch()) {
            $arrRslt[] = Role::mapDB($r);
        }
        return $arrRslt;
    }

}
