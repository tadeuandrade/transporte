	<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
    	  require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        
        //$idTipo = $_GET["idTipo"]; 
        $usuario = $_SESSION['usuario'];
        $dao = new SolicitacaoDAO();
        $lista = $dao-> listaSolicitacoesPacienteUsuario($usuario);

         if($lista)
         {
            echo '<table class="table table-borderless">
                      <thead class="thead">
                          <tr>
                            <th scope="col" colspan="10" class="bg-primary"><div align="center"><h5>SOLICITAÇÕES DE PACIENTE</h5></div></th>
                          </tr>
                        </thead> 
                      <thead>
                        <tr>
                          <th scope="col">COD</th>
                          <th scope="col">TIPO</th>
                          <th scope="col">NOME / PACIENTE</th>
                          <th scope="col">DATA / HORÁRIO</th>
                          <th scope="col">VISUALIZAR</th>
                          <th scope="col">IMPRIMIR</th>
                        </tr>
                      </thead>
                    <tbody>';
                foreach($lista as $item)
                {

                        $idSolicitacoes = $item -> getIdSolicitacoes();
                        $categoria = $item -> getCategoria();
                        $nome = $item -> getNome();
                        $data = $item -> getData();
                        $horario = $item -> getHorario();
                        $status = $item -> getStatus();

                        $paciente = $item -> getPaciente();


                        $data = date('d/m/Y H:i:s', strtotime($data));


                            echo '<tr>
                                      <th scope="row">'.$idSolicitacoes.'</th>
                                      <td class="fundo'.$status.'">'.$categoria.'</td>
                                      <td class="fundo'.$status.'">'.$nome.''.$paciente.'</td>
                                      <td class="fundo'.$status.'">'.$data.'</td>
                                      <td class="fundo'.$status.'"><a href="atenderSolicitacaoUsuario.php?idSolicitacoes='.$idSolicitacoes.'"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                      <td class="fundo'.$status.'"><a href="impressoSolicitacaoPaciente.php?idSolicitacoes='.$idSolicitacoes.'"><i class="glyphicon glyphicon-file"></i></a></td>
                                    </tr>';

                     
                
      }
    	echo '</tbody>
            </table>';
    	}
    	else {
                    echo '<br>Não existe solicitacoes nesse momento!' ;
                           }
?>
<style>
  .fundoABERTA{
    background: #fff;
    color: #000;
  }
  .fundoEM{
    background: #ffa500;
    color: #000;
  }
  .fundoCANCELADO{
    background: red;
    color: #000;
  }
  .fundoCONCLUIDO{
    background: green;
    color: #000;
  }
</style> 
