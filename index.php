<?php
//Construct 
class Login{
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome)// ao instanicair a classe, colocar os valores entre parenteses no "new...()"
	{
		$this->nome=$nome;
		$this->setEmail($email);
		$this->setSenha($senha);

	}

	public function getNome(){
		return $this->nome;
	} //para trocar a exibição do email para o nome 

	public function getEmail(){
		return $this->email; //esse NÃO SE USA $ 
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
$logar = new login("teste@teste.com", "123456", "Evelyn"); //se inicializa aqui
$logar->Logar();
echo "<br>";
echo $logar->getNome(); //para aparecer em tela


//Este metodo é inicializado automaticamente quando se instância uma classe;