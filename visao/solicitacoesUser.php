<?php
session_start();
include("../controle/verificaAcessoSolicitacao.php");
//include("../controle/ultimoChamado.php");
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
                    <a class="navbar-brand" href="painelTransporte.php"><img src="images/logo_mini.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="painelTransporte.php">Inicio</a></li>
                        <li class="scroll"><a href="solicitacoesUser.php?user=<?php echo $_SESSION["usuario"] ?>">Minhas Solicita????es</a></li>
                        <!-- <li class="scroll"><a href="solicitacoesUser2.php">Administrar Solicita????es</a></li> -->
                        <li class="scroll"><a href="../controle/logoutUser.php">Sair</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SOLICITA????O DE TRANSPORTE</h2>
                <p class="text-center wow fadeInDown">Escolha qual fila de transporte deseja visualizar:</p>
            </div>

                  
            <form class="form-inline" action="pesquisaSolicitacoesUser.php" type="post">                  
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="idChamado" class="sr-only">Solicitacao</label>
                    <input type="text" class="form-control" id="idChamado" placeholder="Solicitacao" name="idSolicitacao" required>

                    <!-- <label for="idChamado" class="sr-only">IOutra Informa????o</label>
                    <input style="width: 200px"type="text" class="form-control" id="idOutraInformacao" placeholder="Descricao, Empresa ou Destino" name="idOutraInformacao"> -->
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Pesquisar</button>
                </form> <BR><BR>    
            
               <?php
                include("../controle/listaSolicitacoesDocumentosUsuario.php");
                include("../controle/listaSolicitacoesDoacoesUsuario.php");
                include("../controle/listaSolicitacoesFuncionariosUsuario.php");
                include("../controle/listaSolicitacoesMateriaisUsuario.php");
                //include("../controle/listaSolicitacoesPacienteUsuario.php");           
                ?>
                 <BR><BR>
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