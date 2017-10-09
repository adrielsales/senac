<?php

class PessoaClass {
	public $nome;

	public function nomeDaPessoa(){
		return "Meu nome é " . $this->nome;
	}
}

$adriel = new PessoaClass();
$adriel->nome = "Adriel Sales";
echo $adriel->nomeDaPessoa();

 ?>
