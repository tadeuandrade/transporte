<?php
require_once('conexao.php');
include_once('Motorista.php');
include_once('Veiculo.php');
date_default_timezone_set('America/Sao_Paulo');
class SolicitacaoDAO
{
    private $con;
    
    public function SolicitacaoDAO()
    {
        $this->con = new Conexao();
    }

    public function solicitarPaciente($paciente, $leito, $data, $horario, $motivo,$destino, $endereco, $tipoAmbulancia, $tipoAcomodocao, $isolamento, $gas, $obs, $solicitante, $categoria, $empreOrigem, $empreDestino){
    
    $dataSolicitacao = date('y/m/d H:i');
    $status = 'ABERTA';



      $sql = sprintf('insert into solicitacoes(paciente, 
                                          leito, 
                                          data, 
                                          horario, 
                                          motivo,
                                          destino, 
                                          endereco, 
                                          tipoAmbulancia, 
                                          tipoAcomodocao, 
                                          isolamento, 
                                          gas, 
                                          obs, 
                                          solicitante, 
                                          categoria,
                                          dataSolicitacao,
                                          status,
                                          empreOrigem,
                                          empreDestino)
                        values("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s")',$paciente, $leito, $data, $horario, $motivo,$destino, $endereco, $tipoAmbulancia, $tipoAcomodocao, $isolamento, $gas, $obs, $solicitante, $categoria, $dataSolicitacao, $status, $empreOrigem, $empreDestino);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  }


  public function solicitarDoacoes($empresa, $nome,$telefone,$origem,$setor,$destino, $endereco, $pontoReferencia, $telefoneDestino, $data, $horario, $acesso, $moveis, $descricao, $obs, $ajudante, $solicitante, $categoria,$enderecoOrigem, $empreOrigem, $empreDestino, $procurarPor){
    
    $dataSolicitacao = date('y/m/d H:i');
    $status = 'ABERTA';

    

    $sql = sprintf('insert into solicitacoes(empresa, 
                                              nome,
                                              telefone,
                                              origem,
                                              setor,
                                              destino, 
                                              endereco, 
                                              pontoReferencia, 
                                              telefoneDestino, 
                                              data, 
                                              horario, 
                                              acesso, 
                                              moveis, 
                                              descricao, 
                                              obs, 
                                              ajudante, 
                                              solicitante, 
                                              categoria,
                                              dataSolicitacao,
                                              status,
                                              enderecoOrigem,
                                              empreOrigem,
                                              empreDestino,
                                              procurarPor)
                        values("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s")',$empresa, $nome,$telefone,$origem,$setor,$destino, $endereco, $pontoReferencia, $telefoneDestino, $data, $horario, $acesso, $moveis, $descricao, $obs, $ajudante, $solicitante, $categoria, $dataSolicitacao, $status,$enderecoOrigem,$empreOrigem, $empreDestino, $procurarPor);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  }


  

  public function solicitarMateriais($empresa, $nome, $telefone, $origem, $destino, $endereco, $pontoReferencia, $telefoneDestino, $data, $horario,$descricao, $moto, $anexo, $solicitante, $categoria, $enderecoOrigem, $setorDestino, $empreOrigem, $empreDestino, $procurarPor, $setor){
    
    $dataSolicitacao = date('y/m/d H:i');
    $status = 'ABERTA';



     $sql = sprintf('insert into solicitacoes(empresa, 
                                              nome, 
                                              telefone,
                                              origem,
                                              destino,
                                              endereco, 
                                              pontoReferencia, 
                                              telefoneDestino,
                                              data, 
                                              horario, 
                                              descricao, 
                                              moto, 
                                              anexo, 
                                              solicitante, 
                                              categoria,
                                              dataSolicitacao,
                                              status,
                                              enderecoOrigem,
                                              setorDestino,
                                              empreOrigem,
                                              empreDestino,
                                              procurarPor,
                                              setor)
                        values("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s", "%s", "%s","%s")',$empresa, $nome, $telefone, $origem, $destino, $endereco, $pontoReferencia, $telefoneDestino, $data, $horario,$descricao, $moto, $anexo, $solicitante, $categoria, $dataSolicitacao, $status,$enderecoOrigem, $setorDestino, $empreOrigem, $empreDestino, $procurarPor,$setor);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  }

  public function solicitarDocumentos($nome, $telefone, $origem, $setor, $destino, $endereco, $telefoneDestino, $pontoReferencia, $data, $horario, $protocolar,$obs, $solicitante, $categoria, $enderecoOrigem, $empreOrigem, $empreDestino, $anexo, $procurarPor){
    
    $dataSolicitacao = date('y/m/d H:i');
    $status = 'ABERTA';



      echo  $sql = sprintf('insert into solicitacoes(nome, 
                                                   telefone, 
                                                   origem, 
                                                   setor, 
                                                   destino, 
                                                   endereco, 
                                                   telefoneDestino, 
                                                   pontoReferencia, 
                                                   data, 
                                                   horario, 
                                                   protocolar,
                                                   obs, 
                                                   solicitante, 
                                                   categoria,
                                                  dataSolicitacao,
                                                  status,
                                                  enderecoOrigem,
                                                  empreOrigem,
                                                  empreDestino,
                                                  anexo,
                                                  procurarPor)
                        values("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s")', $nome, $telefone, $origem, $setor, $destino, $endereco, $telefoneDestino, $pontoReferencia, $data, $horario, $protocolar,$obs, $solicitante, $categoria,$dataSolicitacao, $status, $enderecoOrigem, $empreOrigem, $empreDestino, $anexo, $procurarPor);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  }

  public function solicitarFuncionario($nome, $origem, $setor, $destino, $endereco, $data, $horario, $telefone, $natureza, $obs, $solicitante, $categoria, $enderecoOrigem, $passageiros, $setorDestino, $empreOrigem, $empreDestino){
    
    $dataSolicitacao = date('y/m/d H:i');
    $status = 'ABERTA';



     $sql = sprintf('insert into solicitacoes(nome, 
                                              origem, 
                                              setor,
                                              destino, 
                                              endereco, 
                                              data, 
                                              horario, 
                                              telefone,
                                              natureza,
                                              obs, 
                                              solicitante, 
                                              categoria,
                                              dataSolicitacao,
                                              status,
                                              enderecoOrigem,
                                              passageiros,
                                              setorDestino, 
                                              empreOrigem,
                                              empreDestino)
                        values("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s")',$nome, $origem, $setor, $destino, $endereco, $data, $horario, $telefone, $natureza, $obs, $solicitante, $categoria, $dataSolicitacao, $status,$enderecoOrigem,$passageiros, $setorDestino, $empreOrigem, $empreDestino);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  }



    public function getUltimaSolicitacao(){  
   $sql = "SELECT idSolicitacoes
              FROM solicitacoes
              ORDER BY 1 DESC
              LIMIT 1";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){
        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function listaSolicitacoesPaciente(){  
    $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   status 
            FROM solicitacoes
            WHERE STATUS <> 'FECHADO'
              and categoria = 'PACIENTE'
              ORDER BY DATA desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function listaSolicitacoesPacienteUsuario($usuario){  
    $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   status 
            FROM solicitacoes
            WHERE STATUS <> 'FECHADO'
              and categoria = 'PACIENTE'
              and solicitante = '$usuario'
              ORDER BY DATA desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function listaSolicitacoesMateriais(){  
    $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   status 
            FROM solicitacoes
            WHERE STATUS NOT IN ('CONCLUIDO', 'CANCELADO')
              and categoria = 'MATERIAIS'
              ORDER BY 1 desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }
  public function listaSolicitacoesMateriaisUsuario($usuario){  
    $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   status 
            FROM solicitacoes
            WHERE STATUS <> 'FECHADO'
              and categoria = 'MATERIAIS'
              and solicitante = '$usuario'
              ORDER BY status desc  , idSolicitacoes  desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }
  public function listaSolicitacoesDocumentos(){  
    $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   status 
            FROM solicitacoes
            WHERE STATUS NOT IN ('CONCLUIDO', 'CANCELADO')
              and categoria = 'DOCUMENTOS'
              ORDER BY DATA desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }
  public function listaSolicitacoesDocumentosUsuario($usuario){  
    $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   DATE_FORMAT(dataSolicitacao,'%d/%m/%Y %H:%i') dataSolicitacao,
                    case 
                      when status = 'ABERTO'
                      then 1
                      when status = 'CONCLUIDO'
                      then 2
                      when status = 'CANCELADO'
                      then 3
                    end status_cod,
                    status   
            FROM solicitacoes
            WHERE categoria = 'DOCUMENTOS'
              and solicitante = '$usuario'
              order by status_cod asc, idSolicitacoes desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }
  public function listaSolicitacoesDoacoes(){  
    $sql = "SELECT idSolicitacoes,
                  categoria,
                  nome,
                  DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                  horario,
                  paciente,
                  status 
           FROM solicitacoes
           WHERE STATUS NOT IN ('CONCLUIDO', 'CANCELADO')
             and categoria = 'DOACOES'
             ORDER BY DATA desc";
   $this->con->conectar();
   $this->con->query($sql);
   if($this->con->numRows()>0){
     $linhas = array();
     $linhas = $this->con->getArrayResult();
     $solicitacao = new Solicitacao();
     $result = array();

     foreach($linhas as $linha){

       $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
       $solicitacao->setCategoria($linha['categoria']);
       $solicitacao->setNome($linha['nome']);
       $solicitacao->setData($linha['DATA']);
       $solicitacao->setHorario($linha['horario']);
       $solicitacao->setStatus($linha['status']);

       $solicitacao->setPaciente($linha['paciente']);

       $result[] = clone $solicitacao;
     }
     return $result;
   }
   else return false;
 }

 public function listaSolicitacoesDoacoesUsuario($usuario){  
  $sql = "SELECT idSolicitacoes,
                categoria,
                nome,
                DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                horario,
                paciente,
                DATE_FORMAT(dataSolicitacao,'%d/%m/%Y %H:%i') dataSolicitacao,
                case 
                  when status = 'ABERTO'
                  then 1
                  when status = 'CONCLUIDO'
                  then 2
                  when status = 'CANCELADO'
                  then 3
                end status_cod,
                status 
          FROM solicitacoes
          WHERE categoria = 'DOACOES'
           and solicitante = '$usuario'
          order by status_cod asc, idSolicitacoes desc";
 $this->con->conectar();
 $this->con->query($sql);
 if($this->con->numRows()>0){
   $linhas = array();
   $linhas = $this->con->getArrayResult();
   $solicitacao = new Solicitacao();
   $result = array();

   foreach($linhas as $linha){

     $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
     $solicitacao->setCategoria($linha['categoria']);
     $solicitacao->setNome($linha['nome']);
     $solicitacao->setData($linha['DATA']);
     $solicitacao->setHorario($linha['horario']);
     $solicitacao->setStatus($linha['status']);

     $solicitacao->setPaciente($linha['paciente']);

     $result[] = clone $solicitacao;
   }
   return $result;
 }
 else return false;
}
  public function listaSolicitacoesFuncionarios(){  
     $sql = "SELECT idSolicitacoes,
                   categoria,
                   nome,
                   DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                   horario,
                   paciente,
                   status 
            FROM solicitacoes
            WHERE STATUS NOT IN ('CONCLUIDO', 'CANCELADO')
              and categoria = 'FUNCIONARIO'
              ORDER BY DATA desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setStatus($linha['status']);

        $solicitacao->setPaciente($linha['paciente']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function listaSolicitacoesFuncionariosUsuario($usuario){  
    $sql = "SELECT idSolicitacoes,
                  categoria,
                  nome,
                  DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                  horario,
                  paciente,
                  DATE_FORMAT(dataSolicitacao,'%d/%m/%Y %H:%i') dataSolicitacao,
                  case 
                    when status = 'ABERTO'
                    then 1
                    when status = 'CONCLUIDO'
                    then 2
                    when status = 'CANCELADO'
                    then 3
                  end status_cod,
                  status  
           FROM solicitacoes
           WHERE categoria = 'FUNCIONARIO'
             and solicitante = '$usuario'
             order by status_cod asc, idSolicitacoes desc";
   $this->con->conectar();
   $this->con->query($sql);
   if($this->con->numRows()>0){
     $linhas = array();
     $linhas = $this->con->getArrayResult();
     $solicitacao = new Solicitacao();
     $result = array();

     foreach($linhas as $linha){

       $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
       $solicitacao->setCategoria($linha['categoria']);
       $solicitacao->setNome($linha['nome']);
       $solicitacao->setData($linha['DATA']);
       $solicitacao->setHorario($linha['horario']);
       $solicitacao->setStatus($linha['status']);

       $solicitacao->setPaciente($linha['paciente']);

       $result[] = clone $solicitacao;
     }
     return $result;
   }
   else return false;
 }

 public function listaSolicitacoesPesquisa($idSolicitacao){  
  $sql = "SELECT idSolicitacoes,
                 categoria,
                 nome,
                 DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                 horario,
                 paciente,
                 status 
          FROM solicitacoes
          WHERE ((idSolicitacoes = '$idSolicitacao') or (empresa like '%$idSolicitacao%') or (descricao like '%$idSolicitacao%') or (destino like '%$idSolicitacao%')) 
            ORDER BY 1 desc";
  $this->con->conectar();
  $this->con->query($sql);
  if($this->con->numRows()>0){
    $linhas = array();
    $linhas = $this->con->getArrayResult();
    $solicitacao = new Solicitacao();
    $result = array();

    foreach($linhas as $linha){

      $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
      $solicitacao->setCategoria($linha['categoria']);
      $solicitacao->setNome($linha['nome']);
      $solicitacao->setData($linha['DATA']);
      $solicitacao->setHorario($linha['horario']);
      $solicitacao->setStatus($linha['status']);

      $solicitacao->setPaciente($linha['paciente']);

      $result[] = clone $solicitacao;
    }
    return $result;
  }
  else return false;
}

public function listaSolicitacoesPesquisaUser($idSolicitacao, $usuario){  
  $sql = "SELECT idSolicitacoes,
                 categoria,
                 nome,
                 DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') as DATA,
                 horario,
                 paciente,
                 status 
          FROM solicitacoes
          WHERE ((idSolicitacoes = '$idSolicitacao') or (empresa like '%$idSolicitacao%') or (descricao like '%$idSolicitacao%') or (destino like '%$idSolicitacao%')) 
            and solicitante = '$usuario'
            ORDER BY 1 desc";
  $this->con->conectar();
  $this->con->query($sql);
  if($this->con->numRows()>0){
    $linhas = array();
    $linhas = $this->con->getArrayResult();
    $solicitacao = new Solicitacao();
    $result = array();

    foreach($linhas as $linha){

      $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
      $solicitacao->setCategoria($linha['categoria']);
      $solicitacao->setNome($linha['nome']);
      $solicitacao->setData($linha['DATA']);
      $solicitacao->setHorario($linha['horario']);
      $solicitacao->setStatus($linha['status']);

      $solicitacao->setPaciente($linha['paciente']);

      $result[] = clone $solicitacao;
    }
    return $result;
  }
  else return false;
}
  public function listaSolicitacoesRelatorioRateio($rateio, $kmFinal, $kmUtilizado){  
    $sql = "SELECT idSolicitacoes
           FROM solicitacoes
           WHERE rateio = '$rateio'
             and kmFinal = '$kmFinal'
             and kmUtilizado = '$kmUtilizado'
             ORDER BY DATA desc";
   $this->con->conectar();
   $this->con->query($sql);
   if($this->con->numRows()>0){
     $linhas = array();
     $linhas = $this->con->getArrayResult();
     $solicitacao = new Solicitacao();
     $result = array();

     foreach($linhas as $linha){

      $solicitacao->setRateio($linha['rateio']);
      $solicitacao->setKmFinal($linha['kmFinal']);
      $solicitacao->setKmUtilizado($linha['kmUtilizado']);
      $solicitacao->setPaciente($linha['paciente']);

       $result[] = clone $solicitacao;
     }
     return $result;
   }
   else return false;
 }


  public function getSolicitacao($idSolicitacoes){  
   $sql = "SELECT idSolicitacoes,
                   empresa,
                   nome,
                   endereco,
                   pontoReferencia,
                   DATE_FORMAT(DATA,'%d/%m/%Y') AS DATA,
                   horario,
                   telefone,
                   quantidade,
                   protocolar,
                   acesso,
                   moveis,
                   descricao,
                   ajudante,
                   moto,
                   anexo,
                   paciente,
                   leito,
                   motivo,
                   tipoAmbulancia,
                   tipoAcomodacao,
                   isolamento,
                   gas,
                   obs,
                   categoria,
                   solicitante,
                   DATE_FORMAT(dataSolicitacao,'%d/%m/%Y') AS dataSolicitacao,
                   STATUS,
                   instrucoes,
                   destino,
                   origem,
                   setor,
                   kmInicial,
                   kmFinal,
                   kmUtilizado,
                   rateio,
                   observacao,
                   empreOrigem,
                   empreDestino,
                   procurarPor
                   recebido,
                   notaFiscal,
                   telefoneDestino,
                   enderecoOrigem                    
            FROM solicitacoes 
            where idSolicitacoes = $idSolicitacoes

            LIMIT 1";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['empresa']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setEndereco($linha['endereco']);
        $solicitacao->setPontoReferencia($linha['pontoReferencia']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setTelefone($linha['telefone']);
        $solicitacao->setQuantidade($linha['quantidade']);
        $solicitacao->setProtocolar($linha['protocolar']);
        $solicitacao->setAcesso($linha['acesso']);
        $solicitacao->setMoveis($linha['moveis']);
        $solicitacao->setDescricao($linha['descricao']);
        $solicitacao->setAjudante($linha['ajudante']);
        $solicitacao->setMoto($linha['moto']);
        $solicitacao->setAnexo($linha['anexo']);
        $solicitacao->setPaciente($linha['paciente']);
        $solicitacao->setLeito($linha['leito']);
        $solicitacao->setMotivo($linha['motivo']);
        $solicitacao->setTipoAmbulancia($linha['tipoAmbulancia']);
        $solicitacao->setTipoAcomodacao($linha['tipoAcomodacao']);
        $solicitacao->setIsolamento($linha['isolamento']);
        $solicitacao->setGas($linha['gas']);
        $solicitacao->setObs($linha['obs']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setSolicitante($linha['solicitante']);
        $solicitacao->setDataSolicitacao($linha['dataSolicitacao']);
        $solicitacao->setStatus($linha['STATUS']);
        $solicitacao->setInstrucoes($linha['instrucoes']);
        $solicitacao->setDestino($linha['destino']);
        $solicitacao->setOrigem($linha['origem']);
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setKmInicial($linha['kmInicial']);
        $solicitacao->setKmFinal($linha['kmFinal']);
        $solicitacao->setKmUtilizado($linha['kmUtilizado']);
        $solicitacao->setRateio($linha['rateio']);
        $solicitacao->setObservacao($linha['observacao']);
        $solicitacao->setEmpreOrigem($linha['empreOrigem']);
        $solicitacao->setEmpreDestino($linha['empreDestino']);
        $solicitacao->setProcurarPor($linha['procurarPor']);
        $solicitacao->setRecebido($linha['recebido']);
        $solicitacao->setNotaFiscal($linha['notaFiscal']);
        $solicitacao->setTelefoneDestino($linha['telefoneDestino']);
        $solicitacao->setEnderecoOrigem($linha['enderecoOrigem']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

//Adicionado $recebido, $notaFiscal, $observacao

  public function atualizarSolicitacao($idSolicitacoes,$status,$idMotorista,$idVeiculo,$dataRealizacao,$horarioRealizacao,$kmInicial,$kmFinal,$rateio,$kmUtilizado,$recebido, $notaFiscal, $observacao){
  $sql = sprintf("update solicitacoes 
                       set status = '$status',
                          idMotorista = '$idMotorista',
						              idVeiculo='$idVeiculo',
                          dataRealizacao = '$dataRealizacao',
                          horarioRealizacao = '$horarioRealizacao',
                          kmInicial = '$kmInicial',
                          kmFinal='$kmFinal',
                          rateio = '$rateio',
                          kmUtilizado = '$kmUtilizado',
                          recebido = '$recebido',
                          notaFiscal = '$notaFiscal',
                          observacao = '$observacao'
                        where idSolicitacoes in ($idSolicitacoes)");
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar();
    return $result;
  }

  
  public function atualizarSolicitacaoRateio($updateSolicitacaoMaisRateio,$status,$dataRealizacao,$horarioRealizacao,$kmInicial,$kmFinal,$rateio,$kmUtilizado){
    $sql = sprintf("update solicitacoes 
                         set status = '$status',
                            dataRealizacao = '$dataRealizacao',
                            horarioRealizacao = '$horarioRealizacao',
                            kmInicial = '$kmInicial',
                            kmFinal='$kmFinal',
                            rateio = '$rateio',
                            kmUtilizado = '$kmUtilizado'
                          where idSolicitacoes in ($updateSolicitacaoMaisRateio)");
      $this->con->query($sql) ? $result=true : $result=false;
      $this->con->desconectar();
      return $result;
    }
  
  public function  relSolicitacaoPerido($status, $dataInicial, $dataFinal){  

    if ($status == 'TODOS'){

    $sql = "SELECT idSolicitacoes,
                   empresa,
                   nome,
                   endereco,
                   pontoReferencia,
                   DATE_FORMAT(DATA,'%d/%m/%Y') as DATA,
                   horario,
                   telefone,
                   quantidade,
                   protocolar,
                   acesso,
                   moveis,
                   descricao,
                   ajudante,
                   moto,
                   anexo,
                   paciente,
                   leito,
                   motivo,
                   tipoAmbulancia,
                   tipoAcomodacao,
                   isolamento,
                   gas,
                   obs,
                   categoria,
                   solicitante,
                   DATE_FORMAT(dataSolicitacao,'%d/%m/%Y') as dataSolicitacao,
                   STATUS,
                   instrucoes,
                   destino,
                   origem,
                   setor,
                   
                  rateio,
                  kmFinal,
                  kmInicial, 
                  kmUtilizado 
                   
            FROM solicitacoes 
            where DATE_FORMAT(dataSolicitacao,'%d/%m/%Y')  between '$dataInicial' and '$dataFinal'";    

    }

    else {
    $sql = "SELECT idSolicitacoes,
                   empresa,
                   nome,
                   endereco,
                   pontoReferencia,
                   DATE_FORMAT(DATA,'%d/%m/%Y') as DATA,
                   horario,
                   telefone,
                   quantidade,
                   protocolar,
                   acesso,
                   moveis,
                   descricao,
                   ajudante,
                   moto,
                   anexo,
                   paciente,
                   leito,
                   motivo,
                   tipoAmbulancia,
                   tipoAcomodacao,
                   isolamento,
                   gas,
                   obs,
                   categoria,
                   solicitante,
                   DATE_FORMAT(dataSolicitacao,'%d/%m/%Y') as dataSolicitacao,
                   STATUS,
                   instrucoes,
                   destino,
                   origem,
                   setor,                   
                   rateio,
                    kmFinal,
                    kmInicial, 
                    kmUtilizado 
                   
            FROM solicitacoes 
            where STATUS = $status
            and DATE_FORMAT(dataSolicitacao,'%d/%m/%Y')  between '$dataInicial' and '$dataFinal'";  
    }

    
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setCategoria($linha['empresa']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setEndereco($linha['endereco']);
        $solicitacao->setPontoReferencia($linha['pontoReferencia']);
        $solicitacao->setData($linha['DATA']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setTelefone($linha['telefone']);
        $solicitacao->setQuantidade($linha['quantidade']);
        $solicitacao->setProtocolar($linha['protocolar']);
        $solicitacao->setAcesso($linha['acesso']);
        $solicitacao->setMoveis($linha['moveis']);
        $solicitacao->setDescricao($linha['descricao']);
        $solicitacao->setAjudante($linha['ajudante']);
        $solicitacao->setMoto($linha['moto']);
        $solicitacao->setAnexo($linha['anexo']);
        $solicitacao->setPaciente($linha['paciente']);
        $solicitacao->setLeito($linha['leito']);
        $solicitacao->setMotivo($linha['motivo']);
        $solicitacao->setTipoAmbulancia($linha['tipoAmbulancia']);
        $solicitacao->setTipoAcomodacao($linha['tipoAcomodacao']);
        $solicitacao->setIsolamento($linha['isolamento']);
        $solicitacao->setGas($linha['gas']);
        $solicitacao->setObs($linha['obs']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setSolicitante($linha['solicitante']);
        $solicitacao->setDataSolicitacao($linha['dataSolicitacao']);
        $solicitacao->setStatus($linha['STATUS']);
        $solicitacao->setInstrucoes($linha['instrucoes']);
        $solicitacao->setDestino($linha['destino']);
        $solicitacao->setOrigem($linha['origem']);
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setRateio($linha['rateio']);
        $solicitacao->setKmFinal($linha['kmFinal']);
        $solicitacao->setKmInicial($linha['kmInicial']);
        $solicitacao->setKmUtilizado($linha['kmUtilizado']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }
  
  public function listaSolicitacoes(){  
    $sql = "SELECT idSolicitacoes
            FROM solicitacoes
            WHERE STATUS <> 'CONCLUIDO'
              -- and idSolicitacoes <> '$idSolicitacoes'
            ";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){
        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }
  public function getInformacoes($idSolicitacoes){  
    $sql = "SELECT idSolicitacoes,
                  empresa,
                  nome,                  
                  telefone, 
                  origem,
                  empreOrigem,
                  setor,
                  destino,
                  empreDestino,
                  endereco,
                  pontoReferencia,
                  telefoneDestino,
                  data,
                  horario,
                  descricao,
                  moto,
                  anexo,
                  recebido,
                  notaFiscal
            FROM solicitacoes
            WHERE idSolicitacoes = '$idSolicitacoes'
              ORDER BY 1 desc";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){
        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setEmpresa($linha['empresa']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setTelefone($linha['telefone']);
        $solicitacao->setOrigem($linha['origem']);
        $solicitacao->setEmpreOrigem($linha['empreOrigem']);
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setDestino($linha['destino']);
        $solicitacao->setEmpreDestino($linha['empreDestino']);
        $solicitacao->setEndereco($linha['endereco']);
        $solicitacao->setPontoReferencia($linha['pontoReferencia']);
        $solicitacao->setTelefoneDestino($linha['telefoneDestino']);
        $solicitacao->setData($linha['data']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setDescricao($linha['descricao']);
        $solicitacao->setMoto($linha['moto']);
        $solicitacao->setAnexo($linha['anexo']);
        $solicitacao->setRecebido($linha['recebido']);
        $solicitacao->setNotaFiscal($linha['notaFiscal']);

        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function getSetor($idSolicitacoes){  
    $sql = "SELECT setor,
                  telefoneDestino,
                  recebido,
	                notaFiscal                   
            FROM solicitacoes 
            where idSolicitacoes = $idSolicitacoes";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){

        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setTelefoneDestino($linha['telefoneDestino']);
        $solicitacao->setRecebido($linha['recebido']);
        $solicitacao->setNotaFiscal($linha['notaFiscal']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }


  public function getSolicitacaoUsuario($idSolicitacoes){  
    $sql = "  SELECT 
                  solicitacoes.nome,
                  solicitacoes.origem,
                  solicitacoes.setor,
                  solicitacoes.enderecoOrigem,
                  solicitacoes.empreOrigem,
                  solicitacoes.destino,
                  solicitacoes.setorDestino,
                  solicitacoes.endereco,
                  solicitacoes.empreDestino,
                  solicitacoes.solicitante,
                  solicitacoes.categoria,
                  solicitacoes.`data`,
                  solicitacoes.horario,
                  solicitacoes.telefone,
                  solicitacoes.moto,
                  solicitacoes.descricao,
                  solicitacoes.observacao,
                  solicitacoes.anexo,                
                  solicitacoes.status,
                  solicitacoes.kmInicial,
                  solicitacoes.kmFinal,
                  solicitacoes.kmUtilizado,
                  solicitacoes.recebido,
                  solicitacoes.rateio
              FROM solicitacoes, motoristas
              where idSolicitacoes = '$idSolicitacoes'";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $motorista = new Motorista();
      $result = array();

      foreach($linhas as $linha){
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setOrigem($linha['origem']);
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setEnderecoOrigem($linha['enderecoOrigem']);
        $solicitacao->setEmpreOrigem($linha['empreOrigem']);
        $solicitacao->setDestino($linha['destino']);
        $solicitacao->setSetorDestino($linha['setorDestino']);
        $solicitacao->setEndereco($linha['endereco']);
        $solicitacao->setEmpreDestino($linha['empreDestino']);
        $solicitacao->setSolicitante($linha['solicitante']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setData($linha['data']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setTelefone($linha['telefone']);
        $solicitacao->setMoto($linha['moto']);
        $solicitacao->setDescricao($linha['descricao']);
        $solicitacao->setObservacao($linha['observacao']);
        $solicitacao->setAnexo($linha['anexo']);
        $solicitacao->setStatus($linha['status']);
        $solicitacao->setRateio($linha['rateio']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
   }


   public function getRetornoEmail($idSolicitacoes){  
    $sql = "  SELECT 
                solicitacoes.nome,
                solicitacoes.origem,
                solicitacoes.setor,
                solicitacoes.enderecoOrigem,
                solicitacoes.empreOrigem,
                solicitacoes.destino,
                solicitacoes.setorDestino,
                solicitacoes.endereco,
                solicitacoes.empreDestino,
                solicitacoes.solicitante,
                solicitacoes.categoria,
                solicitacoes.`data`,
                solicitacoes.horario,
                solicitacoes.telefone,
                solicitacoes.moto,
                solicitacoes.descricao,
                solicitacoes.observacao,
                solicitacoes.obs,
                solicitacoes.anexo,                
                solicitacoes.status                
              FROM solicitacoes 
              where idSolicitacoes = '$idSolicitacoes'";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setOrigem($linha['origem']);
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setEnderecoOrigem($linha['enderecoOrigem']);
        $solicitacao->setEmpreOrigem($linha['empreOrigem']);
        $solicitacao->setDestino($linha['destino']);
        $solicitacao->setSetorDestino($linha['setorDestino']);
        $solicitacao->setEndereco($linha['endereco']);
        $solicitacao->setEmpreDestino($linha['empreDestino']);
        $solicitacao->setSolicitante($linha['solicitante']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setData($linha['data']);
        $solicitacao->setHorario($linha['horario']);
        $solicitacao->setTelefone($linha['telefone']);
        $solicitacao->setMoto($linha['moto']);
        $solicitacao->setDescricao($linha['descricao']);
        $solicitacao->setObservacao($linha['observacao']);
        $solicitacao->setObs($linha['obs']);
        $solicitacao->setAnexo($linha['anexo']);
        $solicitacao->setStatus($linha['status']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }


  public function  relSolicitacoes($status, $dataInicial, $dataFinal){  
    if($status == 'TODOS'){
      $sql =" 
        select 
        solicitacoes.idSolicitacoes,       
        solicitacoes.nome,
        solicitacoes.setor,
        solicitacoes.categoria,
        solicitacoes.descricao,
        solicitacoes.observacao,
        solicitacoes.obs,
        solicitacoes.origem,
        solicitacoes.empreOrigem, 
        solicitacoes.destino,
        solicitacoes.empreDestino,
        DATE_FORMAT(solicitacoes.dataSolicitacao,'%d/%m/%Y %H:%i') as dataSolicitacao,
        solicitacoes.idMotorista,
        solicitacoes.rateio,
        solicitacoes.kmInicial,
        solicitacoes.kmFinal,
        solicitacoes.kmUtilizado,
        solicitacoes.status	
        from solicitacoes
        where solicitacoes.dataSolicitacao between '$dataInicial' and '$dataFinal' 
        order by 1 asc "; 
    } else {
      $sql =" select  
              solicitacoes.idSolicitacoes,

              solicitacoes.nome,
              solicitacoes.setor,
              solicitacoes.categoria,
              solicitacoes.descricao,
              solicitacoes.observacao,
              solicitacoes.obs,
              solicitacoes.origem,
              solicitacoes.empreOrigem, 
              solicitacoes.destino,
              solicitacoes.empreDestino,
              DATE_FORMAT(solicitacoes.dataSolicitacao,'%d/%m/%Y %H:%i') as dataSolicitacao,
              solicitacoes.idMotorista,
              solicitacoes.rateio,
              solicitacoes.kmInicial,
              solicitacoes.kmFinal,
              solicitacoes.kmUtilizado,
              solicitacoes.status	
              from solicitacoes
              where solicitacoes.status = '$status'
              and solicitacoes.dataSolicitacao  between '$dataInicial' and '$dataFinal' 
              order by 1 asc "; 
    }    
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();

      foreach($linhas as $linha){
        $solicitacao->setIdSolicitacoes($linha['idSolicitacoes']);
        $solicitacao->setNome($linha['nome']);
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setCategoria($linha['categoria']);
        $solicitacao->setDescricao($linha['descricao']);
        $solicitacao->setObservacao($linha['observacao']);
        $solicitacao->setObs($linha['obs']);
        $solicitacao->setOrigem($linha['origem']);
        $solicitacao->setEmpreOrigem($linha['empreOrigem']);
        $solicitacao->setDestino($linha['destino']);
        $solicitacao->setEmpreDestino($linha['empreDestino']);
        $solicitacao->setDataSolicitacao($linha['dataSolicitacao']);
        $solicitacao->setRateio($linha['rateio']);
        $solicitacao->setKmInicial($linha['kmInicial']);
        $solicitacao->setKmFinal($linha['kmFinal']);
        $solicitacao->setKmUtilizado($linha['kmUtilizado']);
        $solicitacao->setStatus($linha['status']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function  relQtdKm($dataInicial, $dataFinal){  
    $sql =" 
          select
            sum(kmUtilizado) kmUtilizado, 
            setor,
            cdSetor
          from solicitacoes
          where status not in ('CANCELADO')
            and kmUtilizado is not null 
            and kmUtilizado >= 0
            and data between '$dataInicial' and '$dataFinal'
          group by setor, cdSetor
          order by setor asc  ";         
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();
      foreach($linhas as $linha){
        $solicitacao->setSetor($linha['setor']);
        $solicitacao->setCdSetor($linha['cdSetor']);
        $solicitacao->setKmUtilizado($linha['kmUtilizado']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }


  public function  testeKM($dataInicial, $dataFinal){  
    echo $sql =" 
          select
              sum(kmUtilizado) kmUtilizado, cdSetor, date_format('$dataInicial', ''%Y-%m-%d) dataSolicitacao
          from solicitacoes
          where status not in ('CANCELADO')
            and kmUtilizado is not null 
            and kmUtilizado >= 0
            and cdSetor > 0
            and dataSolicitacao  between '$dataInicial' and '$dataFinal'
          group by cdSetor
          order by cdSetor asc ";         
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();
      foreach($linhas as $linha){
        $solicitacao->setCdSetor($linha['cdSetor']);
        $solicitacao->setKmUtilizado($linha['kmUtilizado']);
        $solicitacao->setDataSolicitacao($linha['dataSolicitacao']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;
  }

  public function getTotalKm($dataInicial, $dataFinal){
    $sql = "
      SELECT Sum(kmUtilizado) kmUtilizado
      FROM `solicitacoes`
      WHERE data between '$dataInicial' and '$dataFinal' 
        and status not in ('CANCELADO')
        and kmUtilizado >= 0   
    ";
    $this->con->conectar();
    $this->con->query($sql);

    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $solicitacao = new Solicitacao();
      $result = array();
      foreach($linhas as $linha){
        $solicitacao->setKmUtilizado($linha['kmUtilizado']);
        $result[] = clone $solicitacao;
      }
      return $result;
    }
    else return false;

  }
}