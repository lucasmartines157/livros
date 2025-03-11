<?php
session_start();
require_once 'src/Pessoa.php';
require_once 'src/Endereco.php';
use PHP\Modelo\ Pessoa;
use PHP\Modelo\ Endereco;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $endereco = new Endereco($rua, $numero, $bairro, $cidade, $estado);
    $usuario = new Pessoa($cpf, $nome, $telefone, $login, $senha, $endereco);

    $_SESSION['usuarios'][] = $usuario; // Salva o usuário em uma sessão (ou banco de dados)

    echo "Usuário cadastrado com sucesso!";
}
?>

<form method="POST" action="cadastro.php">
    Nome: <input type="text" name="nome" required><br>
    CPF: <input type="text" name="cpf" required><br>
    Telefone: <input type="text" name="telefone" required><br>
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    Endereço: <input type="text" name="rua" required><br>
    Número: <input type="text" name="numero" required><br>
    Bairro: <input type="text" name="bairro" required><br>
    Cidade: <input type="text" name="cidade" required><br>
    Estado: <input type="text" name="estado" required><br>
    <button type="submit">Cadastrar</button>
</form>
