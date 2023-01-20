<?php
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);

$resultado_usuario = "INSERT INTO usuario (nome, email, senha, created) VALUES ('$nome', '$email', '$senha', now())";
$resultado = mysqli_query($conn, $resultado_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p>Cadastrado com sucesso</p>";
    header("Location: faleconosco.php");
}else{
    header('Location: faleconosco.php');
}