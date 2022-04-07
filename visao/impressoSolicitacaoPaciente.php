	<?php
    	  session_start();

        require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        
        define('MPDF_PATH', 'mpdf/');
        include(MPDF_PATH.'mpdf.php');
        $mpdf=new mPDF();

        $idSolicitacoes = $_GET["idSolicitacoes"];
       
        $dao = new SolicitacaoDAO();
        $lista = $dao-> getSolicitacao($idSolicitacoes);

         if($lista)
         {
       

         


         $mpdf->WriteHTML($cabecalho);
         $mpdf->WriteHTML($cabecalhoResultado);


              

                foreach($lista as $item)
                {
                
                $idSolicitacoes = $item -> getIdSolicitacoes($idSolicitacoes);



                  $idSolicitacoes = $item -> getIdSolicitacoes($idSolicitacoes);
                  $empresa = $item -> getCategoria($empresa);
                  $nome = $item -> getNome($nome);
                  $endereco = $item -> getEndereco($endereco);
                  $pontoReferencia = $item -> getPontoReferencia($pontoReferencia);
                  $DATA = $item -> getData($DATA);
                  $horario = $item -> getHorario($horario);
                  $telefone = $item -> getTelefone($telefone);
                  $quantidade = $item -> getQuantidade($quantidade);
                  $protocolar = $item -> getProtocolar($protocolar);
                  $acesso = $item -> getAcesso($acesso);
                  $moveis = $item -> getMoveis($moveis);
                  $descricao = $item -> getDescricao($descricao);
                  $ajudante = $item -> getAjudante($ajudante);
                  $moto = $item -> getMoto($moto);
                  $anexo = $item -> getAnexo($anexo);
                  $paciente = $item -> getPaciente($paciente);
                  $leito = $item -> getLeito($leito);
                  $motivo = $item -> getMotivo($motivo);
                  $tipoAmbulancia = $item -> getTipoAmbulancia($tipoAmbulancia);
                  $tipoAcomodacao = $item -> getTipoAcomodacao($tipoAcomodacao);
                  $isolamento = $item -> getIsolamento($isolamento);
                  $gas = $item -> getGas($gas);
                  $obs = $item -> getObs($obs);
                  $categoria = $item -> getCategoria($categoria);
                  $solicitante = $item -> getSolicitante($solicitante);
                  $dataSolicitacao = $item -> getDataSolicitacao($dataSolicitacao);
                  $STATUS = $item -> getStatus($STATUS);
                  $instrucoes = $item -> getInstrucoes($instrucoes);
                  $destino = $item -> getDestino($destino);
                  $origem = $item -> getOrigem($origem);





              
                 
                 $resultado = '<table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                           <td width="20%"><img class="img-responsive" src="images/logo_hmp.png" alt=""></td>
                           <td width="40%">SOLICITAÇÃO DE TRANSPORTE DE PACIENTE</td>
                           <td width="20%">'.$idSolicitacoes.'</td>
                       </tr>
                      </table><br>

                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>

                          <td><strong>INFORMAÇÕES PACIENTE</strong><BR>
                              Unidade:<BR>
                              Paciente:<BR>
                              Nome mãe:<BR>
                              Convenio:                              Laudo:            Atendimento:

                          </td>
                        </tr>
                      </table><br>

                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>

                          <td><strong>INFORMAÇÕES SOLICITANTE</strong><BR>
                              Solicitante:<BR>
                              Matricula:<BR>
                              Setor: / Telefone:<BR>
                          </td>
                        </tr>
                      </table><br>

                     <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>

                          <td><strong>INFORMAÇÕES DE REMOÇÃO</strong><BR>
                              Data/Hora:<BR>
                              Origem: / Destino:<BR>
                              Endereço:<BR>
                              Tipo de Ambulancia: Paciente fará uso de:<BR>
                              Isolamento: Isolamento por:<br><BR>
                              <strong>EQUIPE RESPONSAVEL PELO PACIENTE</strong><BR><BR><BR>
                              _______________________________________________                  ______________________________________________<BR>
                                     MEDICO (A) - Assinatura / Carimbo                               ENFERMEIRO (A) - Assinatura / Carimbo

                          </td>
                        </tr>
                      </table><br>

                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>

                          <td><strong>CAMPO DESTINADO A EQUIPE DE TRANSPORTE:</strong><BR>
                              RECEBIDO POR:__________________________________________________________ DATA:<BR>
                          </td>
                        </tr>
                      </table><br>


                      ';
                 
                 
                 $mpdf->WriteHTML($resultado);



                }

    	}
        $rodape = '';
        $mpdf->WriteHTML($rodape);
        $mpdf->Output();

