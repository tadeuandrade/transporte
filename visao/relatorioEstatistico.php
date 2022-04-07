<?php
	session_start();
    include("../controle/verificaAcesso.php");
	include("../controle/getTotalChamado.php");
	include("../controle/getTotalChamadoFechados.php");
	$dtInicial = $_GET["dtInicial"];
	$dtFinal = $_GET["dtFinal"]
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
                    <a class="navbar-brand" href="index.html"><img src="images/logo_mini.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="admin.php">Inicio</a></li>
                        <li class="scroll"><a href="meusChamados.php?matricula=<?php echo $_SESSION["matricula"] ?>">Meus Chamados</a></li>
                        <li class="scroll"><a href="listaChamadosInfra.php">Infra.</a></li>
                        <li class="scroll"><a href="listaChamadosSistemas.php">Sistemas</a></li>
                        <li class="scroll"><a href="formularioAdmin.php">Abrir Chamado</a></li>
                        <li class="scroll"><a href="#">Configuração</a></li>
                        <li class="scroll"><a href="relatorios.php">Relatorio</a></li>
                        <li class="scroll"><a href="../controle/logout.php">Sair</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">RELATORIO ESTATISTICO</h2>
                <p class="text-center wow fadeInDown">Relatorio estatistico - <?php echo $dtInicial;?> a <?php echo $dtFinal;?></p>
            </div>
		
        <strong> Chamados abertos / fechados no periodo: </strong> <br>
		<table width="400" border="1">
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">CHAMADOS ABERTOS</div></td>
            <td bgcolor="#CCCCCC"><div align="center">FECHADO</div></td>
          </tr>
          <tr>
            <td><div align="center"><?php echo $quantTotalChamados ;?></div></td>
            <td><div align="center"><?php echo $quantTotalChamadosFechados ;?></div></td>
          </tr>
        </table>
		<br>
        <strong> Lista de chamados no periodo: </strong>
        <?php
		include("../controle/getChamadosMes.php");
		?>
        <strong> Status dos chamados na data de hoje: </strong>
		<?php
		include("../controle/getStatusAtualChamado.php");
		?>
		
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