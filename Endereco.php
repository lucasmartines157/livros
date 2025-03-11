<?php
namespace PHP\Modelo;

class Endereco {
    protected string $rua;
    protected string $numero;
    protected string $bairro;
    protected string $cidade;
    protected string $estado;

    public function __construct(string $rua, string $numero, string $bairro, string $cidade, string $estado) {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function imprimir(): string {
        return "Rua: " . $this->rua . ", Nº: " . $this->numero . ", Bairro: " . $this->bairro . ", Cidade: " . $this->cidade . ", Estado: " . $this->estado;
    }
}
?>

