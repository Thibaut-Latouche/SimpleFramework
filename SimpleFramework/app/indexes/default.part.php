<?php
switch ($action){
	
	case "do-login":
		try{
			$login     = $_POST["auth_login"];
			$password  = $_POST["auth_pass"];
			$auth->verify($login, $password);
			header("Location: index.php");
		}catch(Exception $e){
			$errorMessage = $e->getMessage();
		}
	break;
	
	default:
		
}