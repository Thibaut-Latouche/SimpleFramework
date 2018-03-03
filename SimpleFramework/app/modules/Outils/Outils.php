<?php
namespace SimpleFramework\Outils;

class Outils {

    public function session_setValue($key, $value) {
        $_SESSION[SESSION_NAME][$key] = $value;
    }

    public function session_getValue($key) {
        return $_SESSION[SESSION_NAME][$key];
    }

    public static function filter($string, $flag) {    
        return filter_var($string, $flag);
    }

    public static function loadDictionnary($lang = LANG_APP) {
        $dico = null;
        $file = fopen(DICTIONNARY_REPOSITORY . "dictionnary_" . $lang . ".txt", "r");
        while (($str = fgets($file, 4096)) !== false) {
            $item = explode("|", $str);
            $dico[$item[0]] = strval($item[1]);
        }
        return $dico;
    }

    public static function getFirstObject($arrayObjects, $throwException = false) {
        if (is_null($arrayObjects)) {
            if ($throwException) {
                throw new Outils_Exception("ELEMENT_IS_EMPTY");
            } else {
                return null;
            }
        } else {
            return $arrayObjects[0];
        }
    }
   
}

?>