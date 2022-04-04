<?php
class Pessoa {

	public $nome;

	public $idade;

	function __construct($nome, $idade) {
		$this->nome = $nome;
		$this->idade = $idade;
	}

	function __destruct() {
	}

	public function apresentar() {
		return "Nome: {$this->nome}, Idade: {$this->idade} anos.";
	}
}
?>
