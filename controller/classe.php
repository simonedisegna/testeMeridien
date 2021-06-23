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
    
    $carro = new Carro;
    $carro->marca = "Kombi";
    $carro->cor = "branca";
    
    echo $carro->marca;
    echo $carro->cor;
    
?>