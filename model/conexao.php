<?php
$host = "mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=8889";
$dbuser = "root";
$dbPass ="";


try{

$con = new PDO ($host, $dbuser, $dbPass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $query = $con -> query('select * from filme');

// $resultado = $query->fetchALL(PDO::FETCH_ASSOC);

// echo "<pres>";
// var_dump($resultado);


}catch(PDOException $e){

echo "estamos em manutenção , volte novamente mais tarde";

 echo $e->getMessage(); // enviar menssagem
}