<?php
require_once"model/Pessoas.php";
require_once"model/usuarios.php";
require_once"model/conexao.php";
class PessoasControler{
//controler dita o fluxo do que vai acontecer na nossa aplicaçãoinformações para o cadastro
// esta servindo praver a pagina de cadastro
// se for via post etsá enviando 
    public function view($server){
        global $con;
        switch ($server) {
            case "GET":
                require_once "view/cadastro.php";
                break;
            
                case "POST":
                $tipoPessoa = $_POST['tipoPessoa'];
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $cpf = $_POST['cpf'];
                $usuario = $_POST['usuario'];
                $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
                if($tipoPessoa == "usuario"){
                // cira uma nova pessoa E O OBJETO QUE EU CRIEI FICA ATRIBUIDO A VARIAVEL $novoUsuario;
                $novoUsuario =new Usuarios($nome, $idade, $cpf,$usuario,$senha);
               if ($novoUsuario->cadastrarPessoa($con,$novoUsuario)){
                }
                // $novaPessoa = new Pessoas();
                // $novaPessoa ->setNome($_POST['nome']);
                // $novaPessoa ->setIdade($_POST['idade']);
                // $novaPessoa ->setCpf($_POST['cpf']);
                
                $_REQUEST['pessoa'] = $novoUsuario;
                require_once"view/sucesso.php";
            }else{
                echo"deu ruim";
            }
                break;
        }
      ;
    }
}


?>