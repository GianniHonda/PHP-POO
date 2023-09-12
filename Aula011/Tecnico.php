<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    public function praticar() {
        echo "<p>O aluno $this->nome faz atividades práticas do seu curso!</p>";
    }
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional): void {
        $this->registroProfissional = $registroProfissional;
    }


}
