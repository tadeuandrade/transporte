<?php

class Setor {
    private $idSetor;
    private $cdSetor;
    private $nmSetor;
    private $status;

    public function Setor($idSetor="", $cdSetor="", $nmSetor="", $status=""){
        $this-> idSetor = $idSetor;
        $this-> cdSetor = $cdSetor;
        $this-> nmSetor = $nmSetor;
        $this-> status = $status;
    }

    public function getIdSetor(){
        return $this-> idSetor;
    }
    public function getCdSetor(){
        return $this-> cdSetor;
    }
    public function getNmSetor(){
        return $this-> nmSetor;
    }
    public function getStatus(){
        return $this-> status;
    }
    public function setIdSetor($p){
        $this-> idSetor = $p;
    }
    public function setCdSetor($p){
        $this-> cdSetor = $p;
    }
    public function setNmSetor($p){
        $this-> nmSetor = $p;
    }
    public function setStatus($p){
        $this-> status = $p;
    }
}