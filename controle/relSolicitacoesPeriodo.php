<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
require_once('../modelo/SolicitacaoDAO.php');
require_once('../modelo/Solicitacao.php');
require_once('../modelo/MotoristaDAO.php');
require_once('../modelo/Motorista.php');

$status = $_GET["status"]; 
$dataInicial = $_GET["dataInicial"]; 
$dataFinal = $_GET["dataFinal"];

$dao = new SolicitacaoDAO();
$lista = $dao-> relSolicitacoes($status, $dataInicial, $dataFinal);
if($lista){ 
  
  echo '<table class="table">
          <thead>
            <tr>
              <th>COD</th>
              <th>SOLICITANTE</th>
              <th>SETOR SOLICITANTE</th>
              <th>CATEGORIA</th>
              <th>ORIGEM</th>
              <th>ENDEREÇO ORIGEM</th>
              <th>DESTINO</th>
              <th>ENDEREÇO DESTINO</th>
              <th>DATA ABERTURA</th>
              <th>KM INICIAL</th>
              <th>KM FINAL</th>
              <th>KM UTILZIADO</th>
              <th>RATEIO</th>
              <th>STATUS</th>
            </tr>
          </thead>
        </tbody>';
    foreach($lista as $item){

    $idSolicitacoes = $item -> getIdSolicitacoes();
    $nome = $item -> getNome();
    $cdSetor = $item -> getSetor();
    $categoria = $item -> getCategoria();
    $origem = $item-> getOrigem();
    $empreOrigem = $item-> getEmpreOrigem();
    $destino = $item-> getDestino();
    $empreDestino = $item-> getEmpreDestino();
    $empreDestino = $item-> getEmpreDestino();
    $dataSolicitacao = $item-> getDataSolicitacao();
    $rateio = $item -> getRateio();
    $kmInicial = $item -> getKmInicial();
    $kmFinal = $item -> getKmFinal();
    $kmUtilizado = $item -> getKmUtilizado();
    $status = $item -> getStatus();      
    $nomeMotorista = $item -> getNome();      

    echo '<tr>
            <th >'.$idSolicitacoes.'</th>
            <td>'.$nome.'</td>
            <td>'.$cdSetor.'</td>
            <td>'.$categoria.'</td>
            <td>'.$origem.'</td>
            <td>'.$empreOrigem.'</td>
            <td>'.$destino.'</td>
            <td>'.$empreDestino.'</td>
            <td>'.$dataSolicitacao.'</td>
            <td>'.$kmInicial.'</td>
            <td>'.$kmFinal.'</td>
            <td>'.$kmUtilizado.'</td>
            <td>'.$rateio.'</td>
            <td>'.$status.'</td>
          </tr>';     
    

}
  echo '</tbody> 
    </table>';
    	} else {
         echo 'Não existe solicitacoes nesse momento!' ;
    }


