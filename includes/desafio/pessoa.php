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
?>
