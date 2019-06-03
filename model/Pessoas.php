<?php
require_once"model/conexao.php";
global $con;
class Pessoas{
    //public todo mundo acessa a classe;
    // private ninguem acessa;
    //protect só os filhos acessam;
    private $nome;
    private $idade;
    private $cpf;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        // porque vou setar um nome na variavel novo nome;
        $this->nome = $nome;
        // this pega o nome e atribui ao parametro nome; 
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        // porque vou setar um nome na variavel novo nome;
        $this->idade = $idade;
        // this pega o nome e atribui ao parametro nome; 
    }
    public function getCpf(){
        return  $this->cpf;
    }
    public function setCpf($cpf){
        // porque vou setar um nome na variavel novo nome;
        $this->cpf = $cpf;
        // this pega o nome e atribui ao parametro nome; 
    }
    public function cadastrarPessoa($con){
        $this->nome;
    }
    
    
}