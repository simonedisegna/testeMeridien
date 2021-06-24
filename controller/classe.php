<?php

class Carro {

    public $marca;
    private $cor;

    //  private function __construct()//o construtor sendo privado, a página não irá permitir as visualizações das variaveis o ideal ele fique publico
    function __construct() {
        // echo "instanciando a classe"; com echo dará um erro correto print
        print "<b>instanciando a classe</b>";       
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getCor() {
        //return $cor; // faltou o $this return $this->cor;
        return $this->cor; //forma correta
    }

}

/* Por questões de boa prática, não devemos incluir linha de código após a finalização da classe.
 * correto é chamar a classe por require_once e assim estânciar o mesmo. 
  $carro = new Carro;
  $carro->marca = "Kombi"; //váriável pública esta correta
  // $carro->cor = "branca"; // a váriavel é privada por esse motivo deve ser utilizada pela chamada set e get, o correto seria $carro->setCor;
  $carro->setCor("branca");
  echo $carro->marca;
  // echo $carro->cor; //vai da erro $carro->getCor;
  echo $carro->getCor;//forma correta

  //OBS: antes de rodar já havia indentificados esses defeitos dos set Get, o construtor não se se seria erro, mas ele provado trava toda a classe, assim não recomendado, já que a váriavel já privada */
?>