<?php
namespace PHP\Modelo;

require_once 'Endereco.php';
use PHP\Modelo\Endereco;

class Pessoa {
    protected string $cpf;
    protected string $nome;
    protected string $telefone;
    protected string $login;
    protected string $senha;
    protected Endereco $endereco;

    public function __construct(string $cpf, string $nome, string $telefone, string $login, string $senha, Endereco $endereco) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->login = $login;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        $this->endereco = $endereco;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function verificarSenha(string $senha): bool {
        return password_verify($senha, $this->senha);
    }

    public function imprimir(): string {
        return "<br>CPF: ". $this->cpf . 
               "<br>Nome: " . $this->nome . 
               "<br>Telefone: ". $this->telefone . 
               "<br>Endereço: ". $this->endereco->imprimir();
    }
}
?>
