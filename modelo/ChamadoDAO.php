<?php
require_once('conexao.php');
date_default_timezone_set('America/Sao_Paulo');
class ChamadoDAO
{
    private $con;
    
    public function ChamadoDAO()
    {
        $this->con = new Conexao();
    }


    /*
    // CADASTRAR NOVO FUNCIONARIO
    public function inserirChamado($nome, $setor, $telefone, $email, $descricao,$idTipo, $unidade, $titulo, $relator)
    {
       
      
      $sql    = "INSERT INTO chamados(nome, 
                                          setor, 
                                          telefone, 
                                          email, 
                                          descricao, 
                                          data, 
                                          status, 
                                          idUsuario, 
                                          idTipo,
                                          unidade,
                                          titulo,
                                          relator)
                        VALUES('$nome', '$setor', '$telefone', '$email', '$descricao',NOW(), 'ABERTO', '0','$idTipo','$unidade', '$titulo', '$relator')";
        $this->con->conectar();
        $this->con->query($sql) ? $result = true : $result = false;
        if ($result) {
            $sql = "SELECT LAST_INSERT_ID() as idChamado";
            $this->con->query($sql);
            if ($this->con->numRows() == 1)
                return $this->con->getResult(0, 'idChamado');
            else
                return false;
        }
        $this->con->desconectar();
        return $result;
    }*/

