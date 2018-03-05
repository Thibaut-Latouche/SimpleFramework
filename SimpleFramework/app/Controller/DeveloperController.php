<?php
namespace SimpleFramework\Controller;

use SimpleFramework\Auth\Auth;
use SimpleFramework\GitHistory\GitHistory;
use SimpleFramework\User\UserBLL;
use SimpleFramework\Developer\DeveloperBLL;
use SimpleFramework\Entities\EntitiesBLL;
use SimpleFramework\Role\RoleBLL;
use SimpleFramework\Outils\OutilsUi;

class DeveloperController extends DefaultController{

    public function varArray(){      
      $varArray = array();
      $varArray["history"]         = GitHistory::showLastCommits();
      $varArray["countDevelopers"] = count(DeveloperBLL::read());
      $varArray["countUsers"]      = count(UserBLL::read());
      return OutilsUi::display("homepage/homepage.tpl", $varArray);
    }

    public function logout(){    
      Auth::getInstance()->quit();
      header("Location: index.php");
    }

    public function entities(){
      $varArray = array();
      $varArray["entities"] = EntitiesBLL::read();
      return OutilsUi::display("entities/list.tpl", $varArray);
    }

    public function roles(){
      $varArray = array();
      $varArray["roles"] = RoleBLL::read(null,TRUE);
      return OutilsUi::display("roles/roles.tpl",$varArray);  
    }

    public function messages(){
      $varArray = array();
      return OutilsUi::display("messages/messages.tpl",$varArray);
    }

    public function users(){
      $varArray = array();
      $varArray["users"] = UserBLL::read();
      return OutilsUi::display("users/users.tpl",$varArray);
    }

    public function todo(){
      $varArray = array();
      return OutilsUi::display("todo/todo.tpl",$varArray);
    }

    public function developers(){
      $varArray = array();
      $varArray["developers"] = DeveloperBLL::read();
      return OutilsUi::display("developers/developers.tpl",$varArray);
    }

    public function profil(){
      $varArray = array();
      return OutilsUi::display("profil/profil.tpl",$varArray);
    }

}