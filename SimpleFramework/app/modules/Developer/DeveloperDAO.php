<?php
namespace SimpleFramework\Developer;

use SimpleFramework\Outils\OutilsBd;
/**
 * Developer - Data Access Object
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class DeveloperDAO {

    public static function load(DeveloperSearch $ds) {
        $arrRslt = array();
        $db = OutilsBd::getInstance()->getConnexion();
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
