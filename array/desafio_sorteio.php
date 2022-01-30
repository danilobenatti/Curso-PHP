<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = [ 
		"Capitão América",
		"Homem Aranha",
		"Hulk",
		"Homem de Ferro",
		"Doutor Estranho"
];
$indice = array_rand($nomes);
echo "<div center><h1>{$nomes[$indice]}</h1></div>";
?>
<style>
[center] {
	display: flex;
	justify-content: center;
}
</style>