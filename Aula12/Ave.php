<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    public function alimentar() {
        echo '<p>Comendo frutas</p>';
    }

    public function emitirSom() {
        echo '<p>Som de ave</p>';
    }

    public function locomover() {
        echo '<p>Voando</p>';
    }
    public function fazerNinho() {
        echo '<p>Construindo um ninho</p>';
    }
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }


}
