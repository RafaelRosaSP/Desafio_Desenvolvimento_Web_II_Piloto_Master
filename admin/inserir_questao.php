<?php
session_start();
ob_start();
include_once '../src/conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>
<?php 

require '../src/Funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $simulado = new Simulado($mysql);
    $simulado->addQuestao($_POST['pergunta'], $_POST['resposta1'], $_POST['resposta2'], $_POST['resposta3'], $_POST['resposta4'], $_POST['correta']);
    echo "<script type='text/javascript'>";
    echo "alert('Questão cadastrada com sucesso!');";
    echo "window.location='inserir_questao.php'";
    echo "</script>";
    die();
}
?>

<!DOCTYPE html> 
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Cadastro de Questões</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body> 
<div id="container">
    <h1>Inserir Questão</h1>
    <form action="inserir_questao.php" method="POST">

        <label for="pergunta">Questao: </label>
        <input class="campo-form" name="pergunta"  id="pergunta" required type="text">
        <br/>
        <label for="resposta1">Resposta A: </label>
        <input class="campo-form" name="resposta1"  id="resposta1" type="text" >
        <br/>
        <label for="resposta2">Resposta B: </label>
        <input class="campo-form" name="resposta2"  id="resposta2"type="text">
        <br/>
        <label for="resposta3">Resposta C:</label>
        <input class="campo-form" name="resposta3" id="resposta3" type="text">
        <br/>
        <label for="resposta4">Resposta D:</label>
        <input class="campo-form" name="resposta4"  id="resposta4" type="text">
        <br/>
        <label for="correta">Correta</label>
        <input class="campo-form" name="correta"  id="correta" type="text">
        <br/>
        <br><br>
        <button class="botao">Cadastrar</button>
        <br><br>
        <a type='button' class="botao" value='Voltar' href='../adm.php' >VOLTAR</a>
    </form>
</div>
</body>
</html>