<?php
require_once('../modelo/SolicitacaoDAO.php');
require_once('../modelo/Solicitacao.php');
    
$idSolicitacoes = $_GET['idSolicitacoes'];
$dao = new SolicitacaoDAO();
$lista = $dao-> getSolicitacao($idSolicitacoes);
if($lista){
foreach($lista as $item){
    $kmInicial = $item-> getKmInicial();
    $kmFinal = $item-> getKmFinal();
    $rateio = $item-> getRateio();
  }	
}
$lista1 = $dao->getSolicitacaoRateio($kmInicial, $kmFinal, $rateio);
if($lista1){
  $testeSolicitacao = $_GET['idSolicitacoes'];
  foreach($lista1 as $item1){
    $idSolicitacoesRateio = $item1-> getIdSolicitacoes();
    if($idSolicitacoesRateio != $testeSolicitacao ){
      echo $idSolicitacoesRateio.',';
    }
  }
  echo $idSolicitacoes;
}
