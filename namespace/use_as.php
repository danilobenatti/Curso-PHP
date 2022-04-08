<?php namespace Outro\Nome; ?>
<div class="titulo">Use &frasl; As </div>

<?php
echo __NAMESPACE__ . '<br>';

include 'namespace/use_as_arquivo.php';

function soma($a, $b) {
	return $a . $b; // Erro proposital.
}

class Classe {

	public $var;

	function func() {
		echo __NAMESPACE__ . ' => ' . __CLASS__ . ' => ' . __METHOD__ . '<br>';
	}
}

echo \Nome\Bem\Grande\CONSTANTE . '<br>';

use const Nome\Bem\Grande\CONSTANTE;
echo CONSTANTE . '<br>';

echo soma(1, 2) . '<br>';

use Nome\Bem\Grande as nbg;
echo nbg\soma(1, 2) . '<br>';

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(1, 3) . '<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new nbg\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();

?>
