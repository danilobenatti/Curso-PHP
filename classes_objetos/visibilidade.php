<div class="titulo">Visibilidade</div>

<?php
class A {
	public $publico = 'Público';
	protected $protegido = 'Protegido';
	private $privado = 'Privado';
	
	public function mostrarA() {
		$this->naoMostrar();
		echo "Classe A) Publico = {$this->publico}<br>";
		echo "Classe A) Protegido = {$this->protegido}<br>";
		echo "Classe A) Privado = {$this->privado}<br>";
	}
	
	protected  function vaiPorHeranca() {
		echo 'Serei transmitido por herança!<br>';
	}
	
	private function naoMostrar() {
		echo 'Não vou imprimir!<br>';
	}
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A {
	function mostrarB() {
		echo "Classe B) Publico = {$this->publico}<br>";
		echo "Classe B) Protegido = {$this->protegido}<br>";
		echo "Classe B) Privado = {$this->privado}<br>";
		
		parent::vaiPorHeranca();
	}
}

echo '<br>';
$b = new B();
$b->mostrarB();
//$b->naoMostrar();
//$b->vaiPorHeranca();
echo '<br>';
$b->mostrarA();

?>
