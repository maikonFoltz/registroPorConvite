<?php
	require './seguranca/sesao.php';

	$email = '';
    $codigo = '';

    $sql = "SELECT nome, codigo FROM usuario WHERE id = '".addslashes($_SESSION['logado'])."'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0) {
	$dado = $sql->fetch();
	$email = $dado['nome'];
	$codigo = $dado['codigo'];
}


?>
