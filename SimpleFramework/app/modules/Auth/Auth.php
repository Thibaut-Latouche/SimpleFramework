<?php
/**
 * Auth
 * @copyright Thibaut Latouche, 2015
 * @author Thibaut Latouche
 */
class Auth {
	
	protected static $auth = null;
	protected $infos       = array();
	private static $sql    = "select * from sf_users where login=:login";
	
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
		$params = array(
				'login' => $login				
		);
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
		if(isset($tab[0])){
			if (password_verify($pass, $tab[0]["password"])){				
				$this->addInfosToSesion($tab[0]);
			}
			else{
				throw new Auth_Exception("AUTH_INVALID_PASSWORD");
			}
		}else{
			throw new Auth_Exception("AUTH_INVALID_PASSWORD");
		}
		
	}
	
	private function synchronise() {
		$_SESSION[SESSION_NAME] = $this->infos;
	}
	
	private function addInfosToSesion($tab) {
		$this->infos['id']        = $tab["id"];
		$this->infos['login']     = $tab["login"];
		$this->infos['status']    = $tab["status"];		
		$this->infos['lastname']  = $tab["lastname"];
		$this->infos['firstname'] = $tab["firstname"];
		$this->infos['smail']     = $tab["email"];			
		$this->synchronise();
	}
	
	public function editInfosToSesion($user){
		$this->infos['id']        = $user->id;
		$this->infos['login']     = $user->login;
		$this->infos['status']    = $user->status;		
		$this->infos['lastname']  = $user->lastname;
		$this->infos['firstname'] = $user->firstname;
		$this->infos['email']     = $user->email;		
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
		return Outils::filter($this->infos['lastname'],FILTER_STRING);
	}
	
	public function getPrenom() {
		return Outils::filter($this->infos['firstname'],FILTER_STRING);
	}
	
	public function getStatut() {
		if(isset($this->infos['status'])){
			return Outils::filter($this->infos['status'], FILTER_STRING);
		}else{
			return "";
		}
	}
	
	public function getLogin() {
		return Outils::filter($this->infos['login'], FILTER_STRING);
	}
	
	public function getEmail(){
		return Outils::filter($this->infos['email'], FILTER_STRING);
	}
	
	public function getInfo(){
		$userInfos = null;
		if(!empty($this->infos)){
			$userInfos["id"]        = intval($this->infos["id"]);
			$userInfos['login']     = Outils::filter($this->infos['login']  , FILTER_STRING);
			$userInfos['status']    = Outils::filter($this->infos['status'] , FILTER_STRING);
			$userInfos['lastname']  = Outils::filter($this->infos['lastname']    , FILTER_STRING);
			$userInfos['firstname'] = Outils::filter($this->infos['firstname'] , FILTER_STRING);
			$userInfos['email']     = Outils::filter($this->infos['email']   , FILTER_STRING);					
		}
		return $userInfos;
	}
}
?>