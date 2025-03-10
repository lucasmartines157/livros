
<?php
class SistemaDeEstoque {
    public $estoque;

    public function __construct() {
        $this->estoque = [];
    }

    public function adicionar_livro($livro) {
        $this->estoque[$livro->titulo] = $livro;
    }

    public function consultar_estoque($titulo) {
        if (isset($this->estoque[$titulo])) {
            return $this->estoque[$titulo]->verificar_disponibilidade();
        }
        return false;
    }

    public function reservar_livro($titulo) {
        if (isset($this->estoque[$titulo]) && $this->estoque[$titulo]->verificar_disponibilidade()) {
            return $this->estoque[$titulo]->reservar();
        }
        return false;
    }
}
?>
