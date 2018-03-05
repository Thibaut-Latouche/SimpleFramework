<?php
namespace SimpleFramework\Role;

use SimpleFramework\Outils\OutilsBd;
/**
 * Role - Data Access Object
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class RoleDAO {

    public static function load(RoleSearch $rs) {
        $arrRslt = array();
        $db = OutilsBd::getInstance()->getConnexion();
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
