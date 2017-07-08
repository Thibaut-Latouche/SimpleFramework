<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
require_once("./conf/config.php");
require_once("./conf/autoload.php");
$varArray = array();
$c = "";
$sidebar = "";
$dataPost = null;
session_start();
$auth = Auth::getInstance();
try {
    $zone = (!$auth->isConnect()) ? "default" : $auth->getStatut();
    $action = (isset($_GET["a"])) ? Outils::filter($_GET["a"], FILTER_STRING) : $auth->getStatut();
    $postdata = (!empty($_POST)) ? $_POST : array();
    $varArray["action"] = $action;
    switch ($zone) {
        case "developer":
            $index = INDEX_REPOSITORY . "developer.part.php";
            $sidebar = Outils_Ui::display("menu/sidebar-menu.tpl",$varArray);
            $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/developer.html.php";
            break;
        case "default":
        default:
            $index = INDEX_REPOSITORY . "default.part.php";
            $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/public.html.php";
    }
    include_once(INDEX_REPOSITORY . $zone . ".part.php");
} catch (Exception $e) {
    var_dump($e);
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
