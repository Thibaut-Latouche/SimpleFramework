<?php
namespace SimpleFramework\Outils;

use \Smarty;

require_once(SMARTY_LIB);

class OutilsUi {
    public static function display($templateName, $array = array()) {
        $smarty = new Smarty();
        $smarty->setTemplateDir(SIMPLE_FRAMEWORK_APP_REPOSITORY."templates/");
        $smarty->setCompileDir(SIMPLE_FRAMEWORK_APP_REPOSITORY."templates_c/");
        $smarty->setCacheDir(SIMPLE_FRAMEWORK_APP_REPOSITORY."cache/");
        if (!empty($array)) {
            foreach ($array as $key => $value) {
                $smarty->assign($key, $array[$key]);
            }
        }
        ob_start();
        $smarty->display($templateName);
        $html = ob_get_contents();
        ob_end_clean();
        return $html;      
    }
}
?>
