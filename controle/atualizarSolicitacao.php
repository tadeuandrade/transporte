<?php
  session_start();
  require_once('../modelo/SolicitacaoDAO.php');
  require_once('../modelo/Solicitacao.php');


  	$status            = $_POST['status'];
	  $idMotorista       = $_POST['idMotorista'];
    $idVeiculo         = $_POST['idVeiculo'];
    $dataRealizacao    = $_POST['dataRealizacao'];
	  $horarioRealizacao = $_POST['horarioRealizacao'];
    $idSolicitacoes    = $_GET["idSolicitacoes"];
    $idSolicitacaoRateio = $_POST["idSolicitacaoRateio"];

    
    if(empty($idSolicitacaoRateio)){
      $idSolicitacaoRateio =  $idSolicitacoes; 
    };


    $updateSolicitacaoMaisRateio = ($idSolicitacoes.",".$idSolicitacaoRateio);

    $kmInicial         = $_POST['kmInicial'];
    $kmFinal           = $_POST['kmFinal'];
    $rateio            = $_POST['rateio'];

    if($rateio == 0){
      $rateio = 1;
    }
    
    $kmUtilizado       = (($kmFinal - $kmInicial)/$rateio);
    $recebido          = $_POST['recebido'];
    $notaFiscal        = $_POST['notaFiscal'];
    $observacao        = $_POST['observacao'];

    $testeNota = $_POST['notaFiscal'];
          
    

    $dao = new SolicitacaoDAO();
    if($dao-> atualizarSolicitacao($updateSolicitacaoMaisRateio,$status,$idMotorista,$idVeiculo,$dataRealizacao,$horarioRealizacao,$kmInicial,$kmFinal,$rateio,$kmUtilizado,$recebido,$notaFiscal,$observacao))
    {        
      ?>
        <script charset="utf-8">
              location.href="../controle/retornoUsuario.php?idSolicitacoes=<?php echo $_GET["idSolicitacoes"]?>";
              // location.href="../visao/solicitacoes.php";
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

