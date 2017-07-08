<?php
/*******************************************************************************
 * AUTOLOAD de l'application
*******************************************************************************/
function __autoload($className) {
  $tclass = explode('_', $className);
  $repertoire = $tclass[0];
  $file = MODULES_REPOSITORY . $repertoire . "/{$className}.php";
  var_dump($file);
  if (is_file($file)) {
    require_once($file);
  }
  else {
    throw new Exception("Erreur Autoload : le fichier {$file} n'existe pas");
   }
 }
?>
