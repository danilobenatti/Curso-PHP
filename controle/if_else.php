<div class="titulo">Estrutura de controle: If Else</div>

<?php
if (TRUE)
	echo "Sendo verdadeiro serei impresso?";
echo "Sim! Sendo verdadeiro serei impresso.";
echo '<br>';
if (FALSE)
	echo "Sendo falso não serei impresso?";
echo "Sendo falso não serei impresso...";
echo '<br>';
if (TRUE) {
	echo "Seremos impresso.";
	echo "Seremos impresso.";
}
echo '<br>';
if (FALSE) {
	echo "Nada vai aparecer";
	echo "Nem isso vai aparecer";
}
echo '<br>';
if (TRUE) 
echo "O que acontece com isso? Pertence ao if acima.";
{
	echo '<br>', "Esse bloco de código não pertence ao laço de repetição if";
	echo '<br>', "Por isso ele é exibido";
}
if (TRUE) {
	echo "Serei impresso!";
}
echo '<br>';

if (TRUE) {
	echo '<br>'.'Verdadeiro';
} else {
	echo '<br>'.'Falso';
}

if (FALSE) {
	echo "<br>"."Passo A";
} else if (FALSE) {
	echo "<br>"."Passo B";
} elseif (TRUE) {
	echo "<br>"."Passo C";
} else {
	echo "<br>"."Último Passo";
}

echo '<br>'.'Fim';
?>
