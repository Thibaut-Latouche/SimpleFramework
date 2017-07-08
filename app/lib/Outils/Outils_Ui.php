<?php

require_once(SMARTY_LIB);

class Outils_Ui {
    public static function display($templateName, $array) {
        $smarty = new Smarty ();
        if (!is_null($array)) {
            foreach ($array as $key => $value) {
                $smarty->assign($key, $array[$key]);
            }
        }        
        $smarty->assign("dico",  Outils::loadDictionnary());
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
