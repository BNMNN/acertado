<?php
session_start();

unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioEmail'],
    $_SESSION['usuarioSenha']
);

//redirecionar para pagina de login
header("Location: login.php");
?>