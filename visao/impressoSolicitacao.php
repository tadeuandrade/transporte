<?php
    	  session_start();

        require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        require_once('../modelo/MotoristaDAO.php');
        require_once('../modelo/Motorista.php');
        require_once('../modelo/VeiculoDAO.php');
        require_once('../modelo/Veiculo.php');
        
        define('MPDF_PATH', 'mpdf/');
        include(MPDF_PATH.'mpdf.php');
        $mpdf=new mPDF();

        $idSolicitacoes = $_GET["idSolicitacoes"];

        $dao2 = new MotoristaDAO(); 
        $lista2 = $dao2-> getComboMotoristasDoChamado($idSolicitacoes);
        foreach($lista2 as $item){
            $nomeMotorista = $item-> getNome();     
        }

        $dao3 = new VeiculoDAO(); 
        $lista3 = $dao3-> getComboVeiculosChamado($idSolicitacoes);
        foreach($lista3 as $item){
            $tipo = $item-> getTipo();     
        }
        
        $dao = new SolicitacaoDAO();
        $lista = $dao-> getSolicitacao($idSolicitacoes);

         if($lista){    

         $mpdf->WriteHTML($cabecalho);
         $mpdf->WriteHTML($cabecalhoResultado);              

                foreach($lista as $item){
                
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
                   $setor           = $item -> getSetor();
                   $recebido        = $item -> getRecebido();
                   $notaFiscal      = $item -> getNotaFiscal();
                   $procurarPor     = $item -> getProcurarPor();
                   $kmInicial     = $item -> getKmInicial();
                   $kmFinal     = $item -> getKmFinal();
                   $motorista     = $item -> getMotorista();
                   $veiculo     = $item -> getVeiculo();
                   $observacao = $item-> getObservacao();
                   $empreDestino = $item-> getEmpreDestino();
                   $empreOrigem = $item-> getEmpreOrigem();
                   $telefoneDestino = $item-> getTelefoneDestino();
                   $enderecoOrigem = $item-> getEnderecoOrigem();
              
                 
                 $resultado = '<table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                           <td width="20%"><img class="img-responsive" src="images/logo_hmp.png" alt=""></td>
                           <td width="40%" align="center"><strong>SOLICITAÇÃO DE TRANSPORTE</strong><BR>'.$categoria.'</td>
                           <td width="20%" align="center"><strong>Nº SOLICITAÇÃO</strong><BR>'.$idSolicitacoes.'</td>
                       </tr>
                      </table><br>

                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                          <td colspan="4" align="center"><strong>NOME DO SOLICITANTE:<BR></strong> '.$nome.'</td>
                        </tr>
                        <tr>
                          <td colspan="4" ><div  align="center"><strong>SETOR:</strong> '.$setor.'</div></td>
                        </tr>
                      </table><br>

                     <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                     <tr>
                        <td><strong>ORIGEM:</strong> '.$origem.'</td>
                        <td><strong>TELEFONE:</strong> '.$telefone.'</td>
                      </tr>
                      <tr>
                        <td colspan="4"><strong>ENDEREÇO ORIGEM:</strong> '.$enderecoOrigem.'</td>
                      </tr>
                      <tr>
                        <td colspan="4"><strong>EMPRESA / RESIDÊNCIA ORIGEM:</strong> '.$empreOrigem.'</td>
                      </tr>
                      <tr>
                        <td><strong>DESTINO:</strong> '.$destino.'</td>
                        <td><strong>TELEFONE:</strong> '.$telefoneDestino.'</td>
                      </tr>                        
                      <tr>
                        <tr>
                            <td colspan="4"><strong>ENDEREÇO DESTINO:</strong> '.$endereco.'</td>
                        </tr>
                        </tr>
                        <tr>
                          <td colspan="4"><strong>EMPRESA / RESIDÊNCIA DESTINO:</strong> '.$empreDestino.'</td>
                        </tr>
                        <tr>
                          <td colspan="4"><strong>PROCURAR POR:</strong> '.$recebido.'</td>
                        <tr>
                          <td colspan="4"><strong>NOTA FISCAL:</strong>'.$notaFiscal.'</td>
                        </tr>
                      </tr>
                      </table>
                      <br>                      
                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                          <td><strong>DATA:'.$DATA.'</strong></td>
                          <td><strong>HORA:'.$horario.'</strong></td>
                        </tr>
                      </table>
                      <br>
                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                          <td><strong>Km inicial:</strong></td>
                          <td><strong>KM final:</strong></td>
                          <td><strong>Hora inicial:</strong></td>
                          <td><strong>Hora final:</strong></td>
                        </tr>
                      </table>
                      <br>                      
                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                          <td colspan="2" align="center"><strong>DESCRIÇÃO SOLICITANTE:<BR></strong></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="left">'.$descricao.'</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><strong>OBSERVAÇÃO SOLICITANTE:<BR></strong></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="left">'.$obs.'</td>
                        </tr>     
                      </table>
                      <br>                      
                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">                      
                        <tr>
                          <td height="75" valign="top" align="center"><strong>MOTORISTA</strong><p><br>'.$nomeMotorista.'</p></td>
                          <td height="75" valign="top" align="center"><strong>VEICULO</strong><p><br>'.$tipo.'</p></td>
                        </tr>
                      </table><br>
                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                        <tr>
                          <td colspan="4" align="center"><div align="center"><strong>DESTINATARIO</strong></div></td>
                        </tr>
                        <tr>
                          <td height="75" valign="top" align="center"><strong>RECEBIDO POR</strong><p></p></td>
                          <td height="75" valign="top" align="center"><strong>DATA:</strong></td>
                          <td height="75" valign="top" align="center"><strong>HORA:</strong></td>
                          <td height="75" valign="top" align="center"><strong>ENTREGUE POR:</strong></td>
                        </tr>
                      </table><br>
                          
                      <table width="100%" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">                          
                        <tr>
                          <td height="85" valign="top" align="center"><strong>OBSERVAÇÃO</strong><p>'.$observacao.'</p></td>
                        </tr>
                      </table>';
                      
                 
                      $mpdf->WriteHTML($resultado);
                      
                      
                      
                    }
                    
                  }
                  $rodape = '';
                  $mpdf->WriteHTML($rodape);
                  $mpdf->Output();
                  
