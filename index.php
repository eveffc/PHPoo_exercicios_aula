<?php //Quando não trabalha com outra linguagem não precisa fechar com o "? >"
class Cadastro{
	public $nome;
	public $sobrenome;
	public $email;

	public function Salvar() {
		echo $this->nome. $this->sobrenome; //NÃO usar: concatenação antes de pontuação.
	}
}
$pessoa = new Cadastro();
$pessoa->nome = "Evelyn";
$pessoa->sobrenome = "Santos";
$pessoa->email = "eveffc@gmail.com";
$pessoa->Salvar();