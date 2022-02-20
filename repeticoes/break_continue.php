<div class="titulo">Break & Continue</div>

<?php
$count = 15;
for( ; ; ) {
	echo "$count<br>";
	$count++;
	if ($count > 20) {
		break;
	}
}
echo "<hr>";

for( ; ; ) {
	$count++;
	if ($count % 2 === 1) {
		continue;
	}
	echo "$count<br>";
	if ($count >= 30) {
		break;
	}
}
echo "<hr>";

$array = [1,2,3,4,5,6];
foreach ($array as $value) {
	if ($value === 5) {
		break;
	};
	if ($value % 2 === 0) {
		continue;
	}
	echo "$value<br>";
}
echo "Fim!";
?>
