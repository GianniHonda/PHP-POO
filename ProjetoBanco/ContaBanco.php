<?php

class ContaBanco {
   public $numConta;
   protected $tipo;
   private $dono;
   private $saldo;
   private $status;
   
   public function abrirConta($t) {
       $this->setTipo($t);
       $this->setStatus(true);
       if ($t == "CC") {
           $this->setSaldo(50);
       }elseif ($t == "CP") {
           $this->saldo = 150;
       }
   }
   
   public function fecharConta() {
       if ($this->getSaldo() > 0) {
           echo '<p>Conta ainda tem dinheiro, não posso fechá-la!</p>';
       } elseif ($this->getSaldo() < 0) {
           echo '<p>Conta está em débito, impossível encerrar!</p>';
       } else {
           $this->setStatus(false);
           echo '<p>Conta de '.$this->getDono().' fechada com sucesso </P>';
       }
   }
   
   public function depositar($v) {
       if ($this->getStatus()) {
           $this->setSaldo($this->getSaldo() + $v);
           echo '<p>Depósito de R$ '.$v.' na conta de '.$this->getDono().'</p>';
       }else {
           echo '<p>Conta fechada, não consigo depositar!</p>';
       }
   }
   
   public function sacar($v) {
       if ($this->getStatus()) {
           if ($this->getSaldo() >= $v) {
               $this->setSaldo($this->getSaldo() - $v);
               echo '<p>Saque de R$'.$v.' autorizado na conta de '.$this->getDono().'</p>';
           } else {
               echo '<p>Saldo insuficiênte para saque.</p>';
           }
       } else {
           echo '<p>Não posso sacar de uma conta fechada.</p>';
       }
   }
   
   public function pagarMensal() {
       if ($this->getTipo() == "CC") {
           $v = 12;
       }else if ($this->getTipo() == "CP") {
           $v = 20;
       }
       if ($this->getStatus()) {
           $this->setSaldo($this->getSaldo() - $v);
           echo '<p>Mensalidade de R$ '.$v.' debitado na conta de '.$this->getDono().'</p>';
       }else {
           echo '<p>Problemas com a conta, não posso cobrar.</p>';
       }
   }
   
   public function __construct() {
       $this->setSaldo(0);
       $this->setStatus(false);
       echo '<p>Conta criada com sucesso!</p>';
   }
   
   public function getNumConta() {
       return $this->numConta;
   }

   public function getTipo() {
       return $this->tipo;
   }

   public function getDono() {
       return $this->dono;
   }

   public function getSaldo() {
       return $this->saldo;
   }

   public function getStatus() {
       return $this->status;
   }

   public function setNumConta($numConta): void {
       $this->numConta = $numConta;
   }

   public function setTipo($tipo): void {
       $this->tipo = $tipo;
   }

   public function setDono($dono): void {
       $this->dono = $dono;
   }

   public function setSaldo($saldo): void {
       $this->saldo = $saldo;
   }

   public function setStatus($status): void {
       $this->status = $status;
   }



  
}
