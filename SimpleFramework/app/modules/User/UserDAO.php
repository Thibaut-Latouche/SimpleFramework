<?php
namespace SimpleFramework\User;

use SimpleFramework\User\User;
use SimpleFramework\User\UserSearch;
use SimpleFramework\Outils\OutilsBd;

/**
 * User - Data Access Object
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class UserDAO {

    public static function load(UserSearch $us) {
        $arrRslt = array();
        $db = OutilsBd::getInstance()->getConnexion();
        $sql = "SELECT * FROM sf_users_application WHERE 1=1";
        if (isset($us->id)){
            $sql .= " and id=$us->id";
        }
        if(isset($us->roleId)){
            $sql .= " and role_id=$us->roleId";
        }
        $sth = $db->query($sql);
        while ($r = $sth->fetch()) {
            $arrRslt[] = User::mapDB($r);
        }
        return $arrRslt;
    }

}
