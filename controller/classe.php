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
            return $cor;
        }
    }
    
  /* Por questões de boa prática, não devemos incluir linha de código após a finalização da classe, e não teria lógica.
   * correto é chamar a classe por require_once e assim estânciar o mesmo. 
   * $carro = new Carro;
    $carro->marca = "Kombi"; //Como a váriavel é chamada via set e get o correto seria $carro->getMarca, mas conforme a classe acima não foi indicado como váriável.
    $carro->cor = "branca"; // conforme a classe acima, o correto é chamar $carro->setCor;
    
    echo $carro->marca; //vai da erro pois seria getMarca ele não incluido na classe acima
    echo $carro->cor;*/ //vai da erro $carro->getCor;
    
?>