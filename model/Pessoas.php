<?php
// tudo que eu tiver de classe que eu precisar estanciar no meu objeto fica dentro do model;
// é uma classe que está sendo criada a partir de outra;
// metodos contrutores ao inves de eu criar um objeto vazio eu ja crio ele com dados exemplo usuarios.php

class Pessoas{
    //public todo mundo acessa a classe;
    // private ninguem acessa;
    //protect só os filhos acessam;
    private $nome;
    private $idade;
    private $cpf;
    function __construct($nome, $idade, $cpf){
$this->nome = $nome;
$this->idade = $idade;
$this->cpf = $cpf;
    }
// metodos acessores são funçoes com visibilade publica
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
    public function cadastrarPessoa($con,$pessoa,$tipoPessoa){
        try{
            $query = $con->prepare("INSERT INTO usuarios(nome, idade, cpf) VALUES(?,?,?)");
            $query->execute([
                $pessoa->getNome(),
                $pessoa->getIdade(),
                $pessoa->getCpf()
            ]);
            return $query;
            //PDOExcepition está pegando os recurssos das excessoes do pdo ou seja as que deram erro
        }catch(PDOExcepition $e ){
            return false;
        }
    }
    
    
}