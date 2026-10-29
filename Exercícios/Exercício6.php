<?php

abstract class ContaBancaria {
    protected string $titular;
    protected float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
        }
    }

    public function getSaldoAtual(){
        return $this->saldo - $this->calcularTarifa();
    }

    abstract public function calcularTarifa();
}

class ContaCorrente extends ContaBancaria {
    public function calcularTarifa(){
        return 15;
    }
}

class ContaPoupança extends ContaBancaria {
    public function calcularTarifa(){
        return 0;
    }
}

$contaCorrente = new ContaCorrente('Davi', 500);
$contaCorrente->depositar(200);
echo "Conta Corrente<br>";
echo "Saldo: R$ " . number_format($contaCorrente->getSaldo(), 2, ',', '.') . "<br>";
echo "Tarifa: R$ " . number_format($contaCorrente->calcularTarifa(), 2, ',', '.') . "<br>";
echo "Saldo Atual: R$ " . number_format($contaCorrente->getSaldoAtual(), 2, ',', '.') . "<br><br>";

$contaPoupanca = new ContaPoupança('Davi', 500);
$contaPoupanca->depositar(200);
echo "Conta Poupança<br>";
echo "Saldo: R$ " . number_format($contaPoupanca->getSaldo(), 2, ',', '.') . "<br>";
echo "Tarifa: R$ " . number_format($contaPoupanca->calcularTarifa(), 2, ',', '.') . "<br>";
echo "Saldo Atual: R$ " . number_format($contaPoupanca->getSaldoAtual(), 2, ',', '.');

?>
