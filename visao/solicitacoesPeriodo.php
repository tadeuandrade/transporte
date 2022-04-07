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
                <a class="navbar-brand" href="adminTransporte.php"><img src="images/logo_mini.png" alt="logo"></a>
            </div>
            
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll active"><a href="adminTransporte.php">Inicio</a></li>
                    <li class="scroll active"><a href="relatoriosTransporte.php">Relatorios</a></li>
                    <!-- li class="scroll"><a href="#">Configuração</a></li> -->
                    <li class="scroll"><a href="../controle/logoutAdmin.php">Sair</a></li>                        
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->
<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">SOLICITAÇÃO POR PERIODO</h2>
            <p class="text-center wow fadeInDown">Preencha o formulário:</p>
        </div>
            <div class="formulario"> 
                <form id="form" action="relatorioSolicitacoesPeriodo.php" target="_blank" method="get">  
                    <label>STATUS</label>
                    <select name="status">
                        <option value="TODOS">TODOS</option>
                        <option value="EM ANDAMENTO">EM ANDAMENTO</option>
                        <option value="CONCLUIDO">CONCLUIDO</option>
                        <option value="CANCELADO">CANCELADO</option>
                    </select>             
                    
                    <label>* DATA INICIAL</label>
                    <input name="dataInicial" type="date" class="p" id="data">

                    <label>* DATA FINAL</label>
                    <input name="dataFinal" type="date" class="p" id="data">

                    <input type="submit" value="Gerar">
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