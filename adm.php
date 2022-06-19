<?php
session_start();
ob_start();
include_once 'src/conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>

<?php
require 'src/Funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ADM do Simulado Piloto Master</title>
</head>

<body>
<div id="container">
<h1>Piloto Master Simulados ADM</h1>
<p><a href="admin/inserir_questao.php">  Inserir Questão </a></p>
<p><a href="admin/consulta_questoes.php"> Consultar Questões </a></p>
<a type='button' class="botao" value='Voltar' href='sair.php' >SAIR</a>
</div>   
</body>

</html>