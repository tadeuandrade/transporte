 <?php
 	session_start();
    //include("../controle/verificaAcesso.php");
	
	
	$nome_completo = $_SESSION["nomeUsuario"];


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
                    <a class="navbar-brand" href="paninelTransporte.php"><img src="images/logo_mini.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="paninelTransporte.php">Inicio</a></li>
                        <li class="scroll"><a href="solicitacoesUser.php?user=<?php echo $_SESSION["usuario"] ?>">Minhas Solicitações</a></li>
                        <li class="scroll"><a href="#">Configuração</a></li>
                        <li class="scroll"><a href="../controle/logoutUser.php">Sair</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SOLICITAÇÃO DE TRANSPORTE</h2>
                <p class="text-center wow fadeInDown">Bem vindo ao sistema de solicitações de transporte, preencha o formulário abaixo":</p>
            </div>

             <div class="formulario">  

            <form id="form" action="../controle/solicitarPaciente.php" method="post">                  
                
                <label>* PACIENTE</label>
                <input name="paciente" type="text" value="GABRIEL" class="g" disabled>

                <label>* LEITO</label>
                <input name="leito" type="text" class="g" value="ENF 10M"  required>

                <label>* DATA</label>
                <input name="data" type="text" class="p" id="telefone" value="21/05/2019" required onKeyPress="DataHora(event, this)">

                <label>* HORÁRIO</label>
                <input name="horario" type="text" class="p" id="telefone" value="00:00" required>
                
                <label>* MOTIVO</label>
                <select name="motivo">
                	<option value="CONSULTA">CONSULTA</option>
                    <option value="EXAME">EXAME</option>
                	<option value="TRANSFERENCIA">TRANSFERENCIA</option>
                    
                </select>

                <label>* DESTINO</label>
                <select name="destino">
                    <option value="UNIDADE LUXEMBURGO">UNIDADE LUXEMBURGO</option>
                    <option value="UNIDADE SANTA EFIGENIA">UNIDADE SANTA EFIGENIA</option>
                    <option value="OUTROS">OUTROS</option>
                    
                </select>

                <label>* Endereço<small>(outros locais)</small></label>
                <input name="endereco" type="text" class="g" required>

                <label>* TIPO AMBULÂNCIA</label>
                <select name="tipoAmbulancia">
                    <option value="COMUM">COMUM</option>
                    <option value="UTI">UTI</option>
                    
                </select>

                <label>* TIPO DE ACOMODAÇÃO</label>
                <select name="tipoAcomodacao">
                    <option value="CADEIRA">CADEIRA</option>
                    <option value="MACA">MACA</option>
                    
                </select>

                <label>* ISOLAMENTO</label>
                <select name="isolamento">
                    <option value="SIM">SIM</option>
                    <option value="NAO">NAO</option>
                    
                </select>

                <label>* USO DE O²</label>
                <select name="gas">
                    <option value="SIM">SIM</option>
                    <option value="NAO">NAO</option>
                    
                </select>

                




                <label>* Observações</label>
                <textarea name="obs" cols="10" rows="5" class="g" placeholder="Caso necessário, acrescente demais informações neste local" disabled></textarea>

                <label>* STATUS</label>
                <select name="tipoAmbulancia">
                    <option value="COMUM">ABERTO</option>
                    <option value="UTI">CONFIRMADO</option>
                    <option value="COMUM">CANCELADO</option>
                    <option value="UTI">REALIZADO</option>
                    
                </select>

                <label>* VEICULO</label>
                <select name="tipoAmbulancia">
                    <option value="COMUM">FIAT UNO ORB-2538</option>
                    <option value="UTI">FIAT UNO OPD-4599</option>
                    <option value="COMUM">AMB. DUCATO OPT-4995</option>
                    <option value="UTI">AMB. DUCATO OQL-9742</option>
                    <option value="COMUM">AMB. UTI DUCATO HMO-7641</option>
                    <option value="UTI">KOMBI HKR-0911</option>
                    <option value="COMUM">MINIBUS DUCATO OPF-1787</option>
                    <option value="UTI">MINIBUS DUCATO OPT-8447</option>
                    <option value="COMUM">MINIBUS DUCATO OPT-5098</option>
                    <option value="UTI">DUCATO CARGO OPT-4889</option>
                    <option value="COMUM">HONDA CG 150 HMF-8975</option>
                    <option value="UTI">HONDA CG 125 GSY-5607</option>
                    
                </select>

                <label>* MOTORISTA</label>
                <select name="tipoAmbulancia">
                    <option value="COMUM">ABBOUD MIGUEL ABI DIWAN JUNIOR</option>
                    <option value="UTI">ADIMILSON EDUARDO PINTO</option>
                    <option value="COMUM">ARIDALTO MOREIRA DE OLIVEIRA</option>
                    <option value="UTI">CARLOS PACHECO DOS SANTOS</option>
                    <option value="COMUM">CHIRLEI ALEXANDRA COSTA</option>
                    <option value="UTI">CONSTANCIA NEVES ARAUJO</option>
                    <option value="COMUM">CONSTANCIA NEVES ARAUJO</option>
                    <option value="UTI">DAVI CAMPOS DE OLIVEIRA</option>
                    <option value="COMUM">EURIDICE DE SOUZA SANTIAGO</option>
                    <option value="UTI">GIOVANNI FERREIRA DA SILVA</option>
                    <option value="COMUM">HUDSON SILVA RODRIGUES TEIXEIRA</option>
                    <option value="UTI">IVAN CESAR DA CUNHA</option>
                    <option value="COMUM">JOELCIO RODRIGUES</option>
                    <option value="UTI">JUNIA MARIA FRANÇA SILVA</option>
                    <option value="COMUM">MATEUS FERNANDO DAS GRACAS GUIMARAES</option>
                    <option value="UTI">OLEIR INACIO DA SILVA</option>
                    <option value="COMUM">OLEIR INACIO DA SILVA</option>
                    <option value="UTI">PAULO ESPINOLA</option>
                </select>

                <label>* Instruções</label>
                <textarea name="obs" cols="10" rows="5" class="g"></textarea>

                <label>* KM INICIAL</label>
                <input name="kminicial" type="text" class="p" id="telefone" required>

                <label>* KM FINAL</label>
                <input name="kmfinal" type="text" class="p" id="telefone" required>
				
                <input type="submit" value="Atender">

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