<?php
class Funcionarios extends  Usuarios{
    private $salario;

function __construct($nome,$dade,$cpf,$login, $senha, $salario){
    parent:: __construct($login, $senha,$cpf,$login, $senha);
    $this->salario = $salario;
}
// metodos acessores
public function getSalario(){
    return $this->salario;
}
public function setSalario($salario){
    $this->salario =$salario;
}
public function cadastrarFuncionario($con,$funcionario){
    try{
        $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf, usuario,senha,tipo_pessoa) VALUES(:nome, :idade, :cpf, :usuario,:senha,:tipo_pessoa)");
        $query->execute([
            "nome" => $funcionario->getNome(),
            "idade" => $funcionario->getIdade(),
            "cpf" => $funcionario->getCpf(),
            "login" => $funcionario->getLogin(),
            "senha" => $funcionario->getSenha(),
            "salario" => $funcionario->getSalario(),
            "tipoPessoa" => $tipoPessoa

        ]);
        return $query;
        //PDOExcepition está pegando os recurssos das excessoes do pdo ou seja as que deram erro
    }catch(PDOExcepition $e){
        return false;
    }
}
}


?>