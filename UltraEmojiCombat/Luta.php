<?php
require_once 'Lutador.php';
class Luta {
//atributos
private $desafiado;
private $desafiante;
private $rounds;
private $aprovada;
//métodos públicos
public function marcarLuta($l1, $l2) {
    if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
        $this->aprovada = true;
        $this->desafiado = $l1;
        $this->desafiante = $l2;
}else {
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
    }
}
public function lutar() {
    if ($this->aprovada) {
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0,2);
        switch ($vencedor) {
            case 0: //empate
                echo '<p>Empate!</p>';
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1: //desafiado vence
                echo '<p>'.$this->desafiado->getNome().' venceu</p>';
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 2: //desafiante vence
                echo '<p>'.$this->desafiante->getNome().' venceu</p>';
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                break;
        }
    }else {
        echo '<p>Luta não pode acontecer</p>';
    }
}
//métodos especiais
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }


}