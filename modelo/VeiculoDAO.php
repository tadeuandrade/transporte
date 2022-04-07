<?php
require_once('conexao.php');

class VeiculoDAO
{
    private $con;
    
    public function VeiculoDAO()
    {
        $this->con = new Conexao();
    }
   

  public function getComboVeiculos(){    // seleciona todos usuarios para o combobox
    echo $sql = "SELECT idVeiculo,
                         tipo,
                         placa,
                         lugares
                    FROM veiculos
                    WHERE STATUS = 'ATIVO'
                    ORDER BY 2,3";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $veiculo = new Veiculo();
      $result = array();

      foreach($linhas as $linha){
        $veiculo->setIdVeiculo($linha['idVeiculo']);
        $veiculo->setTipo($linha['tipo']);
        $veiculo->setPlaca($linha['placa']);
        $veiculo->setLugares($linha['lugares']);
        $result[] = clone $veiculo;
      }
      return $result;
    }
    else return false;
  }
  public function getComboVeiculosChamado($idSolicitacoes){    // seleciona todos usuarios para o combobox
    $sql = " SELECT 
                    veiculos.idVeiculo,
                    veiculos.tipo,
                    veiculos.placa,
                    veiculos.lugares
                  FROM veiculos, solicitacoes
                  WHERE veiculos.STATUS = 'ATIVO'
                    and veiculos.idVeiculo = solicitacoes.idVeiculo
                    and solicitacoes.idSolicitacoes = '$idSolicitacoes'
                  ORDER BY 2,3";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $veiculo = new Veiculo();
      $result = array();

      foreach($linhas as $linha){
        $veiculo->setIdVeiculo($linha['idVeiculo']);
        $veiculo->setTipo($linha['tipo']);
        $veiculo->setPlaca($linha['placa']);
        $veiculo->setLugares($linha['lugares']);
        $result[] = clone $veiculo;
      }
      return $result;
    }
    else return false;
  }


  
    
   

}
