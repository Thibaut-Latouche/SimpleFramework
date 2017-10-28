<?php
/**
 * User - Data Access Object
 * @version 1.0.0
 * @copyright (c) 2017, Thibaut Latouche
 */
class User_DAO {

    public static function load(User_Search $us) {
        $arrRslt = array();
        $db = Outils_Bd::getInstance()->getConnexion();
        $sql = "SELECT * FROM sf_users_application WHERE 1=1";
        if (isset($us->id)){
            $sql .= " and id=$ds->id";
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
