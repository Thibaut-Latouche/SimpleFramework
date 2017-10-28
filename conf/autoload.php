<?php
/*******************************************************************************
 * AUTOLOAD de l'application
*******************************************************************************/


class Autolaod_Exception extends Exception{
    
  public function __construct($message, $code = 0, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }

   public function __toString() {
    return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
  }

}

function __autoload($className) {
  $tclass = explode('_', $className);
  $repertoire = $tclass[0];
  $file = MODULES_REPOSITORY . $repertoire . "/{$className}.php";
  var_dump($file);
  if (is_file($file)) {
    require_once($file);
  }
  else {
    throw new Autolaod_Exception("Erreur Autoload : le fichier {$file} n'existe pas");
   }
 }
?>
