<?php
    require_once('../modelo/SolicitacaoDAO.php');
    require_once('../modelo/Solicitacao.php');
        
    $idSolicitacoes = $_GET["idSolicitacoes"];

    $dao = new SolicitacaoDAO();
    $lista = $dao-> getSetor($idSolicitacoes);

	if($lista){
		foreach($lista as $item){
		$setor    = $item -> getSetor();
		$telefoneDestino    = $item -> getTelefoneDestino();
		$recebido   = $item -> getRecebido();
		$notaFiscal    = $item -> getNotaFiscal();
		// echo $setor;
		// echo $telefoneDestino;
		}	
    }
