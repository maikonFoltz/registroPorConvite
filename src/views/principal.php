<?php 
  
    require '../../dao/connection/Connection.php';
    
 
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <?php echo $_SESSION['logado']; ?>
    <h1>Bem-Vindo</h1> <br><br>
  
    <h1>Área interna do sistema</h1>
    <p>Usuário: <?php echo $email ?> - <a href="sair.php">Sair</a></p>
    <p>Link: http://localhost/projeto_registroporconvite/cadastrar.php?codigo=<?php echo $codigo; ?></p>
</body>
</html>