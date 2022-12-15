<?php
//Get e Set 
class Login{
	private $email;
	private $senha;

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($e){
		$this->email = $e;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($s){
		$this->senha = $s;
	}

	public function Logar() {
		if($this->email == "teste@teste.com" and $this->senha == "123456"):
			echo "Logado com sucesso";
	else:
		echo "Dados não cadastrados";
	endif;
	}
}
$logar = new login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();

//Observar os dois pontos após uma condição;
//os comando devem ter a variável antecedendo;
//Um dos usos é trabalahar com a "private"