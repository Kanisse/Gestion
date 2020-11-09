<?php

session_start();


if (isset($_POST['connexion'])){

$_SESSION['login']=$_POST['login'];

echo "Bienvenue " .$_SESSION['login'];

if ($_SESSION['login']=='user'){
	header('location: ..\MVC\user');
}
else {header('location: ..\MVC\admin');}
}

?>