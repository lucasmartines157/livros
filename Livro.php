<?php
namespace PHP\Modelo;

class Livro {
    protected string $titulo;
    protected string $autor;
    protected float $preco;

    public function __construct(string $titulo, string $autor, float $preco) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
    }

    public function imprimir(): string {
        return "Título: " . $this->titulo . ", Autor: " . $this->autor . ", Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }
}
?>

