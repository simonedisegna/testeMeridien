<?php
	
    class Carro
    {
        public $marca;
        private $cor;
        
        private function __construct()
        {
            echo "instanciando a classe";
        }
        
        public function setCor($cor)
        {
            $this->cor = $cor;
        }
        
        public function getCor()
        {
            return $cor; // faltou o $this return $this->cor;
        }
    }
    
  /* Por questões de boa prática, não devemos incluir linha de código após a finalização da classe.
   * correto é chamar a classe por require_once e assim estânciar o mesmo. 
   * $carro = new Carro;
    $carro->marca = "Kombi"; //váriável pública esta correta
    $carro->cor = "branca"; // a váriavel é privada por esse motivo deve ser utilizada pela chamada set e get, o correto seria $carro->setCor;
    
    echo $carro->marca; 
    echo $carro->cor;*/ //vai da erro $carro->getCor;
    
?>