<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    public function alimentar() {
        echo '<p>Comendo vegetais</p>';
    }

    public function emitirSom() {
        echo '<p>Som de réptil</p>';
    }

    public function locomover() {
        echo '<p>Rastejando</p>';
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
