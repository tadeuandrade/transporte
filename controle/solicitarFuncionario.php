<?php
/* Informa o nível dos erros que serão exibidos */
// error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
// ini_set("display_errors", 1);

  session_start();
  require_once('../modelo/SolicitacaoDAO.php');
  require_once('../modelo/Solicitacao.php');

     
    $nome          = $_POST['nome']; 
    $origem        = $_POST['origem'];
    $setor         = $_POST['setor'];
    $destino       = $_POST['destino'];
    $endereco      = $_POST['enderecoDestino']; 
    $enderecoOrigem    = $_POST['enderecoOrigem'];
    $data          = $_POST['data'];
    $d=explode("/",$data);
    $data=$d[2]."-".$d[1]."-".$d[0];
  
    $horario       = $_POST['horario']; 
    $telefone      = $_POST['telefone'];
    $natureza      = $_POST['natureza'];
    $obs           = $_POST['obs'];
    $setorDestino      = $_POST['setorDestino'];
    $passageiros           = $_POST['passageiros'];
    $solicitante   = $_SESSION["usuario"];
    $categoria     = 'FUNCIONARIO';
    $empreOrigem = $_POST['empreOrigem'];
    $empreDestino = $_POST['empreDestino'];
    $formData = date('d/m/Y' , strtotime($data));  

      
                 

                        $dao = new SolicitacaoDAO();

                        if($dao-> solicitarFuncionario($nome, $origem, $setor, $destino, $endereco, $data, $horario, $telefone, $natureza, $obs, $solicitante, $categoria, $enderecoOrigem, $passageiros, $setorDestino, $empreOrigem, $empreDestino))
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
                  // $email = 'transporte.imp@mariopenna.org.br';
                  
                  $mail = new PHPMailer();
                  $mail->IsSMTP();
                  $mail->SMTPAuth = true;
                  $mail->Port = 587;
                  $mail->Host = "$smtp"; 
                  $mail->Username = "$emailUser"; 
                  $mail->Password = "$senha"; 
                  $mail->SetFrom("$emailUser", "$urlSite");
                  // $mail->AddAddress("$email", "SOFTWARE CASA DE APOIO");
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
                                                <strong>Endereço Origem: </strong> $enderecoOrigem <br><br>

                                                <strong>Destino: </strong> $destino <br>
                                                <strong>Setor Destino: </strong> $setorDestino <br>
                                                <strong>Endereço Origem: </strong> $endereco <br><br>

                                                <strong>Solicitante: </strong> $solicitante <br><br>
                                                <strong>Categoria: </strong> $categoria <br><br>

                                                <strong>Data: </strong> $formData <br>
                                                <strong>Horario: </strong> $horario <br>
                                                <strong>Telefone: </strong> $telefone <br>
                                                <strong>Passageiros: </strong> $passageiros <br>
                                                <strong>Observacao: </strong> $obs <br><br>

                                                </BODY>
                                                </HTML>";
                                                $mail->MsgHTML(utf8_decode($body));
                  
                  if($mail->Send()) {
                    ?>
                      <script charset="utf-8">
                         alert("Solicitação de transporte enviado com sucesso! Sua solicitação é: <?php echo  $idSolicitacoes?>");
                        location.href="../visao/painelTransporte.php";
                      </script>
                    <?php
                  } else {
                    ?>
                      <script charset="utf-8">
                        
                        alert("Solicitação de transporte enviado com sucesso! Sua solicitação é: <?php echo  $idSolicitacoes?>");
                        location.href="../visao/painelTransporte.php";
                      </script>
                    <?php
                  }










							?>
                           <script charset="utf-8">
                            alert("Solicitação de transporte enviado com sucesso! Sua solicitação é: <?php echo  $idSolicitacoes?>");
                        location.href="../visao/painelTransporte.php";
                           </script>
                         <?php

                        } else {
                            ?>
                              <script charset="utf-8">
                                      alert("Erro ao cadastrar ! Repita novamente a operacao.")
                                      //location.href="../visao/formularioFuncionario.php";
                              </script>
                            <?php
                           
                           }

