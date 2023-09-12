<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
        require_once 'Professor.php';
      
       
        $a1 = new Aluno();
        $a1->setNome('Pedro');
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo('M');
        $a1->setCurso('Informática');
        $a1->pagarMensalidade();
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome('Jubileu');
        $b1->setBolsa(12.5);
        $b1->setCurso('Administração');
        $b1->setIdade(17);
        $b1->pagarMensalidade();
        print_r($b1);
        
        $t1 = new Tecnico();
        $t1->setNome("Vanuza");
        $t1->setMatricula(1113);
        $t1->setIdade(25);
        $t1->setCurso("Elétrica e eletrônica");
        $t1->setSexo("F");
        $t1->setRegistroProfissional(1553);
        $t1->pagarMensalidade();
        print_r($t1);
        
        $p1 = new Professor();
        $p1->setNome("Glaucia");
        $p1->setIdade(59);
        $p1->setSexo("F");
        $p1->setEspecialidade("Direito Trabalhista");
        $p1->setSalario(5000.00);
        $p1->receberAumento(500);
        print_r($p1);
        
        ?>
        </pre></body>
</html>
