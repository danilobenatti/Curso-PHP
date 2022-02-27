<div class="titulo">Herança</div>

<?php
class Pessoa {
	public $nome;
	public $idade;
	
	function __construct($nome, $idade) {
		$this->nome = $nome;
		$this->idade = $idade;
		echo 'Pessoa criada!' . '<br>';
	}
	
	function __destruct() {
		echo 'Objeto "Pessoa" desalocado!<br>';
	}
	
	public function apresentar() {
		return "Nome: {$this->nome}, Idade: {$this->idade} anos.";
	}
}

class Usuario extends Pessoa {
	public $username;
	public $password;
	
	function __construct($nome, $idade, $login) {
// 		$this->nome = $nome;
// 		$this->idade = $idade;
		parent::__construct($nome, $idade);
		$this->username = $login;
		echo 'Usuário criado!' . '<br>';
	}
	
	function __destruct() {
		echo 'Objeto "Usuario" desalocado!<br>';
		parent::__destruct();
	}
	
	function apresentar1() {
		return "Login: @{$this->username}, Nome: {$this->nome}, Idade: {$this->idade} anos.";
	}
	
	function apresentar2() {
		return "Login: @{$this->username}, " . parent::apresentar();
	}
}
$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
echo $usuario->apresentar1() . '<br>';
echo $usuario->apresentar2() . '<br>';
unset($usuario);

?>
