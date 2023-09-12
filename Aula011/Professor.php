<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    public function receberAumento($valor) {
        $this->setSalario($this->getSalario() + $valor);
        echo "<p>O professor $this->nome, recebeu um aumento de $valor.</p>";
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }


}
