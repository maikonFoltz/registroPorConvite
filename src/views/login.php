<?php  
    session_start();
    require '../../dao/connection/Connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        //aqui vai ser feita a verificação para ver se usuario existe na base de dados.....
        if(isset($_POST['email']) && !empty($_POST['email'])){
    
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            
            $sql = ("SELECT id FROM usuario WHERE nome = '$email' AND senha = '$senha'");
            $sql = $pdo->query($sql);

            
            if($sql->rowCount() > 0) {
               
                $dado = $sql->fetch();
                print_r($dados);
                $_SESSION['logado'] = $dado['id'];
                $_SESSION['nome'] = $dado['nome'];
                header("Location: ./principal.php");
                exit;
           
            }
        }

    ?>

    <form action="" method="post">
        E-mail: <br>
        <input type="email" name="email" id=""> <br><br>
        Senha: <br>
        <input type="password" name="senha" id=""> <br><br>
        <input type="submit" value="Entrar">

    </form>
</body>
</html>