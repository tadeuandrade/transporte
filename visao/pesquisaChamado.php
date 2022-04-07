 <?php
 	session_start();
	include("../controle/getChamado.php");
    include("../controle/verificaAcesso.php");

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
                <h2 class="section-title text-center wow fadeInDown">SISTEMA DE CHAMADOS - INSTITUTO MARIO PENNA</h2>
                <p class="text-center wow fadeInDown">Todo os campos marcados com * devem ser obrigatoriamente preenchidos:</p>
                
            </div>

             <div class="formulario"> 

              <?php 
                 if ($STATUS <> 'FECHADO')
                 {

                                    
                ?> 

            <form id="form" action="../controle/atualizarChamado.php?idChamado=<?php echo $_GET["idChamado"]?>" method="post">                  
                 
                <label>Chamado</label>
                <input name="idChamado" type="text" class="g" value="<?php echo $idChamado ?>" disabled> 
                
                <label>* Responsavel</label>

                <select name="idUsuario">
                	<option value="<?php echo $idUsuario ?>"><?php echo $DATA ?></option>
                	 <?php
						include("../controle/ctrlComboUsuario.php");
						?>
                    
                </select>
                 
                    
                <label>* Nome</label>
                <input name="nome" type="text" class="g" value="<?php echo $nome_usuario ?>" required>
                
                <label>* Unidade</label>
                <select name="unidade">
                	<option value="<?php echo $unidade ?>"><?php echo $unidade ?></option>
                	<option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                	<option value="SEDE">SEDE</option>
                    <option value="ANEXO">ANEXO</option>
                    <option value="CASA DE APOIO">HOSPITAL MARIO PENNA</option>
                    
                </select>

                <label>* Setor</label>
                <input name="setor" type="text" class="g" value="<?php echo $setor ?>" required>

                <label>* Telefone(Ramal)</label>
                <input name="telefone" type="text" class="p" id="telefone" value="<?php echo $telefone ?>" required>
                
                
                <label>E-mail</label>
                <input name="email" type="text" class="g" value="<?php echo $email ?>">


                <label>Descrição do chamado</label>
                <textarea name="descricao" cols="10" rows="5" class="g" placeholder="Seja o mais detalhista possivel"><?php echo $descricao ?></textarea>
                
                <label>Status</label>
                <select name="status">
                	<option value="<?php echo $STATUS ?>"><?php echo $STATUS ?></option>
                    <option value="AGENDADO">AGENDADO</option>
                    <option value="EM ANDAMENTO">EM ANDAMENTO</option>
                    <option value="AGUARDANDO ATENDIMENTO">AGUARDANDO ATENDIMENTO</option>
                    <option value="AGUARDANDO CLIENTE">AGUARDANDO CLIENTE</option>
                    <option value="AGUARDANDO TERCEIROS">AGUARDANDO TERCEIROS</option>
                    <option value="AGUARDANDO VALIDAÇÃO">AGUARDANDO VALIDAÇÃO</option>
                    <option value="FECHADO">FECHADO</option>
                </select>
                
                 <label>Ação realizada:</label>
                <textarea name="acao" cols="10" rows="5" class="g" placeholder="Descreva ação realizada"><?php echo $acao ?></textarea>

                

				
                <input type="submit" value="Atualizar">

            </form>

          <?php   }
          
          else {
                ?>

                <form id="form" action="../controle/atualizarChamado.php?idChamado=<?php echo $_GET["idChamado"]?>" method="post">                  
                 
                <label>Chamado</label>
                <input name="idChamado" type="text" class="g" value="<?php echo $idChamado ?>" disabled> 
                
                <label>* Responsavel</label>

                <select name="idUsuario">
                	<option value="<?php echo $idUsuario ?>"><?php echo $DATA ?></option>
                	 
                    
                </select>

                
                 
                    
                <label>* Nome</label>
                <input name="nome" type="text" class="g" value="<?php echo $nome_usuario ?>" disabled>
                
                <label>* Unidade</label>
                <select name="unidade" disabled>
                    <option value="<?php echo $unidade ?>" disabled><?php echo $unidade ?></option>
                    <option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                    <option value="SEDE">SEDE</option>
                    <option value="ANEXO">ANEXO</option>
                    <option value="CASA DE APOIO">HOSPITAL MARIO PENNA</option>
                    
                </select>

                <label>* Setor</label>
                <input name="setor" type="text" class="g" value="<?php echo $setor ?>" disabled>

                <label>* Telefone(Ramal)</label>
                <input name="telefone" type="text" class="p" id="telefone" value="<?php echo $telefone ?>" disabled>
                
                
                <label>E-mail</label>
                <input name="email" type="text" class="g" value="<?php echo $email ?>" disabled>


                <label>Descrição do chamado</label>
                <textarea name="descricao" cols="10" rows="5" class="g" placeholder="Seja o mais detalhista possivel" disabled><?php echo $descricao ?></textarea>
                
                <label>Status</label>
                <select name="status">
                    <option value="<?php echo $STATUS ?>"><?php echo $STATUS ?></option>
                    
                </select>
                
                 <label>Ação realizada:</label>
                <textarea name="acao" cols="10" rows="5" class="g" placeholder="Descreva ação realizada" disabled><?php echo $acao ?></textarea>

                

                
                

            </form>

            <?php
                }
            ?> 
          
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