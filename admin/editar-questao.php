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

    $questao = new Simulado($mysql);
    $questao->editar($_POST['id'], $_POST['pergunta'], $_POST['resposta1'], $_POST['resposta2'], $_POST['resposta3'], $_POST['resposta4'], $_POST['correta']);
    echo "<script type='text/javascript'>";
    echo "alert('Questão editada com Sucesso!');";
    echo "window.location='consulta_questoes.php'";
    echo "</script>";
        die();
}

$questao = new Simulado($mysql);
$sim = $questao->encontrarPorId($_GET['id']);

?>

<!DOCTYPE html> 
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Editar Questão</title>
</head>
<body> 
<div id="container">
    <h1>Editar Questão</h1>
    <form action="editar-questao.php" method="POST">
        <p>
        <label for="">Questão: </label>
        <input class="campo-form" type="text" name="pergunta" id="pergunta" value="<?php echo $sim['pergunta']; ?>" />
        </p>
        <p>
        <label for="">Resposta A: </label>
        <input class="campo-form" type="text" name="resposta1" id="resposta1" value="<?php echo $sim['resposta1']; ?>" />
        </p>
        <p>
        <label for="">Resposta B: </label>
        <input class="campo-form" type="text" name="resposta2" id="resposta2" value="<?php echo $sim['resposta2']; ?>" />
        </p>
        <p>
        <label for="">Resposta C: </label>
        <input class="campo-form" type="text" name="resposta3" id="resposta3" value="<?php echo $sim['resposta3']; ?>" />
        </p>
        <p>
        <label for="">Resposta D: </label>
        <input class="campo-form" type="text" name="resposta4" id="resposta4" value="<?php echo $sim['resposta4']; ?>" />
        </p>
        <p>
        <label for="">Correta: </label>
        <input class="campo-form" type="text" name="correta" id="correta" value="<?php echo $sim ['correta']; ?>" />
        </p>
        <p>
        <input type="hidden" name="id" value="<?php echo $sim['id']; ?>" />
        <button class="botao">Salvar</button>
        <br><br>
        <a type='button' class='botao' value='Voltar' href='consulta_questoes.php' >VOLTAR</a>
    </form>
</div>
</body>
</html>