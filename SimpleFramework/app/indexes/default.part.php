<?php
switch ($action) {
    case "do-login":
         $login = $_POST["auth_login"];
         $password = $_POST["auth_pass"];
         $auth->verify($login, $password);
         header("Location: index.php");
        break;
    
    default:
        echo "Page not exist";
}