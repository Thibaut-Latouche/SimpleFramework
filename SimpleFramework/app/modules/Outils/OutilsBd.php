<?php
namespace SimpleFramework\Outils;

use \PDO;

class OutilsBd {

  private static $instance;

  protected $connexion;

  private function __construct() {
      if(isset($_ENV["APP_ENV"]) && $_ENV["APP_ENV"] == "testing"){
         $this->connexion = new PDO('sqlite::memory:');
         $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      }else{
        $this->connexion = new PDO(PDO_DSN, USER, PASSWD);
        $this->connexion->query("SET NAMES utf8");
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      }      
  }

  private function __clone() {}

  static public function getInstance() {
    if (! (self::$instance instanceof self)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function getConnexion() {
    return $this->connexion;
  }
  
  public function setConnexion($connexion){
      $this->connexion = $connexion;
  }
  
  public function setLastId(){
      $_SESSION[SESSION_NAME]["lastId"] = $this->connexion->lastInsertId();
  }  
  
  public function getLastId(){
       return $_SESSION[SESSION_NAME]["lastId"];
  }
  
  public static function implodeForInClause($arrayInClause){
      $result = "";  
      for($i=0;$i<count($arrayInClause);$i++){
          $result.="'".$arrayInClause[$i]."'";
          if($i !=(count($arrayInClause) - 1)){
              $result .=",";
          }
      }
      return $result;
  }
}
?>