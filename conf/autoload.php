<?php
function __autoload($class){
  $parts      = explode('\\', $class);
  moduleName = $parts[count($parts)-1];
  foreach (scandir(MODULES_REPOSITORY . $moduleName ."/") as $file) {
    if(strpos($file,".php")){
      require_once MODULES_REPOSITORY . $moduleName ."/" . $file;
    }
  }
}