<?php
abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membro;
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMembro() {
        return $this->membro;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setMembro($membro): void {
        $this->membro = $membro;
    }


}
