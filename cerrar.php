<?php
session_start();

//cierra la sesion del usuario
if(isset($_SESSION['usuario'])){
	session_destroy();
}

header("Location: index.php");
