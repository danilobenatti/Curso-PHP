<div class="titulo">Operadores Relacionais</div>

<?php
echo var_dump(1 == 1);
echo var_dump(1 == '1.0');
echo "<br>", var_dump(1 === 1.0);
echo "<br>", var_dump(1 > 1);
echo "<br>", var_dump(1 >= 1);
echo "<br>", var_dump(1 < 1);
echo "<br>", var_dump(1 <= 1);
echo "<br>", var_dump(1 != 1);
echo "<br>", var_dump(1 !== 1);
echo "<br>", var_dump(1 !== '1');
echo "<br>", var_dump(1 !== sqrt(1.0));
echo "<br>", var_dump(1 !== 1e0);
echo "<br>", var_dump(1 <> 1);

echo "<p>Relacionais on If/Else</p><hr>";
$idade = 39;
if ($idade < 18) {
	echo "$idade anos é menor de idade.";
} elseif ($idade >= 18 && $idade < 40) {
	echo "$idade anos é maior de idade.";
} elseif ($idade >= 40 && $idade < 65) {
	echo "$idade anos é um 40+.";
} else {
	echo "$idade é a melhor idade.";
}

echo '<p>Spaceship</p><hr>';
var_dump(50 <=> 5);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p>Spaceship</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!50);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
p {
	margin-bottom: 0px;
}

hr {
	margin-top: 0px
}
</style>