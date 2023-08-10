<?php
class Retangulo{
    public $altura;
    public $largura;

    function __construct($largura, $altura)
    {
        $this->altura = $altura;
        $this->largura = $largura;

    }
    function set_largura($largura){
        $this->largura = $largura;
    }
    function get_largura(){
        return $this->largura;
    }
    function set_altura($altura){
        $this->altura = $altura;
    }
    function get_altura(){
        return $this->altura;
    }

    function calcular_area(){
        return ($this->altura*$this->largura);
    }
    function calcular_perimetro(){
        return (2*$this->altura+2*$this->largura);
    }

    $retangulo = new Retangulo(50, 20); // Não sei se isso está certo, coloquei por causa de carro.php
echo "</br>" .$retangulo->get_largura();
echo "</br>" .$retangulo->get_altura();

}
