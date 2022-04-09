<?php
  class Funcionario{
    public $norme;
    public $cpf;
    public $endereco;
    public $telefone;
    public $data_nascimento;

    public function cadastro_telefone($numero){
      $this->telefone=$this->telefone + $numero;
    }
    public function descadastro_telefone($numero){
      $this->telefone=$this->telefone - $numero;
  }
}
?>
