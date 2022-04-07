<?php
require_once('conexao.php');

class MotoristaDAO{
    private $con;
    
    public function MotoristaDAO()
    {
        $this->con = new Conexao();
    }
   

  public function getComboMotoristas(){    // seleciona todos usuarios para o combobox
    echo $sql = "SELECT idMotorista,
                        nome
                FROM motoristas
                WHERE STATUS = 'ATIVO'
                ORDER BY 2";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $motorista = new Motorista();
      $result = array();

      foreach($linhas as $linha){
        $motorista->setIdMotorista($linha['idMotorista']);
        $motorista->setNome($linha['nome']);
        $result[] = clone $motorista;
      }
      return $result;
    }
    else return false;
  }
  public function getComboMotoristasDoChamado($idSolicitacoes){    // seleciona todos usuarios para o combobox
    $sql = "SELECT motoristas.idMotorista,
                        motoristas.nome
                FROM motoristas, solicitacoes
                WHERE motoristas.STATUS = 'ATIVO'
                  and motoristas.idMotorista = solicitacoes.idMotorista
                  and solicitacoes.idSolicitacoes = '$idSolicitacoes'
                ORDER BY 2";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $motorista = new Motorista();
      $result = array();

      foreach($linhas as $linha){
        $motorista->setIdMotorista($linha['idMotorista']);
        $motorista->setNome($linha['nome']);
        $result[] = clone $motorista;
      }
      return $result;
    }
    else return false;
  }

  public function relSolicitacoesMotorista($dataInicial, $dataFinal){    // seleciona todos usuarios para o combobox
    $sql = "SELECT motoristas.idMotorista,
                   sotoristas.nome,
                   solicitacoes.idSolicitacoes
            FROM motoristas, solicitacoes
            WHERE motoristas.idMotorista = solicitacoes.idMotorista
              and DATE_FORMAT(dataSolicitacao,'%d/%m/%Y')  between '$dataInicial' and '$dataFinal' 
            order by 3 asc ";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $motorista = new Motorista();
      $result = array();
      foreach($linhas as $linha){
        $motorista->setIdMotorista($linha['idMotorista']);
        $motorista->setNome($linha['nome']);
        $result[] = clone $motorista;
      }
      return $result;
    }
    else return false;
  }


  
    
   

}
