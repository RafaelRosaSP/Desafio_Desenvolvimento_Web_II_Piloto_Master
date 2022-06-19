<?php
class Simulado
{
    
    private $mysql;
    public function __construct($mysql)
    {
        $this->mysql = new mysqli("localhost", "root", "", "pilotomaster");
        $cx = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($cx, "pilotomaster");

    }

    public function exemplo(){

        $cx = $this->mysqli->query("SELECT *
        FROM regulamentos") or die
        (mysqli_error($cx));
      }
    
    public function addQuestao($pergunta,  $resposta1,  $resposta2,  $resposta3, $resposta4, $correta): void
    
    {
        $insereQuestao = $this->mysql->prepare('INSERT INTO regulamentos (pergunta, resposta1, resposta2, resposta3, resposta4, correta) VALUES (?,?,?,?,?,?);');
        $insereQuestao ->bind_param('ssssss', $pergunta,  $resposta1,  $resposta2,  $resposta3, $resposta4, $correta);
        
        $insereQuestao ->execute();
    }
    public function exibirQuestao(): array
    {

        $resultado = $this->mysql->query('SELECT id, pergunta, resposta1, resposta2, resposta3, resposta4, correta FROM regulamentos');
        $questoes = $resultado->fetch_all(MYSQLI_ASSOC);

        return $questoes;
    }
    
    public function remover($id): void
    {
        $removerVenda = $this->mysql->prepare('DELETE FROM regulamentos WHERE id = ?');
        $removerVenda->bind_param('s', $id);
        $removerVenda->execute();
    }

    public function encontrarPorId($id): array
    {
        $selecionarQuestao = $this->mysql->prepare("SELECT id, pergunta, resposta1, resposta2, resposta3, resposta4, correta FROM regulamentos WHERE id = ?");
        $selecionarQuestao->bind_param('s', $id);
        $selecionarQuestao->execute();
        $questao = $selecionarQuestao->get_result()->fetch_assoc();
        return $questao;
    }

    public function editar($id, $pergunta,  $resposta1,  $resposta2,  $resposta3, $resposta4, $correta): void
    {
        $editarQuestao = $this->mysql->prepare('UPDATE regulamentos SET pergunta = ?, resposta1 = ?, resposta2 = ?,  resposta3 = ?, resposta4 = ?, correta = ? WHERE id = ?');
        $editarQuestao->bind_param('sssssss', $pergunta,  $resposta1,  $resposta2,  $resposta3, $resposta4, $correta, $id);
        $editarQuestao->execute();
    }
    
}
