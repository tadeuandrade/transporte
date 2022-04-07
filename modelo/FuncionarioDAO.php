<?php
require_once('conexao.php');


class FuncionarioDAO {
    private $con;

    public function FuncionarioDAO(){
        $this->con = new Conexao();
    }

    public function getFuncionarios(){    // seleciona todos usuarios para o combobox
        $sql = "SELECT idFuncionario,
                        matricula,
                        nome,
                        status,
                        cdSetor
                FROM funcionarios
                WHERE STATUS = 'ATIVO'
                ORDER BY 3,2";
        $this->con->conectar();
        $this->con->query($sql);
        if($this->con->numRows()>0){
          $linhas = array();
          $linhas = $this->con->getArrayResult();
          $funcionario = new Funcionario();
          $result = array();
    
          foreach($linhas as $linha){
            $funcionario->setIdFuncionario($linha['idFuncionario']);
            $funcionario->setMatricula($linha['matricula']);
            $funcionario->setNome($linha['nome']);
            $funcionario->setStatus($linha['status']);
            $funcionario->setCdSetor($linha['cdSetor']);
            $result[] = clone $funcionario;
          }
          return $result;
        }
        else return false;
      }
    public function getFuncionariosChamado($idSolicitacoes){    // seleciona todos usuarios para o combobox
        $sql = "SELECT  funcionarios.idFuncionario,
                        funcionarios.matricula,
                        funcionarios.nome,
                        funcionarios.status,
                        funcionarios.cdSetor
                FROM funcionarios, solicitacoes
                WHERE funcionarios.status = 'ATIVO'
                  and solicitacoes.idFuncionario = funcionarios.idFuncionario
                  and solicitacoes.idSolicitacoes = '$idSolicitacoes'
                ORDER BY 3,2";
        $this->con->conectar();
        $this->con->query($sql);
        if($this->con->numRows()>0){
          $linhas = array();
          $linhas = $this->con->getArrayResult();
          $funcionario = new Funcionario();
          $result = array();
    
          foreach($linhas as $linha){
            $funcionario->setIdFuncionario($linha['idFuncionario']);
            $funcionario->setMatricula($linha['matricula']);
            $funcionario->setNome($linha['nome']);
            $funcionario->setStatus($linha['status']);
            // $funcionario->setCdSetor($linha['cdSetor']);
            $result[] = clone $funcionario;
          }
          return $result;
        }
        else return false;
      }

      public function inserirFuncionario($matricula, $nome, $cdSetor){
        $status = 'ATIVO';
        $sql = sprintf("insert into 
                             funcionarios(matricula, nome, cdSetor, status)
                             values('%s','%s','%s','%s')",$matricula, $nome, $cdSetor, $status);
      $this->con->conectar();
      $this->con->query($sql) ? $result=true : $result=false;
      $this->con->desconectar(); 
      return $result;
    } 
}