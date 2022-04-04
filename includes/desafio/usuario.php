<?php
require_once 'includes/desafio/pessoa.php';

class Usuario extends Pessoa {
	public $username;
	public $password;
	
	function __construct($nome, $idade, $login) {
		// 		$this->nome = $nome;
		// 		$this->idade = $idade;
		parent::__construct($nome, $idade);
		$this->username = $login;
	}
	
	function __destruct() {
		parent::__destruct();
	}

	function apresentar1() {
		return "Login: @{$this->username}, Nome: {$this->nome}, Idade: {$this->idade} anos.";
	}
	
	function apresentar2() {
		return "Login: @{$this->username}, " . parent::apresentar();
	}
}
?>
