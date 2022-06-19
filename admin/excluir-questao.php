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
require '../src/Funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questao = new Simulado($mysql);

    {
        $questao->remover($_POST['id']);
        echo "<script type='text/javascript'>";
        echo "alert('Questão excluida com sucesso!');";
        echo "window.location='consulta_questoes.php'";
        echo "</script>";
    }

    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Questão</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir essa questão?</h1>
        <form method="post" action="excluir-questao.php">
            <p>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
            <button class="botao" >Excluir</button>
            </p>
        </form>
    </div>
</body>

</html>