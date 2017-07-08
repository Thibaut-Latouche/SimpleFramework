<?php
define("SESSION_NAME","MyFramework");
define("APPLICATION_NAME", "MyFramework/");
define('SERVEUR_URL'     , "http://localhost/");
define("TITLE"           , "MyFramework");
define("WEB_REPOSITORY"  , "/home/w3rl3gion/web/");
define("CONFIG_REPOSITORY", WEB_REPOSITORY.APPLICATION_NAME."conf/");
/*******************************************************************************
* Sous-fichiers de configuration
*******************************************************************************/
require_once(CONFIG_REPOSITORY . "conf_path.php");
require_once(CONFIG_REPOSITORY . "conf_database.php");
require_once(CONFIG_REPOSITORY . "conf_appli.php");
require_once(CONFIG_REPOSITORY . "conf_mf.php");
?>
