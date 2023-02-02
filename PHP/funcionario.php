<?php
namespace Sistema\PHP

class Funcionario {
        private string $funcao;
        private float  $salario;
        
        public function __construct(
            string $codigo,
            string $nome,
            Endereco $endereco,
            string $telefone,
            string $sexo,
            string $bairro,
            string $funcao,
            float $salario,
           
        )
        {
            parent::__construct($codigo,$nome,$endereco,$telefone,$sexo,$bairro);
            $this->funcao    = $funcao;
            $this->salario   = $salario;
        }//fim do construtor
        

    }//fim da class funcionario
    


?>