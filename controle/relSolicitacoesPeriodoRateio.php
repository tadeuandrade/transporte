	<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
    	  require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        
        $status = $_GET["status"]; 
        $dataInicial = $_GET["dataInicial"]; 
        $dataFinal = $_GET["dataFinal"]; 

        $dao = new SolicitacaoDAO();
        $lista = $dao-> relSolicitacaoPerido($status, $dataInicial, $dataFinal);

         if($lista)
         {
            echo '<table class="table table-sm">
                      <thead>
                        <tr>
                          <th scope="col">COD</th>
                          <th scope="col">TIPO</th>
                          <th scope="col">NOME / PACIENTE</th>
                          <th scope="col">SETOR</th>
                          <th scope="col">DATA INFORMADA</th>
                          <th scope="col">QUANTIDADE RATEIO</th>
                          <th scope="col">KM RATEIO</th>
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
                        $status = $item -> getRateio();
                        $setor = $item -> getSetor();
                        $paciente = $item -> getPaciente();
                        $rateio = $item -> getRateio();
                        $kmUtilizado = $item -> getKmUtilizado();


                            echo '<tr>
                                      <th scope="row">'.$idSolicitacoes.'</th>
                                      <td>'.$categoria.'</td>
                                      <td>'.$nome.''.$paciente.'</td>
                                      <td>'.$setor.'</td>
                                      <td>'.$data.'</td>
                                      <td>'.$rateio.'</td>
                                      <td>'.$kmUtilizado.'</td>
                                  </tr>';

                     
                
      }
    	echo '</tbody>
            </table>';
    	}
    	else {
                    echo 'Não existe solicitacoes nesse momento!' ;
                           }

