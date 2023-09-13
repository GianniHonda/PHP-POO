<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
   private $expectador;
   private $filme;
   
   public function __construct($expectador, $filme) {
       $this->expectador = $expectador;
       $this->filme = $filme;
       $this->filme->setViews($this->filme->getViews() + 1);
       $this->expectador->setTotAssistido($this->expectador->getTotAssistido() + 1);
   }
   
   public function avaliar() {
       $this->filme->setAvaliacao(5);
   }
   public function avaliarNota($nota) {
       $this->filme->setAvaliacao($nota);
   }
   public function avaliarPorc($porc) {
       $nova = 0;
       if ($porc <= 20) {
           $nova = 3;
       }elseif ($porc <= 50) {
            $nova = 5;
        }elseif ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
   }
   
   public function getExpectador() {
       return $this->expectador;
   }

   public function getFilme() {
       return $this->filme;
   }

   public function setExpectador($expectador): void {
       $this->expectador = $expectador;
   }

   public function setFilme($filme): void {
       $this->filme = $filme;
   }


}
