<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projetoint";

//criar conexao
$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conn){
    die("falha: " . mysqli_connect_error());
}else{
    //conectado
}
