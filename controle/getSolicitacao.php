<?php
    	  require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        
        $idSolicitacoes = $_GET["idSolicitacoes"];
        

        $dao = new SolicitacaoDAO();
        $lista = $dao-> getSolicitacao($idSolicitacoes);

         if($lista)
         {

                foreach($lista as $item)
                {

                   $idSolicitacoes  = $item -> getIdSolicitacoes();
                   $empresa         = $item -> getEmpresa();
                   $nome            = $item -> getNome();
                   $endereco        = $item -> getEndereco();
                   $pontoReferencia = $item -> getPontoReferencia();
                   $DATA            = $item -> getData();
                   $horario         = $item -> getHorario();
                   $telefone        = $item -> getTelefone();
                   $quantidade      = $item -> getQuantidade();
                   $protocolar      = $item -> getProtocolar();
                   $acesso          = $item -> getAcesso();
                   $moveis          = $item -> getMoveis();
                   $descricao       = $item -> getDescricao();
                   $ajudante        = $item -> getAjudante();
                   $moto            = $item -> getMoto();
                   $anexo           = $item -> getAnexo();
                   $paciente        = $item -> getPaciente();
                   $leito           = $item -> getLeito();
                   $motivo          = $item -> getMotivo();
                   $tipoAmbulancia  = $item -> getTipoAmbulancia();
                   $tipoAcomodacao  = $item -> getTipoAcomodacao();
                   $isolamento      = $item -> getIsolamento();
                   $gas             = $item -> getGas();
                   $obs             = $item -> getObs();
                   $categoria       = $item -> getCategoria();
                   $solicitante     = $item -> getSolicitante();
                   $dataSolicitacao = $item -> getDataSolicitacao();
                   $STATUS          = $item -> getStatus();
                   $instrucoes      = $item -> getInstrucoes();
                   $destino         = $item -> getDestino();
                   $origem          = $item -> getOrigem();
                   $empreOrigem     = $item -> getEmpreOrigem();
                   $empreDestino    = $item -> getEmpreDestino();

                   $kmInicial = $item -> getKmInicial();
                   $kmFinal          = $item -> getKmFinal();
                   $kmUtilizado      = $item -> getKmUtilizado();
                   $rateio         = $item -> getRateio();
                   $observacao          = $item -> getObservacao();

      }
    	
    	}
    	else {
                    echo '' ;
                           }

