 <?php
 	session_start();
    // include("../controle/getSolicitacao.php");
    //include("../controle/verificaAcesso.php");	
	$nome_completo = $_SESSION["nomeUsuario"];
    $filtro = $_GET["filtro"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IMP - SOFTWARES</title>
	<!-- core CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript" src="js/funcoes.js"></script>

    <script language="JavaScript">
        /*-----------------------------------------------------------------------
        Máscara para o campo data dd/mm/aaaa hh:mm:ss
        Exemplo: <input maxlength="16" name="datahora" onKeyPress="DataHora(event, this)">
        -----------------------------------------------------------------------*/
        function DataHora(evento, objeto){
            var keypress=(window.event)?event.keyCode:evento.which;
            campo = eval (objeto);
            if (campo.value == '00/00/0000 00:00:00')
            {
                campo.value=""
            }
         
            caracteres = '0123456789';
            separacao1 = '/';
            separacao2 = ' ';
            separacao3 = ':';
            conjunto1 = 2;
            conjunto2 = 5;
            conjunto3 = 10;
            if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (10))
            {
                if (campo.value.length == conjunto1 )
                campo.value = campo.value + separacao1;
                else if (campo.value.length == conjunto2)
                campo.value = campo.value + separacao1;
                else if (campo.value.length == conjunto3)
                campo.value = campo.value + separacao2;
                else if (campo.value.length == conjunto4)
                campo.value = campo.value + separacao3;
                else if (campo.value.length == conjunto5)
                campo.value = campo.value + separacao3;
            }
            else
                event.returnValue = false;
        }

        </script>
    
     
</head><!--/head-->
<body id="home" class="homepage">
	<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="painelTransporte.php"><img src="images/logo_mini.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="adminTransporte.php">Inicio</a></li>
                        <!-- <li class="scroll"><a href="solicitacoesUser.php">Minhas Solicitações</a></li>
                        <li class="scroll"><a href="solicitacoesUser2.php">Administrar Solicitações</a></li> -->
                        <li class="scroll"><a href="../controle/logoutUser.php">Sair</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SOLICITAÇÃO DE TRANSPORTE DE MATERIAIS</h2>
                <p class="text-center wow fadeInDown">Bem vindo ao sistema de solicitações de transporte, preencha o formulário abaixo:</p>
            </div>

            <div>
                <strong>SOLICITACOES:</strong> <?php include("../controle/getSolicitacao.php");?>
                <!-- <strong>TELEFONE: <?php echo $telefone ?> </strong><BR> 
                <strong>ORIGEM:</strong> <?php echo $origem ?> - <strong>SETOR:</strong> <?php echo $setor ?>/ <strong>DESTINO:</strong> <?php echo $destino ?><BR>
                <strong>ENDEREÇO:</strong> <?php echo $endereco ?> - <strong>PONTO DE REFERENCIA:</strong> <?php echo $pontoReferencia ?><BR>
                <strong>TELEFONE DESTINO:</strong> <?php echo $telefoneDestino ?><BR><BR>
                <strong>DATA / HORA: <?php echo $DATA ?> / <?php echo $horario ?></strong><BR>
                <strong>DESCRIÇÃO:</strong> <?php echo $descricao ?><BR>
                <strong>PODE SER MOTO:</strong> <?php echo $moto ?> -->
            </div>

            <div class="formulario">  
                <form id="form" action="../controle/atualizarSolicitacaoRateio.php?idSolicitacoes=<?php echo $_GET["idSolicitacoes"]?>" method="post"> 
                    <?php
       
                    ?>
                    <!-- <strong>SOLICITACOES:</strong> 
                    <label>SOLICITACOES</label>
                    <?php include("../controle/getSolicitacao.php");?> -->

                    <label>STATUS</label>
                    <select name="status">
                        <option value="<?php echo $STATUS ?>"><?php echo $STATUS ?></option>
                        <option value="EM ANDAMENTO">EM ANDAMENTO</option>
                        <option value="CONCLUIDO">CONCLUIDO</option>
                        <option value="CANCELADO">CANCELADO</option>
                    </select>             
                    
                    <!-- <label>MOTORISTA</label>
                    <select name="idMotorista">
                        <?php
                            // include("../controle/ctrlComboMotorista.php");
                        ?>
                    </select>  -->

                    <!-- <label>VEICULO</label>
                    <select name="idVeiculo">
                        <?php
                            //include("../controle/ctrlComboVeiculo.php");
                        ?> 
                    </select> -->

<!--                     
                    <label>* DATA</label>
                    <input name="dataRealizacao" type="text" class="p" id="data" value="<?php echo $DATA ?>"> -->
<!-- 
                    <label>* HORÁRIO</label>
                    <input name="horarioRealizacao" type="text" class="p" id="telefone" value="<?php echo $horario ?>" required> -->

                    <label> KM INICIAL</label>
                    <input name="kmInicial" type="text" class="p" value="<?php echo $kmInicial ?>" id="telefone" >

                    <label> KM FINAL</label>
                    <input name="kmFinal" type="text" class="p" value="<?php echo $kmFinal ?>" id="telefone" >


                    <label>RATEIO</label>
                    <select name="rateio">
                        <option value="<?php echo $rateio ?>"><?php echo $rateio ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                    </select>  
<!-- 
                    <label> RECEBIDO POR </label>
                    <input type="text" name="recebido" class="g">

                    <label> NOTA FISCAL(NF): </label>
                    <input type="text" name="notaFiscal" class="telefone">


                    <label> OBS.: </label>
                    <textarea name="observacao" class="g" cols="40" rows="10" Placeholder="DIGITE SUA OBSERVAÇÃO"><?php //echo $observacao ?></textarea> -->
                    <label></label>
                    <!-- <button><a href="#" onClick="EnviarFiltroRelatorio()">CONCLUIR</a></button> -->
                    <input type="submit" value="Concluir" onClick="EnviarFiltroRelatorio()">
                </form>
    	    </div><!--/formulario-->

            
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
    
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 Instituto Mario Penna. Desenvolvido por <a href="#" title="TIC SISTEMAS">TIC SISTEMAS</a>
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDzRxiqAuCElN_YywU5fop9HXtghivrwHY&sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>