<?php
/* Informa o nível dos erros que serão exibidos */
// error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
// ini_set("display_errors", 1);

  session_start();
  require_once('../modelo/SolicitacaoDAO.php');
  require_once('../modelo/Solicitacao.php');

    $empresa           = $_POST['empresa']; 
    $nome              = $_POST['nome']; 
    $telefone          = $_POST['telefone']; 
    $origem            = $_POST['origem'];
    $setor             = $_POST['setor'];
    $destino           = $_POST['destino'];
    $endereco          = $_POST['enderecoDestino']; 
    $enderecoOrigem    = $_POST['enderecoOrigem']; 
    $pontoReferencia   = $_POST['pontoReferencia']; 
    $telefoneDestino   = $_POST['telefoneDestino']; 
    $setorDestino   = $_POST['setorDestino'];
    $empreOrigem = $_POST['empreOrigem'];
    $empreDestino = $_POST['empreDestino'];
    $procurarPor= $_POST['procurarPor'];
    $data              = $_POST['data']; 
    $d=explode("/",$data);
    $data=$d[2]."-".$d[1]."-".$d[0];
    
    $horario       = $_POST['horario']; 
    $descricao     = $_POST['descricao']; 
    $moto          = $_POST['moto'];
    //$anexo         = rand(1,9999) . $_FILES['anexo']['name'];
    $anexo_editado = $_FILES['anexo']['name'];
    $anexo = utf8_decode($anexo_editado);
    $anexoEmail    = $_FILES['anexo']['name'];
    
    $solicitante   = $_SESSION["usuario"];
    $categoria     = 'MATERIAIS';
    $formData = date('d/m/Y' , strtotime($data));
    
    
    if(isset($_FILES['anexo'])){
      move_uploaded_file($_FILES['anexo']['tmp_name']  , '../visao/pasta_salvar_arq/' . $anexo); 

}  
          
                 

                        $dao = new SolicitacaoDAO();

                        if($dao-> solicitarMateriais($empresa, $nome, $telefone, $origem, $destino, $endereco, $pontoReferencia, $telefoneDestino, $data, $horario,$descricao, $moto, 
                                                     $anexo, $solicitante, $categoria, $enderecoOrigem, $setorDestino, $empreOrigem, $empreDestino, $procurarPor, $setor))
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
                  // $mail->AddAddress("igor.azevedo@mariopenna.org.br", "SOFTWARE TRANSPORTE");
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
                                                <strong>Empresa / Residencia: </strong> $empreOrigem <br><br>

                                                <strong>Destino: </strong> $destino <br>
                                                <strong>Setor Destino: </strong> $setorDestino <br>
                                                <strong>Endereco Origem: </strong> $endereco <br><br>
                                                <strong>Empresa / Residencia: </strong> $empreDestino <br><br>

                                                <strong>Solicitante: </strong> $solicitante <br><br>
                                                <strong>Categoria: </strong> $categoria <br><br>

                                                <strong>Data: </strong> $formData <br>
                                                <strong>Horario: </strong> $horario <br>
                                                <strong>Telefone: </strong> $telefone <br>
                                                <strong>Pode ser moto: </strong> $moto <br>
                                                <strong>Descricao: </strong> $descricao <br><br>
                                                <strong>Anexo: </strong> $anexoEmail <br><br>
                                                <?php
                                                    echo $_FILES;
                                                ?>
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
                                      location.href="../visao/formularioDoacoes.php";
                              </script>
                            <?php
                           
                           }

            
