<?php

require_once(SMARTY_LIB);

class Outils_Ui {
    public static function display($templateName, $array = array()) {
        $smarty = new Smarty ();
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
        unset($smarty);
        unset($html);
    }
}
?>
