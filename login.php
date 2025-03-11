<?php
session_start();
require_once 'src/Pessoa.php';
use PHP\Modelo\Pessoa;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuarioLogado = null;
    foreach ($_SESSION['usuarios'] as $usuario) {
        if ($usuario->getLogin() == $login && $usuario->verificarSenha($senha)) {
            $usuarioLogado = $usuario;
            break;
        }
    }

    if ($usuarioLogado) {
        echo "Bem-vindo, " . $usuarioLogado->imprimir();
    } else {
        echo "Login ou senha inválidos!";
    }
}
?>

<form method="POST" action="login.php">
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Entrar</button>
</form>
