<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
	public $nome;
	public $idade;
	
	function __construct($nome, $idade = 18) {
		echo "Invocando construtor! <br>";
		$this->nome = $nome;
		$this->idade = $idade;
	}
	
	function __destruct() {
		echo "Morreu!<br>";
	}
	
	public function apresentar() {
		return "Nome: {$this->nome}, Idade: {$this->idade}";
	}
}

$pessoa1 = new Pessoa("João Bezerra", 24);
echo $pessoa1->apresentar() . '<br>';
echo '<hr>';
$pessoa2 = new Pessoa("José Silvano");
echo $pessoa2->apresentar() . '<br>';

unset($pessoa1, $pessoa2); // $class = null mesmo efeito de unset.

var_dump($pessoa1, $pessoa2);
 
?>
