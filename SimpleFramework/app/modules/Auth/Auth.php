<?php
/**
 * Auth
 * @copyright Thibaut Latouche, 2015
 * @author Thibaut Latouche
 */
class Auth {
	
  public static $login      = "login";  
  public static $statut     = "statut";  
  public static $lastname   = "lastname";
  public static $firstname  = "firstname";
  public static $phone      = "phone";
  public static $activated  = "activated";  
  protected static $auth    = null;
  protected $infos          = array();
  protected static $sql     = "select * from sf_users where login=:login";
    
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
    $db = Outils_Bd::getInstance()->getConnexion();
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
   * @throws Auth_Exception
   */
  private function checkPassword($pass,$tab){          
    if (password_verify($pass, $tab[0]["pass"])){          
        $this->addInfosToSesion($tab[0]);        
    }
    else{ 
        throw new Auth_Exception("AUTH_INVALID_PASSWORD");
    }    
  }
  
  private function synchronise() {
    $_SESSION[SESSION_NAME] = $this->infos;
  }

  private function addInfosToSesion($tab) {    
    $this->infos[Auth::$login]     = $tab[Auth::$login];
    $this->infos[Auth::$statut]    = $tab[Auth::$statut];
    $this->infos['id']             = $tab["id"];
    $this->infos[Auth::$lastname]  = $tab[Auth::$lastname];
    $this->infos[Auth::$firstname] = $tab[Auth::$firstname];
    $this->infos['mail']           = $tab["mail"];
    $this->infos[Auth::$phone]     = $tab[Auth::$phone];
    $this->synchronise();
  }

  public function isConnect() {    
    return !empty($this->infos);
  }

  public function quit(){
    session_destroy();
    $this->infos = array();
    $this->synchronise();
  }

  /*****************************************************************************
  * PUBLIC ACCESORS
  *****************************************************************************/
  public function getId() {
    return Outils::filter($this->infos['id'],FILTER_INT);
  }

  public function getNom() {
    return Outils::filter($this->infos[Auth::$lastname],FILTER_STRING);
  }

  public function getPrenom() {    
    return Outils::filter($this->infos[Auth::$firstname],FILTER_STRING);
  }

  public function getStatut() {
    if(isset($this->infos[Auth::$statut])){
        return Outils::filter($this->infos[Auth::$statut], FILTER_STRING);
    }else{
        return "";
    }        
  }

  public function getLogin() {
    return Outils::filter($this->infos[Auth::login], FILTER_STRING);
  }

  public function getEmail(){
    return Outils::filter($this->infos['mail'], FILTER_STRING);
  }  

  public function getInfo(){
    $userInfos = null;
    if(!empty($this->infos)){     
        $userInfos["id"]             = intval($this->infos["id"]);
        $userInfos[Auth::$login]     = Outils::filter($this->infos[Auth::$login]     , FILTER_STRING); 
        $userInfos[Auth::$statut]    = Outils::filter($this->infos[Auth::$statut]    , FILTER_STRING); 
        $userInfos[Auth::$lastname]  = Outils::filter($this->infos[Auth::$lastname]  , FILTER_STRING); 
        $userInfos[Auth::$firstname] = Outils::filter($this->infos[Auth::$firstname] , FILTER_STRING); 
        $userInfos['mail']           = Outils::filter($this->infos['mail']           , FILTER_STRING); 
        $userInfos[Auth::$phone]     = Outils::filter($this->infos[Auth::$phone]     , FILTER_STRING);        
    }
    return $userInfos;
  }
}
?>
