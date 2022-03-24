<div class="titulo">Classe Abstrata</div>

<?php
abstract class Abstrata {
	public abstract function metodo1();
	protected abstract function metodo2($parametro);
	
}

abstract class FilhaAbstrata extends Abstrata {
	public function metodo1() {
		echo "Executando método 1.<br>";
	}
	
	public abstract function metodo3();
}

class Concreta extends FilhaAbstrata {
	public function metodo1() {
		echo "Executando método 1 extendido.<br>";
		parent::metodo1();
	}
	public function metodo3() {
		echo "Executando método 3 extendido.<br>";
		$this->metodo2('interno');
	}
	
	protected function metodo2($parametro) {
		echo "Executando o método 2, com parametro $parametro.<br>";
	}

}

$classe = new Concreta();
$classe->metodo1();
//echo $classe->metodo2('externo');
$classe->metodo3();
echo '<br>';

var_dump($classe);
echo '<br>';

var_dump($classe instanceof Concreta);
var_dump($classe instanceof FilhaAbstrata);
var_dump($classe instanceof Abstrata);
echo '<br>';

echo "Fim!";
?>
