<?php 
// não foi usado o include porque eu preciso de Pessoas.php ele é essseceial para o codigo sem ele o nada funciona;
//require_once"Pessoas.php";
$controler = key($_GET);
$controler.="Controler";
require_once "controler/$controler.php";
// estou estanciado a classe controler para ter acseeso a ela;
$obj = new $controler();
// server ele vai identificar se é um post ou um get;
$obj->view($_SERVER['REQUEST_METHOD']);
?>
