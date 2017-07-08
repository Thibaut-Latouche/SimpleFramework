<?php
/**
 * Auth
 * @copyright Thibaut Latouche, 2015
 * @author Thibaut Latouche
 */
class Auth {
	
  protected static $auth = null;
  protected $infos       = array();
  private static $sql    = "select * from mf_user_app where login=:login";
    
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
    $params = array('login' => $login);
    $sth->execute($params);
    $res = $sth->fetchAll(PDO::FETCH_ASSOC);        
    $this->checkPassword($pass,$res);    
  }
  
  /**
   * 
   * @param unknown $pass
   * @param unknown $tab
   * @throws Exception
   */
  private function checkPassword($pass,$tab){          
    if (password_verify($pass, $tab[0]["pass"])){   
        $this->addInfosToSesion($tab[0]);        
    }
    else{ 
        throw new Exception("AUTH_INVALID_PASSWORD");
    }    
  }
  
  private function synchronise() {
    $_SESSION[SESSION_NAME] = $this->infos;
  }

  private function addInfosToSesion($tab) {    
    $this->infos['login']     = $tab["login"];
    $this->infos['statut']    = $tab["statut"];
    $this->infos['id']        = $tab["id"];
    $this->infos['nom']       = $tab["nom"];
    $this->infos['prenom']    = $tab["prenom"];
    $this->infos['mail']      = $tab["mail"];
    $this->infos['phone']     = $tab["phone"];
    $this->infos['ref']       = $tab["ref"];
    $this->infos['activated'] = $tab["activated"];
    $this->synchronise();
  }

  public function editInfosToSesion($user){
    $this->infos['login']     = $user->login;
    $this->infos['statut']    = $user->statut;
    $this->infos['id']        = $user->id;
    $this->infos['nom']       = $user->nom;
    $this->infos['prenom']    = $user->prenom;
    $this->infos['mail']      = $user->mail;
    $this->infos['phone']     = $user->phone;
    $this->infos['ref']       = $user->ref;
    $this->infos['activated'] = $user->activated;
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
    return Outils::filter($this->infos['nom'],FILTER_STRING);
  }

  public function getPrenom() {
    return Outils::filter($this->infos['prenom'],FILTER_STRING);
  }

  public function getStatut() {
    if(isset($this->infos['statut'])){
        return Outils::filter($this->infos['statut'], FILTER_STRING);
    }else{
        return "";
    }        
  }

  public function getLogin() {
    return Outils::filter($this->infos['login'], FILTER_STRING);
  }

  public function getEmail(){
    return Outils::filter($this->infos['mail'], FILTER_STRING);
  }  

  public function getInfo(){
    $userInfos = null;
    if(!empty($this->infos)){     
        $userInfos["id"]        = intval($this->infos["id"]);
        $userInfos['login']     = Outils::filter($this->infos['login']  , FILTER_STRING); 
        $userInfos['statut']    = Outils::filter($this->infos['statut'] , FILTER_STRING); 
        $userInfos['nom']       = Outils::filter($this->infos['nom']    , FILTER_STRING); 
        $userInfos['prenom']    = Outils::filter($this->infos['prenom'] , FILTER_STRING); 
        $userInfos['mail']      = Outils::filter($this->infos['mail']   , FILTER_STRING); 
        $userInfos['phone']     = Outils::filter($this->infos['phone']  , FILTER_STRING);
        $userInfos['ref']       = Outils::filter($this->infos['ref'] , FILTER_STRING);
        $userInfos['activated'] = Outils::filter($this->infos['activated']  , FILTER_INT);
    }
    return $userInfos;
  }
}
?>
