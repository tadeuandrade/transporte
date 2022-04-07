
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
                        <li class="scroll"><a href="admin.php">Inicio</a></li>
                        <li class="scroll"><a href="meusChamados.php?matricula=<?php echo $_SESSION["matricula"] ?>">Meus Chamados</a></li>
                        <li class="scroll"><a href="listaChamadosInfra.php">Infra.</a></li>
                        <li class="scroll"><a href="listaChamadosSistemas.php">Sistemas</a></li>
                        <li class="scroll"><a href="formularioAdmin.php">Abrir Chamado</a></li>
                        <li class="scroll"><a href="#">Configuração</a></li>
                        <li class="scroll active"><a href="relatorios.php">Relatorio</a></li>
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
                <p class="text-center wow fadeInDown">Relatorio estatistico</p>
            </div>

             <div class="formulario">  

            <form id="form" action="relatorioBacklogMensal.php" method="get">                  
                    
                <label>MES</label>
                <select name="mes">
                    <option value="JANEIRO" class="g">JANEIRO</option>
                    <option value="FEVEREIRO" class="g">FEVEREIRO</option>
                    <option value="MARCO" class="g">MARCO</option>
                    <option value="ABRIL" class="g">ABRIL</option>
                    <option value="MAIO" class="g">MAIO</option>
                    <option value="JUNHO" class="g">JUNHO</option>
                    <option value="JULHO" class="g">JULHO</option>
                    <option value="AGOSTO" class="g">AGOSTO</option>
                    <option value="SETEMBRO" class="g">SETEMBRO</option>
                    <option value="OUTUBRO" class="g">OUTUBRO</option>
                    <option value="NOVEMBRO" class="g">NOVEMBRO</option>
                    <option value="DEZEMBRO" class="g">DEZEMBRO</option>
                </select>
                
                
				
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