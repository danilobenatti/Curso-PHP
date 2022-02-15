<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
//FRUTAS[0] = 'Banana'; //gera erro
//FRUTAS[] = 'Barara'; //gera erro
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
//CARROS["BMW"] = 'X1'; //gera erro
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife', 'Fortaleza'));
//CIDADES[] = 'Campinas'; //gera erro
echo '<br>' . CIDADES[1];
?>