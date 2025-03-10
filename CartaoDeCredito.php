<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class CartaoDeCredito {
    public $numero;
    public $validade;
    public $cvv;

    public function __construct($numero, $validade, $cvv) {
        $this->numero = $numero;
        $this->validade = $validade;
        $this->cvv = $cvv;
    }

    public function validar_pagamento($valor) {
        // Lógica de validação simples para simulação de pagamento
        echo "Pagamento de R$" . number_format($valor, 2, ',', '.') . " validado com sucesso!<br>";
        return true;
    }
}
?>

</body>
</html>