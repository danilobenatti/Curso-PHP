<div class="titulo">Membros Estáticos</div>

<?php
class A {
	public $naoStatic = 'Variáveis de instância';
	public static $static = 'Variável de classe (estática)';
	
	public function mostrarA() {
		echo "Não estática = {$this->naoStatic}<br>";
// 		Tentativa 1
// 		echo "Estática = {$this->static}<br>";
// 		Tentativa 2
// 		echo "Estática = {self::$static}<br>";
// 		Tentativa 3
		echo "Estática = " . self::$static . "<br>";
	}
	
	public static function mostrarStaticA() {
// 		echo "Não estático = {$this->naoStatic}<br>";
// 		echo "Estática = {$static}<br>";
		echo "Estática = " . self::$static . "<br>";
	}
	
}
$objectA = new A();
$objectA->mostrarA();
$objectA->mostrarStaticA(); // Nâo é a forma ideal.

echo '<br>';
echo A::$static, '<br>'; // Acessar diretamente pela classe
A::mostrarStaticA(); // Acessar diretamente pela classe

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>';

?>
