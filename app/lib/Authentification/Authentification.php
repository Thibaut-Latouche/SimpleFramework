<?php
namespace Application\Authentification;

use SimpleFramework\Auth\Auth;
/**
 * Authentification class
 * @copyright Thibaut Latouche, 2015
 * @author Thibaut Latouche
 */
class Authentification extends Auth {

  protected static $sql = "select * from mf_user_app where login=:login";  

}
?>
