<?php
class Funcionario{
    private $idFuncionario;
    private $matricula;
    private $nome;
    private $status;
    private $cdSetor;


    public function Funcionario($idFuncionario="",$matricula="",$nome="",$status="",$cdSetor=""){
        $this-> idFuncionario = $idFuncionario;
        $this-> matricula = $matricula;
        $this-> nome = $nome;
        $this-> status = $status;
        $this-> cdSetor = $cdSetor;
    }

    public function getIdFuncionario(){
        return $this-> idFuncionario;
    }
    public function getMatricula(){
        return $this-> matricula;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function getStatus(){
        return $this-> status;
    }
    public function getCdSetor(){
        return $this-> idSetor;
    }

    public function setIdFuncionario($p){
        $this-> idFuncionario = $p;
    }
    public function setMatricula($p){
        $this-> matricula = $p;
    }
    public function setNome($p){
        $this-> nome = $p;        
    }
    public function setStatus($p){
        $this-> status = $p;
    }
    public function setCdSetor($p){
        $this-> idSetor = $p;
    }

}