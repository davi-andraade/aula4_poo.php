<?php

class Frete {
    public float $peso;

    public function __construct($peso){
        $this->peso = $peso;
    }

    public function calcularFrete(){
        echo 'Calculando frete...';
    }
}

class FreteNormal extends Frete {
    public function calcularFrete(){
        $valor = ($this->peso * 2) + 10;
        echo 'Frete Normal: R$' . number_format($valor, 2, ',', '.');
    }
}

class FreteExpresso extends Frete {
    public function calcularFrete(){
        $valor = ($this->peso * 5) + 20;
        echo 'Frete Expresso: R$' . number_format($valor, 2, ',', '.');
    }
}

class RetiradaLoja extends Frete {
    public function calcularFrete(){
        echo 'Retirada na Loja: Grátis!';
    }
}

$frete = new Frete(3);
$frete->calcularFrete();
echo '<br><br>';

$freteNormal = new FreteNormal(3);
$freteNormal->calcularFrete();
echo '<br><br>';

$freteExpresso = new FreteExpresso(3);
$freteExpresso->calcularFrete();
echo '<br><br>';

$retiradaLoja = new RetiradaLoja(3);
$retiradaLoja->calcularFrete();

?>