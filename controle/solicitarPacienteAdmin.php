<?php
/* Informa o nível dos erros que serão exibidos */
// error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
// ini_set("display_errors", 1);

  session_start();
  require_once('../modelo/SolicitacaoDAO.php');
  require_once('../modelo/Solicitacao.php');

    $paciente       = $_POST['paciente']; 
    $leito          = $_POST['leito']; 
    
    $data           = $_POST['data'];
    $d=explode("/",$data);
    $data=$d[2]."-".$d[1]."-".$d[0];
    
    $horario        = $_POST['horario']; 
    $motivo         = $_POST['motivo'];
    $destino        = $_POST['destino']; 
    $endereco       = $_POST['enderecoDestino']; 
    $tipoAmbulancia = $_POST['tipoAmbulancia']; 
    $tipoAcomodocao = $_POST['tipoAcomodacao']; 
    $isolamento     = $_POST['isolamento']; 
    $gas            = $_POST['gas']; 
    $obs            = $_POST['obs']; 
    $empreOrigem = $_POST['empreOrigem'];
    $empreDestino = $_POST['empreDestino'];    
    $solicitante   = $_SESSION["matricula"];
    $categoria  = 'PACIENTE';
    $formData = date('d/m/Y' , strtotime($data)); 


          
                 

      $dao = new SolicitacaoDAO();

      if($dao-> solicitarPaciente($paciente, $leito, $data, $horario, $motivo,$destino, $endereco, $tipoAmbulancia, $tipoAcomodocao, $isolamento, $gas, $obs, $solicitante, $categoria, $empreOrigem, $empreDestino))
      {

        $dao = new SolicitacaoDAO();
        $lista = $dao-> getUltimaSolicitacao();

          if($lista)
          {
                foreach($lista as $item)
                {
                    $idSolicitacoes  = $item -> getIdSolicitacoes();
                }
                
                }

        require('PHPMailer/class.phpmailer.php');
                              
      
          
          /* Alterar dados abaixo */
          $smtp   = '172.16.0.7'; /* Coloque aqui o endereço smtp de seu site. Geralmente é igual à este: smtp.meusite.com.br */
          $emailUser  = 'alerta.mail@mariopenna.org.br'; /* Coloque aqui o endereço de e-mail que irá enviar a mensagem */
          $senha  = '@l3rtafmp*'; /* Coloque a senha do e-mail que irá enviar a mensagem */
          $email = 'gabriel.vicente@mariopenna.org.br';
          
          $mail = new PHPMailer();
          $mail->IsSMTP();
          $mail->SMTPAuth = true;
          $mail->Port = 587;
          $mail->Host = "$smtp"; 
          $mail->Username = "$emailUser"; 
          $mail->Password = "$senha"; 
          $mail->SetFrom("$emailUser", "$urlSite");
          $mail->AddAddress("$email", "SOFTWARE CASA DE APOIO");
          // $mail->AddAddress("gabriel.vicente@mariopenna.org.br", "SOFTWARE TRANSPORTE");
          $mail->AddAddress("transporte.imp@mariopenna.org.br", "SOFTWARE TRANSPORTE");
          $mail->Subject = 'Solicitacao de transporte';
          
          $body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
                                        <HTML><HEAD>
                                        <META http-equiv=Content-Type content='text/html; charset=iso-8859-1'>
                                        <META content='MSHTML 6.00.2900.3020' name=GENERATOR>
                                        <style type='text/css'>
                                          <!--
                                          .style1 {color: #686868}
                                          -->
                                          </style>
                                        </HEAD>
                                        <BODY>

                                        Ola, temos uma nova solicitacao de transporte!<br><br>
                                        <strong>Solicitacao: </strong> $idSolicitacoes <br>

                                        <strong>Nome: </strong> $nome <br>
                                        <strong>Origem: </strong> $origem <br>
                                        <strong>Setor Origem: </strong> $setor <br>
                                        <strong>Endereco Origem: </strong> $enderecoOrigem <br><br>

                                        <strong>Destino: </strong> $destino <br>
                                        <strong>Setor Destino: </strong> $setorDestino <br>
                                        <strong>Endereco Origem: </strong> $endereco <br><br>

                                        <strong>Solicitante: </strong> $solicitante <br><br>
                                        <strong>Categoria: </strong> $categoria <br><br>

                                        <strong>Data: </strong> $formData <br>
                                        <strong>Horario: </strong> $horario <br>
                                        <strong>Telefone: </strong> $telefone <br>
                                        <strong>Protocolar: </strong> $protocolar <br>
                                        <strong>Obs: </strong> $obs <br><br>

                                        </BODY>
                                        </HTML>";
          $mail->MsgHTML(utf8_decode($body));
          
          if($mail->Send()) {
            ?>
              <script charset="utf-8">
                location.href="../visao/solicitacaoSucessoAdmin.php";
              </script>
            <?php
          } else {
            ?>
              <script charset="utf-8">
                
                        location.href="../visao/solicitacaoSucessonoEmail.php";
              </script>
            <?php
          }

      ?>
          <script charset="utf-8">
          location.href="../visao/solicitacaoSucessoAdmin.php";
          </script>
      <?php

      } else {
          ?>
            <script charset="utf-8">
                    alert("Erro ao cadastrar ! Repita novamente a teste.")
                    //location.href="../visao/formularioDoacoes.php";
            </script>
          <?php
          
          }
