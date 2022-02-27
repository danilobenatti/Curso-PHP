<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
	// atributos
	public $nome = 'Anônimo';
	public $idade = 18;
	public function apresentar() {
		return "Nome: {$this->nome}<br> Idade: {$this->idade}";
	}
}

$cliente1 = new Cliente();
echo $cliente1->nome, '<br>';
$cliente1->nome = 'José Maria';
$cliente1->idade = 25.5;
echo $cliente1->nome, '<br>';

$cliente2 = new Cliente;
$cliente2->nome = 'Júlio César';
$cliente2->idade = 45;

echo $cliente1->apresentar() . '<hr>';
echo $cliente2->apresentar() . '<hr>';

?>
