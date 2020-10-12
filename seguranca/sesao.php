<?php
session_start();
require './dao/connection/Connection.php';

if(empty($_SESSION['logado'])) {
	header("Location: ./src/views/login.php");
	exit;
}


?>