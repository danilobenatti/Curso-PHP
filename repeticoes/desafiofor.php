<div class="titulo">Desafio FOR</div>
<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento aritmético, Ex.: $i++;
2) NÂO pode usar incremento aritmético, Ex.: $i++;
 -->

<?php
$saida = '';
for($i = 1; $i <= 5; $i++) {
	$saida .= '#';
	echo $saida . "<br>";
}
echo '<hr>';
$saida = '';
for ($saida = '#'; $saida !== '######'; $saida .= '#') {
	echo "$saida <br>";
}
?>