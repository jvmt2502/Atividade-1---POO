<?php
/*João Victor de Melo Tavares - SI - 3° Semestre*/
  $Cliente=new Cliente();
  $Cliente->nome="João Victor";
  $Cliente->data_nascimento="25/02/2003";
  $Cliente->telefone="942424242";
  $Cliente->cpf="123.456.789-10"

  $Funcionario=new Funcionario();
  $Funcionario->nome="Joana Victoria";
  $Funcionario->data_nascimento="25/02/2002";
  $Funcionario->telefone="943434343";
  $Funcionario->cpf="109.876.543-21";

  $Pet=new Pet();
  $Pet->nome="Arya";
  $Pet->data_nascimento="25/04/2018";
  $Pet->especie="Cão";
  $Pet->raca="Vira-lata";

  $Produto=new Produto();
  $Produto->nome="Shampoo";
  $Produto->marca="Phebo";
  $Produto->preco="R$49,90";
  $Produto->codigo="2845672";

  $Servico=new Servico();
  $Servico->nome="Banho";
  $Servico->preco="R$59,90";
  $Servico->categoria="Cão de pequeno porte";
  $Servico->duracao="60min";
?>
