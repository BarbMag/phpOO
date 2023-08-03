<?php
class Fruta {
    //nome dos atributos
  public $nome;
  public $cor;
  // metodos

 function __construct($nome,$cor){
    $this-> nome =$nome;
    $this->cor=$cor;
 }

  function set_name($nome){
    $this->nome = $nome;
  }
  function set_cor($cor){
    $this->cor =$cor;
  }
  function get_name(){
    return $this ->nome;
  }
  function get_cor(){
    return $this ->cor;
  }
}
// A palavra new cria um obketo do tipo fruta
$morango = new Fruta("morango_ifsp", "morango");
// atribuindo um nome para o meu objeto atraves dos metodos set name
// $morango-> set_name("morango_ifsp");
echo $morango->nome;
echo "</br>".$morango->get_name();
echo "</br>".$morango->get_cor();

  

?> 
