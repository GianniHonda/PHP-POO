<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
   private $matr;
   private $curso;
   
   public function cancelarMatr() {
       echo '<p>Matrícula será cancelada</p>';
   }
   public function getMatr() {
       return $this->matr;
   }

   public function getCurso() {
       return $this->curso;
   }

   public function setMatr($matr): void {
       $this->matr = $matr;
   }

   public function setCurso($curso): void {
       $this->curso = $curso;
   }


}
