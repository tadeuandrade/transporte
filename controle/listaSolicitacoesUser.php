	<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
    	  require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        
        //$user = $_GET["usuario"]; 

        $dao = new SolicitacaoDAO();
        $lista = $dao-> listaSolicitacoesDocumentos();


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
                          <th scope="col">#</th>
                          <th scope="col">COD</th>
                          <th scope="col">TIPO</th>
                          <th scope="col">NOME / PACIENTE</th>
                          <th scope="col">DATA / HORÁRIO</th>
                          <th scope="col">VISUALIZAR</th>
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
                                      <td><input type="checkbox" id="horns" name="horns"></td>
                                      <th scope="row">'.$idSolicitacoes.'</th>
                                      <td>'.$categoria.'</td>
                                      <td>'.$nome.''.$paciente.'</td>
                                      <td>'.$data.'</td>
                                      <td><a href="atenderSolicitacaoPaciente.php?idSolicitacoes='.$idSolicitacoes.'"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                    </tr>';

                     
                
      }
    	echo '</tbody>
            </table>';
    	}
    	else {
                    echo 'Não existe solicitacoes nesse momento!' ;
                           }

