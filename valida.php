<?php
session_start();
include_once("conexao.php");

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiasis; prevenir sql injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        $sql = "SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultad = mysqli_fetch_assoc($result);

        if(empty($resultad)){
            $_SESSION['loginErro']= "inválido";
            header("Location: login.php");
        }else if(isset($resultad)){
                $_SESSION['usuarioId'] = $resultad['id'];
                $_SESSION['usuarioNome'] = $resultad['nome'];
                $_SESSION['usuarioEmail'] = $resultad['email'];
                $_SESSION['usuarioSenha'] = $resultad['senha'];
            header("Location: logado.php");
        }else{
            $_SESSION['loginErro']= "inválido";
            header("Location: login.php");
        }

    }else{
        $_SESSION['loginErro'] = "Invalido";
        header("Location: login.php");
    }
?>