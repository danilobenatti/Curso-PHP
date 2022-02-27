<div class="titulo">Desafio Classe Data</div>

<?php
$format = "d/m/y";
$today = date($format);

class Data {
	public $day = 1;
	public $month = 1;
	public $year = 1970;
	public function apresentar1() {
		return "Dia: {$this->day}, Mês: {$this->month}, Ano: {$this->year}";
	}
	public function apresentar2() {
		return "{$this->day}/{$this->month}/{$this->year}";
	}
}

echo 'Data Atual: ' . $today . '<br>';

$data1 = new Data();
echo $data1->apresentar1() . '<br>';
echo $data1->apresentar2() . '<br>';

$data2 = new Data();
$data2->day = 03;
$data2->month = 07;
$data2->year = 1982;
echo $data2->apresentar2() . '<br>';

?>
