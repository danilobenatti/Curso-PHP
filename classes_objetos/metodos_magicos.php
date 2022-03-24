<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
	public $nome;
	public $idade;
	
	function __construct($nome, $idade) {
		echo 'Construtor invocado!<br>';
		$this->nome = $nome;
		$this->idade = $idade;
	}
	
	function __destruct() {
		echo '<br>', 'Morreu!!!';
	}
	
	public function __toString() {
		return "{$this->nome} tem {$this->idade} anos.";
	}
	
	public function apresentar() {
		echo $this . '<br>';
	}
	
	public function __get($attribute) {
		echo "Lendo atributo não declarado: {$attribute}<br>";
	}
	
	public function __set($attribute, $valor) {
		echo "Alterando atributo não declarado: {$attribute}/{$valor}<br>";
	}
	
	public function __call($metodo, $params) {
		echo "Tentando executar '${metodo}' com os parametros: ";
		print_r($params);
	}
}

$pessoa = new Pessoa('Ricardo', 40); // invoca o __construct
$pessoa->apresentar(); // invoca o __toString
echo $pessoa, '<br>'; // invoca o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); // invoca o método diretamente sem __call

$pessoa->nomeCompleto = "Muito Legal!!!"; // invoca o __set
$pessoa->nomeCompleto; // invoca o __get
echo $pessoa->nome; // acessa o atributo diretamente sem o __get

// invoca o __call, porque o método 'exec' não existe no contexto do objeto
echo '<br>', $pessoa->exec(1, 'teste', TRUE, [1, 2, 3]);
$pessoa = NULL; // invoca o __destruct

?>
