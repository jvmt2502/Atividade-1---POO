<?php
  class Servico{
    public $nome;
    public $preco;
    public $categoria;
    public $duracao;
    public $descricao;

    public function cadastrar_categoria($servico){
      $this->categoria=$this->categoria + $servico;
    }
    public function descadastrar_categoria($servico){
      $this->categoria=$this->categoria - $servico;
  }
}
?>
