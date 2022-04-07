<?php
  // session_start();
  require_once('../modelo/SolicitacaoDAO.php');
  require_once('../modelo/Solicitacao.php');


  	$status            = $_POST['status'];
	  $idMotorista       = $_POST['idMotorista'];
    $idVeiculo         = $_POST['idVeiculo'];
    $dataRealizacao    = $_POST['dataRealizacao'];
	  $horarioRealizacao = $_POST['horarioRealizacao'];
    $idSolicitacoes    = $_GET["idSolicitacoes"];
    $idSolicitacoes    = substr($idSolicitacoes,0, $idSolicitacoes-1);
    $kmInicial         = $_POST['kmInicial'];
    $kmFinal           = $_POST['kmFinal'];
    $rateio            = $_POST['rateio'];
    $Solicitacaorateio = $_POST['rateioCodigo'];
    $kmUtilizado       = (($kmFinal - $kmInicial)/$rateio);
    
    $dao = new SolicitacaoDAO();
    if($dao-> atualizarSolicitacaoRateio($idSolicitacoes,$status,$dataRealizacao,$horarioRealizacao,$kmInicial,$kmFinal,$rateio,$kmUtilizado))
    {

?>
        <script charset="utf-8">
          location.href="../visao/solicitacoesUser2.php";
        </script>
      <?php

    } else {
      ?>
          <script charset="utf-8">
                  alert("Erro ao cadastrar ! Repita novamente a operacao.")
                  // location.href="../visao/atenderSolicitacao.php?idSolicitacoes=<?php echo $idSolicitacoes?>";
          </script>
      <?php
        
        }

