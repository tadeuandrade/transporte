<?php
require_once('conexao.php');

class ChamadoDAO
{
    private $con;
    
    public function ChamadoDAO()
    {
        $this->con = new Conexao();
    }


    

  
  public function quantTotalChamados($dtInicial, $dtFinal){  
    $sql = "SELECT COUNT(*) AS qtdGeralChamados
            FROM chamados
            WHERE DATA BETWEEN '$dtInicial' AND '$dtFinal'";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['qtdGeralChamados']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }  

  public function quantTotalChamadosFechados($dtInicial, $dtFinal){  
    $sql = "SELECT COUNT(*) AS qtdGeralChamados
            FROM chamados
            WHERE dataFechamento BETWEEN '$dtInicial' AND '$dtFinal'";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['qtdGeralChamados']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  } 

  public function listaChamadoMes($dtInicial, $dtFinal){  
     $sql = "SELECT chamados.idChamado
			       , chamados.nome
			       , chamados.titulo
			       , chamados.status
			       , DATE_FORMAT(chamados.data,'%d/%m/%Y %H:%i') as data 
			       , DATEDIFF (NOW(), chamados.data) AS quantidade_dias
			       , usuarios.nome as analista
			       , DATE_FORMAT(chamados.dataFechamento,'%d/%m/%Y %H:%i') AS datafechamento 
			FROM chamados
			LEFT JOIN usuarios ON chamados.idUsuario = usuarios.matricula
			WHERE chamados.idUsuario 
			and chamados.data between '$dtInicial' and '$dtFinal'
			ORDER BY quantidade_dias DESC";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['idChamado']);
        $chamado->setNome($linha['nome']);
        $chamado->setTitulo($linha['titulo']);
        $chamado->setData($linha['data']);
        $chamado->setStatus($linha['status']);
        $chamado->setUnidade($linha['quantidade_dias']);
        $chamado->setIdUsuario($linha['analista']);
        $chamado->setDataFechamento($linha['datafechamento']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }     

  public function statusAtualChamados(){  
     $sql = "SELECT COUNT(*) as qtd
    			, STATUS as statusAtual
				FROM chamados
				WHERE STATUS in ('ABERTO','AGENDADO','AGUARDANDO ATENDIMENTO', 'AGUARDANDO CLIENTE', 'AGUARDANDO TERCEIROS', 'AGUARDANDO VALIDAÇÃO') 
				GROUP BY STATUS";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['qtd']);
        $chamado->setStatus($linha['statusAtual']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  } 

  public function statusAtualChamadosInfra(){  
     $sql = "SELECT COUNT(*) as qtd
    			, STATUS as statusAtual
				FROM chamados
				WHERE STATUS in ('ABERTO','AGENDADO','AGUARDANDO ATENDIMENTO', 'AGUARDANDO CLIENTE', 'AGUARDANDO TERCEIROS', 'AGUARDANDO VALIDAÇÃO') 
				  AND idTipo in (1,3,4,6)
				GROUP BY STATUS";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['qtd']);
        $chamado->setStatus($linha['statusAtual']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  } 

  public function statusAtualChamadosSistemas(){  
     $sql = "SELECT COUNT(*) as qtd
    			, STATUS as statusAtual
				FROM chamados
				WHERE STATUS in ('ABERTO','AGENDADO','AGUARDANDO ATENDIMENTO', 'AGUARDANDO CLIENTE', 'AGUARDANDO TERCEIROS', 'AGUARDANDO VALIDAÇÃO') 
				  AND idTipo in (2,5,7)
				GROUP BY STATUS";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['qtd']);
        $chamado->setStatus($linha['statusAtual']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }  


  public function diasChamadosAbertos(){  
     $sql = "SELECT chamados.idChamado
			       , chamados.nome
			       , chamados.titulo
			       , chamados.status
			       , DATE_FORMAT(chamados.data,'%d/%m/%Y %H:%i') as data 
			       , DATEDIFF (NOW(), chamados.data) AS quantidade_dias
			       , usuarios.nome as analista
			FROM chamados
			LEFT JOIN usuarios ON chamados.idUsuario = usuarios.matricula
			WHERE chamados.status IN ('ABERTO','AGENDADO','AGUARDANDO ATENDIMENTO', 'AGUARDANDO CLIENTE', 'AGUARDANDO TERCEIROS', 'AGUARDANDO VALIDAÇÃO') 
			AND chamados.idUsuario 
			ORDER BY quantidade_dias DESC";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['idChamado']);
        $chamado->setNome($linha['nome']);
        $chamado->setTitulo($linha['titulo']);
        $chamado->setData($linha['data']);
        $chamado->setStatus($linha['status']);
        $chamado->setUnidade($linha['quantidade_dias']);
        $chamado->setIdUsuario($linha['analista']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }                             


  public function listaChamados($idTipo){  
    $sql = "SELECT chamados.idChamado,
                   chamados.nome,
                   chamados.setor,
                   chamados.telefone,
                   usuarios.nome AS responsavel,
                   chamados.descricao,
                   chamados.DATA,
                   chamados.STATUS,
                   chamados.idUsuario,
                   chamados.idTipo,
                   chamados.unidade,
                   chamados.titulo  
                          FROM chamados
                          LEFT JOIN usuarios ON chamados.idUsuario = usuarios.matricula
              where chamados.idTipo = $idTipo
              and chamados.STATUS <> 'FECHADO'
              ORDER BY chamados.DATA desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdChamado($linha['idChamado']);
        $chamado->setNome($linha['nome']);
        $chamado->setSetor($linha['setor']);
        $chamado->setTelefone($linha['telefone']);
        $chamado->setDescricao($linha['descricao']);
        $chamado->setData($linha['DATA']);
        $chamado->setStatus($linha['STATUS']);
        $chamado->setIdUsuario($linha['idUsuario']);
        $chamado->setIdTipo($linha['idTipo']);
        $chamado->setUnidade($linha['unidade']);
        $chamado->setEmail($linha['responsavel']);
        $chamado->setTitulo($linha['titulo']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }

  
    
   

}
