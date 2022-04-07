<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('../modelo/SolicitacaoDAO.php');
require_once('../modelo/Solicitacao.php');
$files = 'relSolicitacoes.xls';
$dataInicial = $_GET["dataInicial"]; 
$dataFinal = $_GET["dataFinal"]; 

$dao = new SolicitacaoDAO();
$lista = $dao-> relQtdKm($dataInicial, $dataFinal);
  if($lista){
    
        $totKm = $dao->getTotalKm($dataInicial, $dataFinal);
        if($totKm){
        foreach($totKm as $linha){
            $totKmT = $linha->getKmUtilizado();
        }
        }
        $arqD = "<meta charset='UTF-8'>";
        $arqD .='<table class="table table-striped">
                <thead>
                <td colspan="3" style="text-aling: center;">RELATORIO KM RODADOS MÊS</td>
                <tr>
                    <th>C.C.  </th>
                    <th>SETOR  </th>
                    <th>KM UTILZIADO</th>
                </tr>
                </thead>           
                <tbody>';
        foreach($lista as $item){
                $cdSetor = $item->getCdSetor();
                $setor = $item->getSetor();
                $kmUtilizado = $item->getKmUtilizado();
        $arqD .='<tr>
                    <td>'.$cdSetor.'</td>
                    <td>'.$setor.'</td>
                    <td>'.$kmUtilizado.'</td>
                </tr>';                   
    }
    $arqD .='</tbody> 
            </table>';
            $arqD .='<table class="table table-striped">
                <thead>
                <tr>
                    <th style="padding-left: 252px">TOTAL: </th>';
        $arqD .= "      <th>${totKmT}</th>
                </tr>
                </thead>
            </table>";
    header("Content-Type: application/xls");
    header("Content-Disposition:attachment; filename = ${files}");
    echo $arqD;
    
  } 
  
?>
  