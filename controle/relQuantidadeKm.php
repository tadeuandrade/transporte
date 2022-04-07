<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
require_once('../modelo/SolicitacaoDAO.php');
require_once('../modelo/Solicitacao.php');
$dataInicial = $_GET["dataInicial"]; 
$dataFinal = $_GET["dataFinal"]; 

$dao = new SolicitacaoDAO();
$lista = $dao-> relQtdKm($dataInicial, $dataFinal);
  if($lista){
  echo '<table class="table table-striped">
            <thead>
              <tr>
                <th>C.C.  </th>
                <th>SETOR  </th>
                <th>KM UTILZIADO  </th>
              </tr>
            </thead>              
            <tbody>';
          foreach($lista as $item){
            $cdSetor = $item -> getCdSetor();
            $setor = $item -> getSetor();
            $kmUtilizado = $item -> getKmUtilizado();
        echo '<tr>
                  <td>'.$cdSetor.'</td>
                  <td>'.$setor.'</td>
                  <td>'.$kmUtilizado.'</td>
              </tr>';                   
  }
    echo  '</tbody> 
        </table>';
    	} else {
         echo 'Não existe solicitacoes nesse momento!' ;
    }   

