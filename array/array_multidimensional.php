<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados1 = [
	[
		"nome" => "Roberto",
		"idade" => 26,
		"naturalidade" => "São Paulo"
	],
	[
		"nome" => "Maria",
		"idade" => 25,
		"naturalidade" => "Bahia"
	]
];
echo '<br>';
print_r($dados1);
echo '<br>', $dados1[0]['idade'];
echo '<br>', $dados1[1]['idade'];
$dados1[] = [
	"nome" => "José",
	"idade" => 21,
	"naturalidade" => "Campinas"
];
echo '<br>';
print_r($dados1);
$dados1[2]["sexo"] = "Masculino";
echo '<br>';
print_r($dados1[2]);
unset($dados1[1]);
echo '<br>'."Fiz o unset no \$dados1[1]".'<br>';
print_r($dados1);
var_dump($dados1[1]);
$dados2 = [
		"pessoa" => [
				"nome" => "Roberto",
				"idade" => 26,
				"naturalidade" => "São Paulo"
		],
		"endereco" => [
				"rua" => "Rua ABC, 123",
				"complemento" => "apt 84",
				"bairro" => "Centro"
		]
];
echo '<br>';
print_r($dados2);
echo '<br>', $dados2['pessoa']['idade'];
echo '<br>', $dados2['endereco']['rua'];
?>