    public function inserirChamado($nome, $setor, $telefone, $email, $descricao,$idTipo, $unidade, $titulo, $relator){
    $status = 'ABERTO';
    $idUsuario = '0';

    $data = date('y/m/d H:i');

    $sql = sprintf('insert into chamados(nome, 
                                          setor, 
                                          telefone, 
                                          email, 
                                          descricao, 
                                          data, 
                                          status, 
                                          idUsuario, 
                                          idTipo,
                                          unidade,
                                          titulo,
                                          relator)
                        values("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s")',$nome, $setor, $telefone, $email, $descricao,$data, $status, $idUsuario,$idTipo,$unidade,$titulo,$relator);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  }



    public function getUltimoChamado(){  
    $sql = "SELECT idChamado,
                   nome,
                   setor,
                   telefone,
                   email,
                   descricao,
                   DATA,
                   STATUS,
                   idUsuario,
                   idTipo 
              FROM chamados
              ORDER BY 1 DESC
              LIMIT 1";
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
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }

  public function getChamado($idChamado){  
   $sql = "SELECT chamados.idChamado, 
                       chamados.nome, 
                       chamados.setor, 
                       chamados.telefone, 
                       chamados.email, 
                       chamados.descricao, 
                       chamados.STATUS, 
                       chamados.idUsuario, 
                       chamados.idTipo, 
                       chamados.unidade, 
                       chamados.acao,
                       usuarios.nome AS responsavel
                   FROM chamados 
              LEFT JOIN usuarios ON chamados.idUsuario = usuarios.matricula
              where idChamado = $idChamado
              ORDER BY 1 DESC
              LIMIT 1";
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
        $chamado->setData($linha['responsavel']);
        $chamado->setStatus($linha['STATUS']);
        $chamado->setEmail($linha['email']);
        $chamado->setIdUsuario($linha['idUsuario']);
        $chamado->setIdTipo($linha['idTipo']);
        $chamado->setUnidade($linha['unidade']);
        $chamado->setAcao($linha['acao']);
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

  public function listaChamadosUsuarios($matricula){  
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
              where chamados.idUsuario = '$matricula'
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


  public function backlogMensal($mes){ 
    if ($mes == 'JANEIRO'){
      $data = '2018-12-31';
    } 

    else if ($mes == 'FEVEREIRO'){
      $data = '2019-01-31';
    }

    else if ($mes == 'MARCO'){
      $data = '2019-02-28';
    } 

    else if ($mes == 'ABRIL'){
      $data = '2019-03-31';
    } 
    $sql = "SELECT chamados.idChamado,
                   chamados.nome,
                   chamados.setor,
                   chamados.telefone,
                   usuarios.nome responsavel,
                   chamados.status,
                   chamados.data
              FROM chamados, usuarios
             WHERE chamados.idUsuario = usuarios.matricula 
              AND chamados.status IN ('ABERTO', 'AGUARDANDO ATENDIMENTO', 'AGENDADO')
              AND DATA < '$data'
              AND chamados.idChamado NOT IN (694,1092,1542,2017,2493,2564,3228, 2019) 
              order by 1";
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
        $chamado->setData($linha['data']);
        $chamado->setStatus($linha['status']);
        $chamado->setIdUsuario($linha['responsavel']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }


  public function backlogMensalFechamento($mes){ 
    if ($mes == 'JANEIRO'){
      $data = '2018-12-31';
      $dataIni = '2019-01-01';
      $dataFim = '2019-01-31';
    } 

    else if ($mes == 'FEVEREIRO'){
      $data = '2019-01-31';
      $dataIni = '2019-02-01';
      $dataFim = '2019-02-28';
    }

    else if ($mes == 'MARCO'){
      $data = '2019-02-28';
      $dataIni = '2019-03-01';
      $dataFim = '2019-03-31';
    } 

    else if ($mes == 'ABRIL'){
      $data = '2019-03-31';
      $dataIni = '2019-01-01';
      $dataFim = '2019-01-30';
    } 
    $sql = "SELECT chamados.idChamado,
                   chamados.nome,
                   chamados.setor,
                   chamados.telefone,
                   usuarios.nome responsavel,
                   chamados.status,
                   chamados.data,
                   chamados.dataFechamento
              FROM chamados, usuarios
             WHERE chamados.idUsuario = usuarios.matricula 
              AND chamados.status IN ('FECHADO')
              AND DATA < '$data'
              AND dataFechamento BETWEEN '$dataIni' AND '$dataFim'
              AND chamados.idChamado NOT IN (694,1092,1542,2017,2493,2564,3228, 2019) 
              ORDER BY 1";
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
        $chamado->setData($linha['data']);
        $chamado->setStatus($linha['status']);
        $chamado->setIdUsuario($linha['responsavel']);
        $chamado->setDataFechamento($linha['dataFechamento']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }


  public function listaChamadosUsuariosFechado($matricula){  
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
              where chamados.idUsuario = '$matricula'
                and chamados.STATUS = 'FECHADO'
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

  public function listaChamadosUser($user){  
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
              where chamados.relator = '$user'
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

  public function listaChamadosSistemas(){  
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
              where chamados.idTipo IN (2,5,7)
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

  public function listaChamadosInfra(){  
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
                          WHERE chamados.idTipo IN (1,3,4,6)
                          AND chamados.STATUS <> 'FECHADO'
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
        $chamado->setEmail($linha['responsavel']);
        $chamado->setDescricao($linha['descricao']);
        $chamado->setData($linha['DATA']);
        $chamado->setStatus($linha['STATUS']);
        $chamado->setIdUsuario($linha['idUsuario']);
        $chamado->setIdTipo($linha['idTipo']);
        $chamado->setUnidade($linha['unidade']);
        $chamado->setTitulo($linha['titulo']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }


  public function atualizarChamado($nome,$setor,$idTipo,$telefone,$email,$descricao,$status,$acao,$idChamado,$idUsuario,$unidade){
  $sql = sprintf("update chamados 
                         set nome = '$nome',
                          setor = '$setor',
						              idTipo='$idTipo',
                          telefone = '$telefone',
                          email = '$email',
                          descricao = '$descricao',
                          STATUS = '$status',
                          dataFechamento = NOW(),
                          unidade = '$unidade', 
                          acao = '$acao', 
                          idUsuario = '$idUsuario'
                        where idChamado = '$idChamado'");
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar();
    return $result;
  }





    public function getIdUltimoEquipamento()
    {
        
        $sql = "SELECT idEquipamento
                FROM equipamentos 
                ORDER BY 1 DESC
                LIMIT 1";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }


    public function getDadosCadastroEquipamento($idEquipamento)
    {
        
        $sql = "SELECT equipamentos.idTipo,
                       tipos.descricao                      AS tipo,
                       equipamentos.idFornecedor,
                       fornecedores.descricao                AS fornecedor,
                       equipamentos.ptr1,
                       equipamentos.ptr2,
                       equipamentos.ptr3,
                       equipamentos.modelo,
                       equipamentos.idMarca,
                       marcas.descricao                     AS marca,
                       equipamentos.serial,
                       equipamentos.obs,
                       equipamentos.status,
                       equipamentos.dt_cadastro, 
                       dadosequipamentos.idUnidade,
                       unidades.descricao                   AS unidade,
                       dadosequipamentos.idSetor,
                       setores.descricao                    AS setor,
                       dadosequipamentos.usuarioResponsavel AS responsavel,
                       dadosequipamentos.hostname,
                       dadosequipamentos.gerencia,
                       dadosequipamentos.processador,
                       dadosequipamentos.memoria,
                       dadosequipamentos.hd,
                       dadosequipamentos.classificacao,
                       dadosequipamentos.rede,
                       DATE_FORMAT(dadosequipamentos.dtAquisicao, '%d/%m/%Y') AS aquisicao,
                       equipamentos.perifericos,
                       equipamentos.contrato,
                       equipamentos.status,
                       equipamentos.serial,
                       equipamentos.contrato
                  FROM dadosequipamentos
                  LEFT JOIN unidades ON dadosequipamentos.idUnidade = unidades.idUnidade
                  LEFT JOIN setores ON dadosequipamentos.idSetor = setores.idSetor
                  JOIN equipamentos ON dadosequipamentos.idEquipamento = equipamentos.idEquipamento
                  LEFT JOIN fornecedores ON equipamentos.idFornecedor = fornecedores.idFornecedor
                  LEFT JOIN marcas ON equipamentos.idMarca = marcas.idMarca
                  LEFT JOIN tipos ON equipamentos.idTipo = tipos.idTipo
                  WHERE equipamentos.idEquipamento = '$idEquipamento'
               ORDER BY dadosequipamentos.idDadosEquipamentos DESC
                                      LIMIT 1";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getUniqResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }


    public function getHistoricoDadosEquipamento($idEquipamento)
    {
        
      
      $sql = "SELECT equipamentos.idTipo,
                       tipos.descricao                      AS tipo,
                       equipamentos.idFornecedor,
                       fornecedores.descricao                AS fornecedor,
                       equipamentos.ptr1,
                       equipamentos.ptr2,
                       equipamentos.ptr3,
                       equipamentos.modelo,
                       equipamentos.idMarca,
                       marcas.descricao                     AS marca,
                       equipamentos.serial,
                       equipamentos.obs,
                       equipamentos.status,
                       DATE_FORMAT(dadosequipamentos.dtAlteracao, '%d/%m/%Y') AS dtAlteracao, 
                       dadosequipamentos.idUnidade,
                       unidades.descricao                   AS unidade,
                       dadosequipamentos.idSetor,
                       setores.descricao                    AS setor,
                       dadosequipamentos.usuarioResponsavel AS responsavel,
                       dadosequipamentos.hostname,
                       dadosequipamentos.processador,
                       dadosequipamentos.memoria,
                       dadosequipamentos.hd,
                       dadosequipamentos.classificacao,
                       dadosequipamentos.rede,
                       DATE_FORMAT(dadosequipamentos.dtAquisicao, '%d/%m/%Y') AS aquisicao
                  FROM equipamentos, tipos, dadosequipamentos, fornecedores, marcas, unidades, setores 
                 WHERE equipamentos.idEquipamento = dadosequipamentos.idEquipamento
                   AND equipamentos.idTipo = tipos.idTipo
                   AND equipamentos.idFornecedor = fornecedores.IdFornecedor
                   AND equipamentos.idMarca = marcas.idMarca
                   AND dadosequipamentos.idUnidade = unidades.idUnidade
                   AND dadosequipamentos.idSetor = setores.idSetor
                    AND equipamentos.idEquipamento = '$idEquipamento'
                   order by dadosequipamentos.idDadosEquipamentos desc";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }


    // CADASTRAR NOVO FUNCIONARIO
    public function inserirRelacionamento($idEquipamentoPai, $idEquipamento)
    {
       
        $sql    = "INSERT INTO relacionamento (idEquipamentoPai, 
                                               idEquipamentoFilho)
                                        VALUE ($idEquipamentoPai, $idEquipamento)";
        $this->con->conectar();
        $this->con->query($sql) ? $result = true : $result = false;
        if ($result) {
            $sql = "SELECT LAST_INSERT_ID() as idEquipamento";
            $this->con->query($sql);
            if ($this->con->numRows() == 1)
                return $this->con->getResult(0, 'idEquipamento');
            else
                return false;
        }
        $this->con->desconectar();
        return $result;
    }


    public function atualizarEquipamentos($idEquipamento,$idTipo,$idFornecedor,$ptr1,$ptr2,$ptr3,$modelo,$idMarca,$serial,$obs,$status,$contrato,$perifericos)
    {
       
       $sql    = "UPDATE equipamentos 
                      SET idTipo = '$idTipo',
                          idFornecedor = '$idFornecedor',
                          ptr1 = '$ptr1',
                          ptr2 = '$ptr2',
                          ptr3 = '$ptr3',
                          modelo = '$modelo',
                          idMarca = '$idMarca',
                          serial = '$serial',
                          obs = '$obs',
                          status = '$status',
                          contrato = '$contrato',
                          perifericos = '$perifericos'
                    where idEquipamento = '$idEquipamento'";
        $this->con->conectar();
        $this->con->query($sql) ? $result = true : $result = false;
        if ($result) {
            $sql = "SELECT LAST_INSERT_ID() as idEquipamento";
            $this->con->query($sql);
            if ($this->con->numRows() == 1)
                return $this->con->getResult(0, 'idEquipamento');
            else
                return false;
        }
        $this->con->desconectar();
        return $result;
    }


    public function getDadosEquipamentoSetor($idSetor)
    {
        
         $sql = "SELECT distinct equipamentos.idEquipamento,
                       equipamentos.idTipo,
                       tipos.descricao                      AS tipo,
                       equipamentos.idFornecedor,
                       fornecedores.descricao                AS fornecedor,
                       equipamentos.ptr1,
                       equipamentos.ptr2,
                       equipamentos.ptr3,
                       equipamentos.modelo,
                       equipamentos.idMarca,
                       marcas.descricao                     AS marca,
                       equipamentos.serial,
                       equipamentos.obs,
                       equipamentos.status,
                       equipamentos.dt_cadastro, 
                       dadosequipamentos.idUnidade,
                       unidades.descricao                   AS unidade,
                       dadosequipamentos.idSetor,
                       setores.descricao                    AS setor,
                       dadosequipamentos.usuarioResponsavel AS responsavel,
                       dadosequipamentos.hostname,
                       dadosequipamentos.processador,
                       dadosequipamentos.memoria,
                       dadosequipamentos.hd
                  FROM equipamentos, tipos, dadosequipamentos, fornecedores, marcas, unidades, setores 
                 WHERE equipamentos.idEquipamento = dadosequipamentos.idEquipamento
                   AND equipamentos.idTipo = tipos.idTipo
                   AND equipamentos.idFornecedor = fornecedores.IdFornecedor
                   AND equipamentos.idMarca = marcas.idMarca
                   AND dadosequipamentos.idUnidade = unidades.idUnidade
                   AND dadosequipamentos.idSetor = setores.idSetor
                    AND dadosequipamentos.idSetor = '$idSetor'
                    AND dadosequipamentos.dtAlteracao IN (SELECT MAX(de.dtAlteracao)
                                                          FROM dadosequipamentos de
                                                         WHERE de.idEquipamento = dadosequipamentos.idEquipamento)";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }


    public function getDadosEquipamentoSetorComprovante($idSetor)
    {
        
        $sql = "SELECT DISTINCT        equipamentos.idEquipamento,
                       equipamentos.idTipo,
                       tipos.descricao                      AS tipo,
                       equipamentos.ptr1,
                       equipamentos.ptr2,
                       equipamentos.ptr3,
                       equipamentos.serial,
                       dadosequipamentos.idUnidade,
                       unidades.descricao                   AS unidade,
                       dadosequipamentos.idSetor,
                       setores.descricao                    AS setor,
                       setores.cd_hierarquico,
                       tipos.descricao AS tipo,
                       equipamentos.modelo as modelo,
                       marcas.descricao AS marca,
                       dadosequipamentos.usuarioResponsavel,
                       dadosequipamentos.processador AS processador,
                       dadosequipamentos.hd AS hd,
                       dadosequipamentos.memoria AS memoria
                  FROM equipamentos, tipos, dadosequipamentos, unidades, setores, marcas
                 WHERE equipamentos.idEquipamento = dadosequipamentos.idEquipamento
                   AND equipamentos.idTipo = tipos.idTipo
                   AND dadosequipamentos.idUnidade = unidades.idUnidade
                   AND dadosequipamentos.idSetor = setores.idSetor
                   AND equipamentos.idMarca = marcas.idMarca
                    AND dadosequipamentos.idSetor = '$idSetor'";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }

    public function getDadosEquipamentoSetorComprovanteCabecalho($idSetor)
    {
        
        $sql = "SELECT DISTINCT        equipamentos.idEquipamento,
                       equipamentos.idTipo,
                       tipos.descricao                      AS tipo,
                       equipamentos.ptr1,
                       equipamentos.ptr2,
                       equipamentos.ptr3,
                       equipamentos.serial,
                       dadosequipamentos.idUnidade,
                       unidades.descricao                   AS unidade,
                       dadosequipamentos.idSetor,
                       setores.descricao                    AS setor,
                       setores.cd_hierarquico,
                       dadosequipamentos.usuarioResponsavel
                  FROM equipamentos, tipos, dadosequipamentos, unidades, setores 
                 WHERE equipamentos.idEquipamento = dadosequipamentos.idEquipamento
                   AND equipamentos.idTipo = tipos.idTipo
                   AND dadosequipamentos.idUnidade = unidades.idUnidade
                   AND dadosequipamentos.idSetor = setores.idSetor
                    AND dadosequipamentos.idSetor = '$idSetor'
                    limit 1";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }



    public function getDadosEquipamentos()
    {
        
         $sql = "SELECT distinct dadosequipamentos.idUnidade,
                           dadosequipamentos.idSetor,
                           dadosequipamentos.usuarioResponsavel AS responsavel,
                           dadosequipamentos.hostname,
                           dadosequipamentos.processador,
                           dadosequipamentos.memoria,
                           dadosequipamentos.hd,
                           unidades.descricao AS unidade,
                           setores.descricao AS setor,                
                           equipamentos.idEquipamento,
                           equipamentos.idTipo,
                           equipamentos.idFornecedor,
                           equipamentos.ptr1,
                           equipamentos.ptr2,
                           equipamentos.ptr3,
                           equipamentos.modelo,
                           equipamentos.idMarca,
                           equipamentos.serial,
                           equipamentos.obs,
                           equipamentos.status,
                           equipamentos.dt_cadastro,
                           fornecedores.descricao AS fornecedor,
                           marcas.descricao AS marca,
                           tipos.descricao AS tipo
                    FROM dadosequipamentos
                    LEFT JOIN unidades ON dadosequipamentos.idUnidade = unidades.idUnidade
                    LEFT JOIN setores ON dadosequipamentos.idSetor = setores.idSetor
                    JOIN equipamentos ON dadosequipamentos.idEquipamento = equipamentos.idEquipamento
                    LEFT JOIN fornecedores ON equipamentos.idFornecedor = fornecedores.idFornecedor
                    LEFT JOIN marcas ON equipamentos.idMarca = marcas.idMarca
                    LEFT JOIN tipos ON equipamentos.idTipo = tipos.idTipo
                   where dadosequipamentos.dtAlteracao IN (SELECT MAX(de.dtAlteracao)
                                                          FROM dadosequipamentos de
                                                         WHERE de.idEquipamento = dadosequipamentos.idEquipamento)";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }


    public function getDadosEquipamentosPtr($ptr)
    {
        
         $sql = "SELECT dadosequipamentos.idUnidade,
                           dadosequipamentos.idSetor,
                           dadosequipamentos.usuarioResponsavel AS responsavel,
                           dadosequipamentos.hostname,
                           dadosequipamentos.processador,
                           dadosequipamentos.memoria,
                           dadosequipamentos.hd,
                           unidades.descricao AS unidade,
                           setores.descricao AS setor,                
                           equipamentos.idEquipamento,
                           equipamentos.idTipo,
                           equipamentos.idFornecedor,
                           equipamentos.ptr1,
                           equipamentos.ptr2,
                           equipamentos.ptr3,
                           equipamentos.modelo,
                           equipamentos.idMarca,
                           equipamentos.serial,
                           equipamentos.obs,
                           equipamentos.status,
                           equipamentos.dt_cadastro,
                           fornecedores.descricao AS fornecedor,
                           marcas.descricao AS marca,
                           tipos.descricao AS tipo
                    FROM dadosequipamentos
                    LEFT JOIN unidades ON dadosequipamentos.idUnidade = unidades.idUnidade
                    LEFT JOIN setores ON dadosequipamentos.idSetor = setores.idSetor
                    JOIN equipamentos ON dadosequipamentos.idEquipamento = equipamentos.idEquipamento
                    LEFT JOIN fornecedores ON equipamentos.idFornecedor = fornecedores.idFornecedor
                    LEFT JOIN marcas ON equipamentos.idMarca = marcas.idMarca
                    LEFT JOIN tipos ON equipamentos.idTipo = tipos.idTipo
                    WHERE equipamentos.ptr1 LIKE '%$ptr%'
                      AND  dadosequipamentos.dtAlteracao IN (SELECT MAX(de.dtAlteracao)
                                                          FROM dadosequipamentos de
                                                         WHERE de.idEquipamento = dadosequipamentos.idEquipamento)";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }



    public function getDadosEquipamentosSetor($idSetor)
    {
        
         $sql = "SELECT dadosequipamentos.idUnidade,
                           dadosequipamentos.idSetor,
                           dadosequipamentos.usuarioResponsavel AS responsavel,
                           dadosequipamentos.hostname,
                           dadosequipamentos.processador,
                           dadosequipamentos.memoria,
                           dadosequipamentos.hd,
                           unidades.descricao AS unidade,
                           setores.descricao AS setor,                
                           equipamentos.idEquipamento,
                           equipamentos.idTipo,
                           equipamentos.idFornecedor,
                           equipamentos.ptr1,
                           equipamentos.ptr2,
                           equipamentos.ptr3,
                           equipamentos.modelo,
                           equipamentos.idMarca,
                           equipamentos.serial,
                           equipamentos.obs,
                           equipamentos.status,
                           equipamentos.dt_cadastro,
                           fornecedores.descricao AS fornecedor,
                           marcas.descricao AS marca,
                           tipos.descricao AS tipo
                    FROM dadosequipamentos
                    LEFT JOIN unidades ON dadosequipamentos.idUnidade = unidades.idUnidade
                    LEFT JOIN setores ON dadosequipamentos.idSetor = setores.idSetor
                    JOIN equipamentos ON dadosequipamentos.idEquipamento = equipamentos.idEquipamento
                    LEFT JOIN fornecedores ON equipamentos.idFornecedor = fornecedores.idFornecedor
                    LEFT JOIN marcas ON equipamentos.idMarca = marcas.idMarca
                    LEFT JOIN tipos ON equipamentos.idTipo = tipos.idTipo
                    WHERE dadosequipamentos.idSetor LIKE '%$idSetor%'
                      AND  dadosequipamentos.dtAlteracao IN (SELECT MAX(de.dtAlteracao)
                                                          FROM dadosequipamentos de
                                                         WHERE de.idEquipamento = dadosequipamentos.idEquipamento)";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }


    public function getDadosEquipamentoRel($dtInicial,$dtFinal)
    {
        
       $sql = "SELECT equipamentos.idTipo,
                       tipos.descricao                      AS tipo,
                       equipamentos.idFornecedor,
                       fornecedores.descricao                AS fornecedor,
                       equipamentos.ptr1,
                       equipamentos.ptr2,
                       equipamentos.ptr3,
                       equipamentos.modelo,
                       equipamentos.idMarca,
                       marcas.descricao                     AS marca,
                       equipamentos.serial,
                       equipamentos.obs,
                       equipamentos.status,
                       equipamentos.dt_cadastro, 
                       dadosequipamentos.idUnidade,
                       unidades.descricao                   AS unidade,
                       dadosequipamentos.idSetor,
                       setores.descricao                    AS setor,
                       dadosequipamentos.usuarioResponsavel AS responsavel,
                       dadosequipamentos.hostname,
                       dadosequipamentos.gerencia,
                       dadosequipamentos.processador,
                       dadosequipamentos.memoria,
                       dadosequipamentos.hd,
                       dadosequipamentos.classificacao,
                       dadosequipamentos.rede,
                       DATE_FORMAT(dadosequipamentos.dtAquisicao, '%d/%m/%Y') AS aquisicao,
                       equipamentos.perifericos,
                       equipamentos.contrato,
                       equipamentos.status,
                       equipamentos.serial,
                       equipamentos.contrato
                  FROM dadosequipamentos
                  LEFT JOIN unidades ON dadosequipamentos.idUnidade = unidades.idUnidade
                  LEFT JOIN setores ON dadosequipamentos.idSetor = setores.idSetor
                  JOIN equipamentos ON dadosequipamentos.idEquipamento = equipamentos.idEquipamento
                  LEFT JOIN fornecedores ON equipamentos.idFornecedor = fornecedores.idFornecedor
                  LEFT JOIN marcas ON equipamentos.idMarca = marcas.idMarca
                  LEFT JOIN tipos ON equipamentos.idTipo = tipos.idTipo
                  WHERE equipamentos.dt_cadastro BETWEEN '$dtInicial' AND '$dtFinal'
               ORDER BY dadosequipamentos.idDadosEquipamentos DESC";
        $this->con->conectar();
        if ($this->con->query($sql)) {
            if ($this->con->numRows() > 0) {
                $linhas = array();
                $linhas = $this->con->getArrayResult();
                return $linhas;
            } else
                return false;
        } else
            $this->con->getError();
    }
	
	
	
	public function getComboTipoChamados(){    // seleciona todos usuarios para o combobox
    echo $sql = "select distinct idTipo FROM chamados";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $chamado = new Chamado();
      $result = array();

      foreach($linhas as $linha){
        $chamado->setIdTipo($linha['idTipo']);
        $result[] = clone $chamado;
      }
      return $result;
    }
    else return false;
  }

	
	

    
   

}
