<?php
// validando os dados que vem de pessoas controler;
if($_REQUEST){
    $pessoa =$_REQUEST['pessoa'];
}else{
    header("Location:index.php?pessoas");
}
// se der serto a seta esta acessando o noem da pessoa que foi cadastrada

?>
<h1><?php echo $pessoa->getNome(); ?> seu cadastro foi concluido</h1>