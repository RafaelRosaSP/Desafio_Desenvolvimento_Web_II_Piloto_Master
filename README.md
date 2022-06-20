![Alt text](https://www.pilotomaster.com.br/pi/topo-readme2-php.jpg)

# AVALIAÇÃO PARA SUBSTITUIR PI - PHP - POO - 2 SEMESTRE FATEC ARARAS # DESAFIO PILOTOMASTER

1.	Um módulo CRUD para cadastrar as questões no simulado do site Piloto Master. 

Neste mesmo módulo.
As informações das questões cadastrados são salvas no banco de dados MySQL;

2.	Um módulo de login com sessão e Mysql. 

Neste mesmo módulo.
As informações do login são consultada no banco de dados MySQL;

## Configuração do Projeto:

- Executar a query pilotomaster.sql que se encontra na pasta Bd ou importar o arquivo no phpMyAdmin para criar aa tables necessárias.

```
- Editar o arquivo **src/Funcoes.php** 
 $this->mysql = new mysqli("nomeDoDominioOuIP:Porta", "usuarioDoMysql", "", "dbname");
        $cx = mysqli_connect("nomeDoDominioOuIP:Porta", "usuarioDoMysql", "");
        $db = mysqli_select_db($cx, "dbname");
```

```
- Editar o arquivo **src/conexao.php** 
$dbname = 'nomeDaTable' 
$host = 'nomeDoDominioOuIP:Porta' 
$dbUsuario = 'usuarioDoMysql' 
$pass =  'senhaDoUsuario'
$port = 'porta'
```
