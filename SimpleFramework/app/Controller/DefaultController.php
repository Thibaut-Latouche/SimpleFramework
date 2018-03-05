<?php
namespace SimpleFramework\Controller;

use SimpleFramework\Auth\Auth;
use SimpleFramework\Auth\AuthException;
use SimpleFramework\Outils\Outils;

class DefaultController{

    public function doLogin(){         
      $login    = Outils::filter($_POST["auth_login"],FILTER_STRING);
      $password = Outils::filter($_POST["auth_pass"],FILTER_STRING);
      try{
        Auth::getInstance()->verify($login, $password);
        header("Location: index.php");
       }catch(AuthException $e){     
         throw $e;
      }
    }

    public function homepage(){

    }

}