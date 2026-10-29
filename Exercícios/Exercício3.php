<?php

abstract class Eletrodomestico {
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    abstract public function ligar();
}

class Televisao extends Eletrodomestico {
    public function ligar(){
        echo 'Televisão ' . $this->getMarca() . ': ligando a tela...';
    }
}

class Geladeira extends Eletrodomestico {
    public function ligar(){
        echo 'Geladeira ' . $this->getMarca() . ': Iniciando o sistema de refrigeração...';
    }
}

$televisao = new Televisao('LG');
$televisao->ligar();

echo '<br><br>';

$geladeira = new Geladeira('Continental');
$geladeira->ligar();

?>