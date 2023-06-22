<?php


class Caneta {
  public $modelo;
  private $cor;
  private $ponta;
  private $tampada;
  
  public function __construct($modelo, $cor, $ponta) {
      $this->modelo = $modelo;
      $this->cor = $cor;
      $this->ponta = $ponta;
      $this->setTampada(true);
  }

  public function getModelo() {
      return $this->modelo;
  }

  public function getCor() {
      return $this->cor;
  }

  public function getPonta() {
      return $this->ponta;
  }

  public function getTampada() {
      return $this->tampada;
  }

  public function setModelo($modelo): void {
      $this->modelo = $modelo;
  }

  public function setCor($cor): void {
      $this->cor = $cor;
  }

  public function setPonta($ponta): void {
      $this->ponta = $ponta;
  }

  public function setTampada($tampada): void {
      $this->tampada = $tampada;
  }


  }

