<div class="titulo">Include Função</div>

<?php
$filename = pathinfo(__FILE__, PATHINFO_BASENAME);

echo "Executando pelo arquivo: '{$filename}'";

function carregarArquivo() {
	include 'includes/include_arquivo.php';
	echo $variavel . '<br>';
	echo soma(2, 5) . '<br>';
}

echo '<br>', "Novamente no arquivo: '{$filename}'";
// echo '<br>', soma(1, 8);
carregarArquivo();

echo "Variável = '{$variavel}'.";
// var_dump($variavel);
echo '<br>' . soma(3, 8);
?>
