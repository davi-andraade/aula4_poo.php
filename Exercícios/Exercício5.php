<?php

abstract class Funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
    protected float $salario;

    public function __construct($nome, $salario){
        parent::__construct($nome);
        $this->salario = $salario;
    }

    public function calcularSalario(){
        return $this->salario;
    }
}

class FuncionarioComissionado extends Funcionario{
    protected float $salarioBase;
    protected float $vendas;

    public function __construct($nome, $salarioBase, $vendas){
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->vendas = $vendas;
    }

    public function calcularSalario(){
        return $this->salarioBase + ($this->vendas * 0.10);
    }
}
$funcionario1 = new FuncionarioFixo("Davi", 2500);
echo $funcionario1->getNome() . ": R$ "  . $funcionario1->calcularSalario() ."<br>" ;
$funcionario2 = new FuncionarioComissionado("Miguel", 1800, 8000);
echo $funcionario2->getNome() . ": R$ " . $funcionario2->calcularSalario() ."<br>";

?>