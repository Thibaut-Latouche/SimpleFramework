<?php
namespace SimpleFramework\Auth;

use SimpleFramework\Outils\Outils;
use SimpleFramework\Outils\OutilsBd;
use \PDO;

/**
 * Auth Class
 * @copyright Thibaut Latouche, 2015
 * @author Thibaut Latouche
 */
class Auth {

  protected static $login      = "login";  
  protected static $statut     = "statut";  
  protected static $lastname   = "lastname";
  protected static $firstname  = "firstname";
  protected static $phone      = "phone";
  protected static $email      = "email";
  protected static $activated  = "activated";  
  protected static $auth       = null;  
  protected static $sql        = "select * from sf_users where login=:login";
  protected $infos             = array();
    
  /**
   * Default Constructor
   */
  private function __construct() {
    $this->infos = (isset($_SESSION[SESSION_NAME])) ? $_SESSION[SESSION_NAME] : array();
  }

  /**
   * Get Instance
   * @return Auth
   */
  public static function getInstance() {
    if (null === self::$auth) {
      self::$auth = new self();
    }
    return self::$auth;
  }

  /**
   * Verify
   * @param string $login
   * @param string $pass
   */
  public function verify($login, $pass) {
    $db = OutilsBd::getInstance()->getConnexion();   
    $sth = $db->prepare(Auth::$sql);
    $params = array(Auth::$login => $login);
    $sth->execute($params);
    $res = $sth->fetchAll(PDO::FETCH_ASSOC);        
    $this->checkPassword($pass,$res);    
  }
  
  /**
   * 
   * @param unknown $pass
   * @param unknown $tab
   * @throws AuthException
   */
  private function checkPassword($pass,$tab){          
    if (isset($tab[0]) && password_verify($pass, $tab[0]["pass"])){          
        $this->addInfosToSesion($tab[0]);        
    }
    else{ 
        throw new AuthException("Identifiants de connexion erronés");
    }    
  }
  
 /**
  * Function Synchronize
  */
  private function synchronise() {
    $_SESSION[SESSION_NAME] = $this->infos;
  }

  /**
  * Function addInfos In Session
  */
  private function addInfosToSesion($tab) {    
    $this->infos[Auth::$login]     = $tab[Auth::$login];
    $this->infos[Auth::$statut]    = $tab[Auth::$statut];
    $this->infos['id']             = $tab["id"];
    $this->infos[Auth::$lastname]  = $tab[Auth::$lastname];
    $this->infos[Auth::$firstname] = $tab[Auth::$firstname];
    $this->infos[Auth::$email]     = $tab[Auth::$email];
    $this->infos[Auth::$phone]     = $tab[Auth::$phone];
    $this->synchronise();
  }

  /**
  * Function isConnect
  */
  public function isConnect() {    
    return !empty($this->infos);
  }

  /**
  * Function quit
  */
  public function quit(){
    session_unset();
    $this->infos = array();
    $this->synchronise();
  }

 /**
  * Function getId
  * @return integer 
  */
  public function getId() {
    return Outils::filter($this->infos['id'],FILTER_INT);
  }

 /**
  * Function getNom
  * @return string 
  */
  public function getNom() {
    return Outils::filter($this->infos[Auth::$lastname],FILTER_STRING);
  }

 /**
  * Function getPrenom
  * @return string 
  */
  public function getPrenom() {    
    return Outils::filter($this->infos[Auth::$firstname],FILTER_STRING);
  }

 /**
  * Function getStatut
  * @return string 
  */
  public function getStatut() {
    if(isset($this->infos[Auth::$statut])){
        return Outils::filter($this->infos[Auth::$statut], FILTER_STRING);
    }else{
        return "";
    }        
  }

 /**
  * Function getLogin
  * @return string 
  */
  public function getLogin() {
    return Outils::filter($this->infos[Auth::$login], FILTER_STRING);
  }

 /**
  * Function getEmail
  * @return string 
  */
  public function getEmail(){
    return Outils::filter($this->infos[Auth::$email], FILTER_STRING);
  }  
 
}
?>
