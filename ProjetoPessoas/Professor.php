<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
   private $especialidade;
   private $salario;
   
   public function receberAumento($aum) {
       $this->salario += $aum;
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
