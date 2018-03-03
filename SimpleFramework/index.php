<?php
namespace SimpleFramework;
require_once("./conf/config.php");
require_once("./conf/autoload.php");

use SimpleFramework\Auth\Auth;
use SimpleFramework\Outils\Outils;
use ReflectionMethod;
use SimpleFramework\Outils\OutilsUi;

$varArray = array();
$sidebar = "";
$dataPost = null;
session_start();
$auth = Auth::getInstance();
try {
    $zone = (!$auth->isConnect()) ? "homepage" : $auth->getStatut();
    $action = (isset($_GET["a"])) ? Outils::filter($_GET["a"], FILTER_STRING) : $zone;
    $postdata = (!empty($_POST)) ? $_POST : array();
    $varArray["action"] = $action;
    switch ($zone) {
        case "developer":
            $index = INDEX_REPOSITORY . "developer.part.php";
            $sidebar = OutilsUi::display("menu/sidebar-menu.tpl",$varArray);
            $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/developer.html.php";
            break;
        case "default":
        default:
            $index = INDEX_REPOSITORY . "default.part.php";
            $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/public.html.php";
    }    
    $Controller        = "\SimpleFramework\Controller\\" . ucfirst($zone) . "Controller";
    $CurrentController = new $Controller;
    if(!method_exists($CurrentController, $action)){
      $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/error-404.html";
    }else{
      $c = $CurrentController->$action();
    }    
} catch (Exception $e) {
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