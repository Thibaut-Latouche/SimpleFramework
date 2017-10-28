<?php
Class DefaultController{
    function doLogin(){    
        try {
            $login = $_POST["auth_login"];
            $password = $_POST["auth_pass"];
            $auth->verify($login, $password);
            header("Location: index.php");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

switch ($action) {
    case "do-login":
        $Controller = new DefaultController();
        $Controller->doLogin();
        break;
    default:
        echo "Page not exist";
}