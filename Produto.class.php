<?php
  class Produto{
    public $nome;
    public $marca;
    public $codigo;
    public $estoque;
    public $preco;

    public function entrada_estoque($quantidade){
      $this->estoque=$this->estoque + $quantidade;
    }
    public function saida_estoque($quantidade){
      $this->estoque=$this->estoque - $quantidade;
    }
  }
 ?>
