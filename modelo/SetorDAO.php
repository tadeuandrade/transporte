<?php
require_once('conexao.php');

class SetorDAO{
    private $con;
    
    public function SetorDAO(){
        $this->con = new Conexao();
    }

    public function getComboSetor(){
    $sql = "select cdSetor, nmSetor 
            from setor
            where STATUS = 'ATIVO'
            order by 2 asc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $setor = new Setor();
      $result = array();
      foreach($linhas as $linha){
        $setor->setCdSetor($linha['cdSetor']);
        $setor->setNmSetor($linha['nmSetor']);
        $result[] = clone $setor;
      }
      return $result;
      } else return false;
    }
    public function getComboSetorSolicitacoes($idSolicitacoes){
      $sql = "select nmSetor 
             from setor, solicitacoes
             where setor.cdSetor = solicitacoes.cdSetor
             and solicitacoes.idSolicitacoes = '$idSolicitacoes'
             order by 1 asc";
     $this->con->conectar();
     $this->con->query($sql);
     if($this->con->numRows()>0){
       $linhas = array();
       $linhas = $this->con->getArrayResult();
       $setor = new Setor();
       $result = array();
       foreach($linhas as $linha){
         $setor->setNmSetor($linha['nmSetor']);
         $result[] = clone $setor;
       }
       return $result;
       } else return false;
     }
}  