<?php
define("SESSION_NAME","SimpleFramework");
define("APPLICATION_NAME", "SimpleFramework/");
define('SERVEUR_URL'     , "http://localhost/");
define("TITLE"           , "Simple Framework");
define("WEB_REPOSITORY"  , "/var/www/html/");
define("CONFIG_REPOSITORY", WEB_REPOSITORY.APPLICATION_NAME."conf/");
/*******************************************************************************
* Sous-fichiers de configuration
*******************************************************************************/
require_once("conf/conf_path.php");
require_once(SIMPLE_FRAMEWORK_CONF_REPOSITORY. "conf_appli.php");
require_once(CONFIG_REPOSITORY . "conf_database.php");
require_once(CONFIG_REPOSITORY . "conf_mf.php");
?>
