<?php
spl_autoload_register(function ($class) {
    $parts      = explode('\\', $class); 
    if(count($parts) > 2){
      $moduleName = $parts[count($parts)-2];
      //Module       
      if(is_dir(MODULES_REPOSITORY . $moduleName)){
      foreach (scandir(MODULES_REPOSITORY . $moduleName ."/") as $file) {   
        if(strpos($file,".php")){          
          require_once MODULES_REPOSITORY . $moduleName ."/" . $file ;    
        }
      }  
      }
      if(is_dir(INDEX_REPOSITORY . $moduleName)){
      //Controller
      foreach(scandir(INDEX_REPOSITORY  ."/") as $file) {   
        if(strpos($file,".php")){                  
          require_once INDEX_REPOSITORY ."/" . $file ;    
        }
      }    
    }
    }
});
