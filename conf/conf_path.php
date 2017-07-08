<?php
define('BASE_URL'   , SERVEUR_URL . APPLICATION_NAME);
define('BASE_FILE'  , WEB_REPOSITORY. APPLICATION_NAME);
define('APP_REPOSITORY'    , BASE_FILE . "app/");
define('LOG_REPOSITORY'    , BASE_FILE . "log/");
define("MODULES_REPOSITORY", APP_REPOSITORY . "lib/");
define('UI_REPOSITORY'     , APP_REPOSITORY . "ui/"); 
define('INDEX_REPOSITORY'  , APP_REPOSITORY . "indexes/");
define('SMARTY_LIB'        , BASE_FILE . "vendors/Smarty/Smarty.class.php");
define('DICTIONNARY_REPOSITORY' , APP_REPOSITORY . "dictionnary/");
?>
