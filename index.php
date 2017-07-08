<?php
require_once("conf/config.php");
require_once("conf/autoload.php");
/*******************************************************************************
 * Default values
 ******************************************************************************/
$index     =  INDEX_REPOSITORY . "public.part.php";
/******************************************************************************/
$varArray = null;
$squelette ="";
$titre = "";
$c = "";
$menu="";
$zoneConnexion="";
$zone = "";
$footer = "";
$sidebar = "";
$dataPost = null;
session_start();
$auth = Auth::getInstance();
try {
  $zone = (!$auth->isConnect()) ? "public" : $auth->getStatut();     
  $action = (isset($_GET["a"])) ? Outils::filter($_GET["a"],FILTER_STRING) : $auth->getStatut();    
  $postdata = (!empty($_POST)) ? $_POST : array();     
  include_once(INDEX_REPOSITORY.$zone.".part.php");        
} catch (Exception $e) {
    var_dump($e);
}

if(isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')
{
  if( !$auth->isConnect() ){
    $authorizeUrls = array("do-login", "user-login", "user-logout", "user-session", "quitter");
    if( !in_array($action, $authorizeUrls) ) {
      header('HTTP/1.1 401 Unauthorized');
    }
  }
  ob_clean();
  echo $c;
}
else{
	ob_start();	
	$html = ob_get_contents();
	ob_end_clean();
  echo $html;
}

 
