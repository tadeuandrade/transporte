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

        <script language="JavaScript">
        /*-----------------------------------------------------------------------
        Máscara para o campo data dd/mm/aaaa hh:mm:ss
        Exemplo: <input maxlength="16" name="datahora" onKeyPress="DataHora(event, this)">
        -----------------------------------------------------------------------*/
        function Hora(evento, objeto){
            var keypress=(window.event)?event.keyCode:evento.which;

            campo = eval (objeto);
            if (campo.value == '00:00:00')
            {
                campo.value=""
            }
         
            caracteres = '0123456789';
            separacao1 = ':';
            separacao2 = ' ';
            separacao3 = ':';
            conjunto1 = 2;
                conjunto2 = 5;
                conjunto3 = 10;
                conjunto4 = 13;
                conjunto5 = 16;
            if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (6)){
                    if (campo.value.length == conjunto1 )
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



        <script language="JavaScript">
        /*-----------------------------------------------------------------------
        Máscara para o campo data dd/mm/aaaa hh:mm:ss
        Exemplo: <input maxlength="16" name="datahora" onKeyPress="DataHora(event, this)">
        -----------------------------------------------------------------------*/
        function letra(evento, objeto){
            var keypress=(window.event)?event.keyCode:evento.which;
            campo = eval (objeto);
            if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;
        }
        </script>

 <!-- <style>
    :required {
        border:2px solid red !important;
    }
</style>      -->
     
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
                    <a class="navbar-brand" href="adminTransporte.php"><img src="images/logo_mini.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                       <li class="scroll active"><a href="adminTransporte.php">Inicio</a></li>
                        <!-- <li class="scroll"><a href="solicitacoesUser.php">Minhas Solicitações</a></li> -->
                        <!-- <li class="scroll"><a href="solicitacoes.php">Administrar Solicitações</a></li> -->
                        <li class="scroll"><a href="../controle/logoutAdmin.php">Sair</a></li>                         
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

            <form id="form" action="../controle/solicitarPacienteAdmin.php" method="post" autocomplete="on"> 

                <label>* ATENDIMENTO</label>
                <input name="atendimento" type="text" class="g" required>                     
                
                <label>* PACIENTE</label>
                <input name="paciente" type="text" class="g" required>

                <label>* MÃE</label>
                <input name="mae" type="text" class="g" required>

                <label>* CONVENIO</label>
                <input name="convenio" type="text" class="g" required>

                <label>* LEITO</label>
                <input name="leito" type="text" class="p"  required>

                <label>* DATA</label>
                <input name="data" type="text" class="p" id="telefone" required onKeyPress="DataHora(event, this)" maxlength="10">

                <label>* HORÁRIO</label>
                <input name="horario" type="text" class="p" id="telefone" required onKeyPress="Hora(event, this)"maxlength="5">
                
                <label>* MOTIVO</label>
                <select name="motivo">
                	<option value="CONSULTA">CONSULTA</option>
                    <option value="EXAME">EXAME</option>
                	<option value="TRANSFERENCIA">TRANSFERENCIA</option>
                    
                </select>

                <label>* ORIGEM</label>
                <select name="origem" id="origem">
                    <option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                    <option value="CASA DE APOIO">CASA DE APOIO</option>
                    <option value="ANEXO">ANEXO</option>
                    <option value="SEDE ADMISTRATIVA">SEDE ADMISTRATIVA</option>
                    <option value="OUTROS">OUTROS</option>                 
                </select>

                <label>* Endereço<small>(outros locais)</small></label>
                <input name="enderecoOrigem" id="enderecoOrigem" type="text" class="g" placeholder="APENAS PARA ORIGEM: OUTROS">

                <label>EMPRESA / RESIDÊNCIA </label>
                <input name="empreOrigem" id="empreOrigem" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="INFORME A EMPRESA OU RESIDÊNCIA (PARA ORIGEM: OUTROS)">



                <label>* DESTINO</label>
                <select name="destino" id="destino">
                    <option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                    <option value="CASA DE APOIO">CASA DE APOIO</option>
                    <option value="ANEXO">ANEXO</option>
                    <option value="SEDE ADMISTRATIVA">SEDE ADMISTRATIVA</option>
                    <option value="OUTROS">OUTROS</option>                   
                </select>

                <label>* Endereço<small>(outros locais)</small></label>
                <input name="enderecoDestino" id="enderecoDestino" type="text" class="g"  placeholder="APENAS PARA DESTINO: OUTROS">

                <label>EMRPESA / RESIDÊNCIA </label>
                <input name="empreDestino" id="empreDestino" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="INFORME A EMPRESA OU RESIDÊNCIA (PARA DESTINO: OUTROS)">
 

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
                <textarea name="obs" cols="10" rows="5" class="g" placeholder="Caso necessário, acrescente demais informações neste local" required></textarea>

                

				
                <input type="submit" value="Solicitar">

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
    <script>    
        let sel = document.getElementById('origem');

        function verifica() {
            let nao = document.getElementById('enderecoOrigem');
            if (sel.value == 'OUTROS') {
                nao.required = true;
            } else {
                nao.required = false ;
            }
        }

        sel.addEventListener('change', verifica);
    </script>
    <script>    
        let sel2 = document.getElementById('destino');

        function verifica2() {
            let sim = document.getElementById('enderecoDestino');
            if (sel2.value == 'OUTROS') {
                sim.required = true;
            } else {
                sim.required = false ;
            }
        }

        sel2.addEventListener('change', verifica2);
    </script>

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