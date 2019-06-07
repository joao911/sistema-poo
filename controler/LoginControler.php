<?php
require_once"model/Pessoas.php";
require_once"model/usuarios.php";
require_once"model/conexao.php";
require_once"model/Funcionarios.php";
class LoginControler{
//controler dita o fluxo do que vai acontecer na nossa aplicaçãoinformações para o cadastro
// esta servindo praver a pagina de cadastro
// se for via post etsá enviando 
    public function view($server){
        global $con;
        switch ($server) {
            case "GET":
                require_once "view/login.php";
                break;
            
                case "POST":
                $usuario =$_POST['usuario'];
                $senha = $_POST['senha'];
                $query= $con->prepare("SELECT * FROM usuarios WHERE  usuario=? ");
                $query->execute([$usuario]);
                $result = $query->fetchAll(PDO::FETCH_ASSOC);

                var_dump($result);
                break;
        }
      
    }
}


?>