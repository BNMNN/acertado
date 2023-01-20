<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
    </head>
    <body>
        <h1>Login</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="valida.php">
            <label for= "inputEmail">E-mail: </label>
            <input type="email" name="email" id="inputPassword">
            <br><br>
            <label for= "inputPassword">Senha: </label>
            <input type="password" name="senha" id="inputPassword">
            <br><br>
            <input type="submit" value="Logar">
        </form>
        <P>
            <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION ['loginErro'];
                    unset ($_SESSION ['loginErro']);
                }
            ?>
        </p>
    </body>
</html>