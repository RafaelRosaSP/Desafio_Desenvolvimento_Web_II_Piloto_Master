<?php
session_start();
ob_start();
include_once '../src/conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>
<?PHP
include '../src/Funcoes.php';

$questao = new Simulado($mysql);
$questoes = $questao->exibirQuestao();

?>

<!DOCTYPE html>
</html lang="pt-br"> 
<head>
    <title>Exibir Questões do Simulado</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div id="container">
        <h1>Exibir Questões do Simulado</h1>
        <p>
        <?php foreach ($questoes as $questao) : ?>
        </p>
        <p>
        <label for="">Questão:</label> <?php echo $questao['pergunta']; ?>
        </p>
        <p>
        <label for="">Resposta A:</label> <?php echo $questao['resposta1']; ?>
        </p>
        <p>
        <label for="">Resposta B:</label> <?php echo $questao['resposta2']; ?>
        </p>
        <p> 
        <label for="">Resposta C:</label> <?php echo $questao['resposta3']; ?>    
        </p>
        <p> 
        <label for="">Resposta D:</label> <?php echo $questao['resposta4']; ?>    
        </p>
        <p>
        <label for="">Correta:</label> <?php echo $questao['correta']; ?>  
        </p>
        <p>
        <nav>
            <a class="botao" href="editar-questao.php?id=<?php echo $questao['id']; ?>">Editar</a>
            <a class="botao" href="excluir-questao.php?id=<?php echo $questao['id']; ?>">Excluir</a>
            <br><br><br>
        </nav>
        </p>
        <?php endforeach; ?>
        <br>
        <a type='button' class='botao' value='Voltar' href='../adm.php' >VOLTAR</a>
    </div>
</body>
</html>

