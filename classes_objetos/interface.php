<div class="titulo">Interface</div>

<?php
interface Animal {
	function respirar();
}

interface Mamifero {
	function mamar();
}

interface Canino extends Animal, Mamifero {
	function latir(): string;
	function correr();
}

interface Felino {
	function correr();
}

class Cachorro implements Canino {
	public function respirar() {
		return "Irei usar oxigênio!";
	}
	
	public function latir(): string {
		return 'Au Au!';
	}
	
	public function mamar() {
		return 'Irei usar leite!';
	}
	
	public function correr() {
		return "vrunnn!";
	}

}

$poodle = new Cachorro();
echo $poodle->respirar() . '<br>';
echo $poodle->latir() . '<br>';
echo $poodle->mamar() . '<br>';
echo $poodle->correr() . '<br>';

echo '<br>';
var_dump($poodle);

echo '<br>';
var_dump($poodle instanceof Cachorro);
var_dump($poodle instanceof Canino);
var_dump($poodle instanceof Mamifero);
var_dump($poodle instanceof Animal);
var_dump($poodle instanceof Felino);

?>
