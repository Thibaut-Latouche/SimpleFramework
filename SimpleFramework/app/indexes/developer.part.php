<?php
switch ($action) {
    case "developer":
        $varArray["history"] = GitHistory::showLastCommits();
        $varArray["countDevelopers"] = count(Developer_BLL::read());
        $varArray["countUsers"] = count(User_BLL::read());
        $c = Outils_Ui::display("homepage/homepage.tpl", $varArray);
        break;
    
    case "lock":
        $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/lock.html";
        break;
        

    case "logout":
        Auth::getInstance()->quit();
        header("Location: index.php");
        break;

    case "entities":
        $varArray["entities"] = Entities_BLL::read();
        $c = Outils_Ui::display("entities/list.tpl", $varArray);
        break;

    case "create-entity":
        $name = Outils::filter($postdata["name"], FILTER_STRING);
        $description = Outils::filter($postdata["description"], FILTER_STRING);
        Entities_BLL::create($name, $description);
        break;
    
    
    case "messages":
        $c = Outils_Ui::display("messages/messages.tpl",$varArray);
        break;
    
    case "users":
        $varArray["users"] = User_BLL::read();
        $c = Outils_Ui::display("users/users.tpl",$varArray);
        break;
    
    case "developers":
        $varArray["developers"] = Developer_BLL::read();
        $c = Outils_Ui::display("developers/developers.tpl",$varArray);
        break;
    
    case "roles":
        $varArray["roles"] = Role_BLL::read(null,TRUE);
        $c = Outils_Ui::display("roles/roles.tpl",$varArray);
        break;
    
    case "todo":
        $c = Outils_Ui::display("todo/todo.tpl",$varArray);
        break;
    
    case "profil":
        $c = Outils_Ui::display("profil/profil.tpl",$varArray);
        break;
    
    default:
        $squelette = SIMPLE_FRAMEWORK_APP_REPOSITORY . "ui/pages/error-404.html";
}