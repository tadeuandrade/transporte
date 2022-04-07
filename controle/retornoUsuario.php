<?php
    session_start();
    require_once('../modelo/SolicitacaoDAO.php');
    require_once('../modelo/Solicitacao.php');
    require_once('../modelo/MotoristaDAO.php');
    require_once('../modelo/Motorista.php');
    require_once('../modelo/VeiculoDAO.php');
    require_once('../modelo/Veiculo.php');
    $idSolicitacoes = $_GET['idSolicitacoes'];

    $dao = new SolicitacaoDAO(); 
    if($dao-> getSolicitacaoUsuario($idSolicitacoes)){
        $dao1 = new SolicitacaoDAO(); 
        $lista = $dao1-> getRetornoEmail($idSolicitacoes);
        foreach($lista as $item){
            $nome = $item-> getNome();
            $origem = $item-> getOrigem();
            $setor = $item-> getSetor();
            $enderecoOrigem = $item-> getEnderecoOrigem();
            $destino = $item-> getDestino();
            $setorDestino = $item-> getSetorDestino();
            $endereco = $item-> getEndereco();
            $solicitante= $item-> getSolicitante();
            $categoria = $item-> getCategoria();
            $formData = date('d/m/Y' , strtotime($item-> getData()));
            $horario = $item-> getHorario();
            $telefone = $item-> getTelefone();
            $descricao = $item-> getDescricao();
            $observacao = $item-> getObservacao(); 
            $obs = $item-> getObs(); 
            $status = $item -> getStatus();          
        }

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

        require('PHPMailer/class.phpmailer.php');

        $smtp   = '172.16.0.7'; /* Coloque aqui o endereço smtp de seu site. Geralmente é igual à este: smtp.meusite.com.br */
        $emailUser  = 'alerta.mail@mariopenna.org.br'; /* Coloque aqui o endereço de e-mail que irá enviar a mensagem */
        $senha  = '@l3rtafmp*'; /* Coloque a senha do e-mail que irá enviar a mensagem */
        // $email = 'igor.azevedo@mariopenna.org.br';        
        $email = $solicitante.'@mariopenna.org.br';        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Host = "$smtp"; 
        $mail->Username = "$emailUser"; 
        $mail->Password = "$senha"; 
        $mail->SetFrom("$emailUser", "$urlSite");
        $mail->AddAddress("$email", "SOFTWARE CASA DE APOIO");
        $mail->AddAddress($solicitante."@mariopenna.org.br", "SOFTWARE TRANSPORTE");
        // $mail->AddAddress("igor.azevedo@mariopenna.org.br", "SOFTWARE TRANSPORTE");
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
                                        Ola, temos uma alteração em sua solicitacao de transporte!<br><br>
                                        <strong>Solicitacao: </strong> $idSolicitacoes<br>
                                        <strong>Status: </strong> $status<br>
                                        <strong>Motorista: </strong> $nomeMotorista<br>
                                        <strong>Veículo: </strong> $tipo<br>
                                        <strong>Categoria: </strong> $categoria <br><br>

                                        <strong>Nome: </strong> $nome <br>
                                        <strong>Origem: </strong> $origem <br>
                                        <strong>Setor Origem: </strong> $setor <br>
                                        <strong>Endereco Origem: </strong> $enderecoOrigem <br><br>

                                        <strong>Destino: </strong> $destino <br>
                                        <strong>Setor Destino: </strong> $setorDestino <br>
                                        <strong>Endereco Destino: </strong> $endereco <br><br>
                                        <strong>Solicitante: </strong> $solicitante <br><br>
                                        
                                        
                                        <strong>Data: </strong> $formData <br>
                                        <strong>Horario: </strong> $horario <br>
                                        <strong>Telefone: </strong> $telefone <br>
                                        <strong>Descrição: </strong> $descricao <br><br>
                                        <strong>Obs: </strong> $observacao<br><br>
                                      </BODY>
                                      </HTML>";
                                      $mail->MsgHTML(utf8_decode($body));
        
        if($mail->Send()) {
          ?>
            <script charset="utf-8">
               location.href="../visao/solicitacoes.php";
            </script>
          <?php
        }

           
    }