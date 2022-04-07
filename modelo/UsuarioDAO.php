<?php
require_once('conexao.php');

class UsuarioDAO
{
    private $con;
    
    public function UsuarioDAO()
    {
        $this->con = new Conexao();
    }


    public function inserirUsuario($nome, $setor, $email, $matricula, $senha){
        $senha = md5($senha);
        $acesso = 'admin';
        $sql = sprintf("insert into usuarios(nome, setor, email, matricula, senha, acesso)
                        values('%s','%s','%s','%s','%s','%s')",$nome, $setor, $email, $matricula, $senha, $acesso);
    $this->con->conectar();
    $this->con->query($sql) ? $result=true : $result=false;
    $this->con->desconectar(); 
    return $result;
  } 

  public function verificarLogin($matricula,$senha){
        $senha = md5($senha);
  echo $sql = sprintf("SELECT matricula,
                   nome,
                   email,
                   setor,
                   senha,
                   acesso 
              FROM usuarios 
              where matricula='%s' and senha='%s'",$matricula,$senha);
    $this->con->conectar();
    $this->con->query($sql);
    $this->con->desconectar();
    if($this->con->numRows()==1){
      $usuario = new Usuario();
      $usuario->setMatricula($this->con->getResult(0,'matricula'));
      $usuario->setNome($this->con->getResult(0,'nome'));
      $usuario->setEmail($this->con->getResult(0,'email'));
      $usuario->setSetor($this->con->getResult(0,'setor'));
      $usuario->setSenha($this->con->getResult(0,'senha'));
      $usuario->setAcesso($this->con->getResult(0,'acesso'));
      return clone $usuario;
    }
    return false;
  }
    
    
   

  public function getComboUsuarios(){    // seleciona todos usuarios para o combobox
    echo $sql = "SELECT matricula, nome FROM usuarios where status <> 'I' order by nome ";
    $this->con->conectar();
    $this->con->query($sql);
    if($this->con->numRows()>0){
      $linhas = array();
      $linhas = $this->con->getArrayResult();
      $usuario = new Usuario();
      $result = array();

      foreach($linhas as $linha){
        $usuario->setMatricula($linha['matricula']);
        $usuario->setNome($linha['nome']);
        $result[] = clone $usuario;
      }
      return $result;
    }
    else return false;
  }

  public function updateSenha($matricula, $senha){
    $senha = md5($senha);
    echo $sql = sprintf("update usuarios 
                      set senha = '$senha'
                      where matricula in ($matricula)");
      $this->con->query($sql) ? $result=true : $result=false;
      $this->con->desconectar();
      return $result;
    }
   

}
