<?php
require_once("./conf/config.php");
require_once("./conf/autoload.php");

use SimpleFramework\Auth\Auth;
use SimpleFramework\Auth\AuthException;
use SimpleFramework\Outils\Outils;
use SimpleFramework\Outils\OutilsUi;

$varArray   = array();
$sidebar    = "";
$errors     = "";
$Controller = null;
$dataPost   = null;
session_start();
$auth = Auth::getInstance();
try {
    $zone = (!$auth->isConnect()) ? "default" : $auth->getStatut();
    $action = (isset($_GET["a"])) ? Outils::filter($_GET["a"], FILTER_STRING) : "homepage";
    $postdata = (!empty($_POST)) ? $_POST : array();
    $varArray["action"] = $action;    
    switch ($zone) {
        case "developer":         
            $Controller = new \SimpleFramework\Controller\DeveloperController(); 
            $sidebar    = OutilsUi::display("menu/sidebar-menu.tpl",$varArray);
            $squelette  = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/developer.html.php";
            break;
        case "default":
        default:            
            $Controller = new \SimpleFramework\Controller\DefaultController();
            $squelette  = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/public.html.php";
    }          
    if(!method_exists($Controller, $action)){
      $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/error-404.html";
    }else{              
      $c = $Controller->$action();
    }    
} catch(AuthException $ae){
    $errors = $ae->getMessage();
}catch (Exception $e) {
    throw($e);
}
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
    ob_clean();
    echo $c;
} else {
    ob_start();
    include_once($squelette);
    $html = ob_get_contents();
    ob_end_clean();
    echo $html;
}