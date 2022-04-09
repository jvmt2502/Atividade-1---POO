<?php
  class Pet{
    public $nome;
    public $data_nascimento;
    public $especie;
    public $raca;
    public $peso;

    public function cadastro_nome($identificacao){
      $this->nome=$this->nome + $identificacao;
    }
    public function alteracao_peso($numero){
      $this->peso=$this->peso + $numero;
  }
}
?>
