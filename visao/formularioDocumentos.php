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
<!-- <style>
    :required {
        border:2px solid red !important;
    }
</style>       -->
     
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
                        <li class="scroll"><a href="solicitacoesUser.php">Minhas Solicitações</a></li>
                        <!-- <li class="scroll"><a href="solicitacoesUser2.php">Administrar Solicitações</a></li> -->
                        <li class="scroll"><a href="../controle/logoutUser.php">Sair</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SOLICITAÇÃO DE TRANSPORTE DE DOCUMENTOS</h2>
                <p class="text-center wow fadeInDown">Bem vindo ao sistema de solicitações de transporte, preencha o formulário abaixo:</p>
            </div>

             <div class="formulario">  

            <form id="form" action="../controle/solicitarDocumentos.php" method="post" enctype="multipart/form-data" autocomplete="on">                 
                <label>* SOLICITANTE</label>
                <select name="nome" class="g" required>
                    <option value="" selected disabled> INFORME O SOLICITANTE </option>
                    <?php
                        include("../controle/ctrlComboFuncionario.php");
                    ?>
                </select>

                <label>* SETOR SOLICITANTE</label>
                <select name="setor" id="setor" required>
                    <option value="" selected disabled> INFORME O SETOR </option>
                    <option value="ADMINISTRACAO GERAL">ADMINISTRACAO GERAL</option>
                    <option value="AGENCIA TRANSFUSIONAL - HL">AGENCIA TRANSFUSIONAL - HL</option>                
                    <option value="ALA A - HMP">ALA A - HMP</option> 
                    <option value="ALA B - HMP">ALA B - HMP</option> 
                    <option value="ALA C - HMP - COVID19">ALA C - HMP - COVID19</option> 
                    <option value="ALMOXARIFADO DE BENS">ALMOXARIFADO DE BENS</option> 
                    <option value="ALMOXARIFADO DE MATERIAIS - HL">ALMOXARIFADO DE MATERIAIS - HL</option> 
                    <option value="AMBULATORIO - CONV. PART. - HL">AMBULATORIO - CONV. PART. - HL</option> 
                    <option value="AMBULATORIO - SUS - HL ">AMBULATORIO - SUS - HL</option> 
                    <option value="ANATOMIA CITOLOGIA - HL">ANATOMIA CITOLOGIA - HL</option> 
                    <option value="APOSENTADOS">APOSENTADOS</option> 
                    <option value="AREAS COMUNS - HL ">AREAS COMUNS - HL</option> 
                    <option value="ARQUIVO CENTRAL ">ARQUIVO CENTRAL</option> 
                    <option value="ASSESSORIA JURIDICA">ASSESSORIA JURIDICA</option> 
                    <option value="ASSIST CONTAS - MOVDOC ">ASSIST CONTAS - MOVDOC</option> 
                    <option value="AUDITORIA INTERNA">AUDITORIA INTERNA</option> 
                    <option value="AUDITORIA MEDICA - HL">AUDITORIA MEDICA - HL</option> 
                    <option value="BENS NAO ENCONTRADOS">BENS NAO ENCONTRADOS</option> 
                    <option value="CASA DE APOIO">CASA DE APOIO</option> 
                    <option value="CENTRAL DE GUIAS - HL">CENTRAL DE GUIAS - HL</option> 
                    <option value="CENTRAL DE OPME - HL">CENTRAL DE OPME - HL</option> 
                    <option value="CENTRAL MARC. CONSULTAS - HL ">CENTRAL MARC. CONSULTAS - HL </option> 
                    <option value="CENTRO CIRURGICO - HL">CENTRO CIRURGICO - HL</option> 
                    <option value="CENTRO CIRURGICO - HMP ">CENTRO CIRURGICO - HMP</option> 
                    <option value="CENTRO DE DISTRIBUICAO ">CENTRO DE DISTRIBUICAO</option> 
                    <option value="CIAM / RESIDENCIA MEDICA - HL">CIAM / RESIDENCIA MEDICA - HL</option> 
                    <option value="CIHDOTT">CIHDOTT</option> 
                    <option value="CLINICA DA DOR - HL">CLINICA DA DOR - HL</option> 
                    <option value="CME - ESTERILIZACAO - HL">CME - ESTERILIZACAO - HL</option> 
                    <option value="COMERCIAL E CONVENIOS">COMERCIAL E CONVENIOS</option> 
                    <option value="CONFERENCIA - CENTRO CIRURGICO">CONFERENCIA - CENTRO CIRURGICO</option> 
                    <option value="CONTABILIDADE">CONTABILIDADE</option> 
                    <option value="CONTROLADORIA">CONTROLADORIA</option> 
                    <option value="COORDENACAO GERAL SADT - HL">COORDENACAO GERAL SADT - HL  </option> 
                    <option value="CTI - HL">CTI - HL</option> 
                    <option value="CUIDADOS PALEATIVOS">CUIDADOS PALEATIVOS</option> 
                    <option value="DEPARTAMENTO PESSOAL">DEPARTAMENTO PESSOAL</option> 
                    <option value="DIRETORIA  ASSIST. HOSPITALAR">DIRETORIA  ASSIST. HOSPITALAR</option> 
                    <option value="DIRETORIA EXECUTIVA">DIRETORIA EXECUTIVA</option> 
                    <option value="EDUCAÇÃO CONTINUADA -HL">EDUCAÇÃO CONTINUADA -HL</option> 
                    <option value="ENDOSCOPIA DIGESTIVA - HL ">ENDOSCOPIA DIGESTIVA - HL    </option> 
                    <option value="ENFERMAGEM - HL ">ENFERMAGEM - HL</option> 
                    <option value="EQUIPE">EQUIPE</option> 
                    <option value="ESTACIONAMENTO - HL">ESTACIONAMENTO - HL</option> 
                    <option value="ESTOMATOLOGIA - HL">ESTOMATOLOGIA - HL</option> 
                    <option value="FARMACIA CENTRAL - HL">FARMACIA CENTRAL - HL</option> 
                    <option value="FARMACIA CENTRAL - HMP ">FARMACIA CENTRAL - HMP</option> 
                    <option value="FARMACIA CLINICA - HL">FARMACIA CLINICA - HL</option> 
                    <option value="FARMACIA HMP - SOL PAR ">FARMACIA HMP - SOL PAR</option> 
                    <option value="FARMACIA QUIMIOTERAPIA - HL">FARMACIA QUIMIOTERAPIA - HL  </option> 
                    <option value="FARMACIA SAT- PA SUS/SADT - HL">FARMACIA SAT- PA SUS/SADT - HL</option> 
                    <option value="FARMACIA SAT. UNID INTER - HL">FARMACIA SAT. UNID INTER - HL</option> 
                    <option value="FARMACIA SATELITE - BLOCO - HL">FARMACIA SATELITE - BLOCO - HL</option> 
                    <option value="FARMACIA SATELITE - CTI - HL ">FARMACIA SATELITE - CTI - HL </option> 
                    <option value="FATURAMENTO - HL">FATURAMENTO - HL</option> 
                    <option value="FINANCEIRO ">FINANCEIRO</option> 
                    <option value="FISIOTERAPIA - CTI/UCO - HL">FISIOTERAPIA - CTI/UCO - HL  </option> 
                    <option value="FISIOTERAPIA - HL ">FISIOTERAPIA - HL</option> 
                    <option value="FONOAUDIOLOGIA - HL">FONOAUDIOLOGIA - HL</option> 
                    <option value="FONOAUDIOLOGIA - HMP">FONOAUDIOLOGIA - HMP</option> 
                    <option value="GESTAO AMBIENTAL">GESTAO AMBIENTAL</option> 
                    <option value="GESTÃO DA QUALIDADE">GESTÃO DA QUALIDADE</option> 
                    <option value="GOVERNANÇA - HL ">GOVERNANÇA - HL</option> 
                    <option value="HEMODINAMICA - HL ">HEMODINÂMICA - HL</option> 
                    <option value="HIGIENIZACAO - HL ">HIGIENIZACAO - HL</option> 
                    <option value="HOSPITAL DIA - HL ">HOSPITAL DIA - HL</option> 
                    <option value="HUMANIZACAO E PSICOLOGIA - HL">HUMANIZAÇÃO E PSICOLOGIA - HL</option> 
                    <option value="IODOTERAPIA - HL">IODOTERAPIA - HL</option> 
                    <option value="LANCHONETE - HL ">LANCHONETE - HL</option> 
                    <option value="MAMOGRAFIA - HL ">MAMOGRAFIA - HL</option> 
                    <option value="MAMOGRAFIA - HMP">MAMOGRAFIA - HMP</option> 
                    <option value="MANUT EQUIP BIOMEDICOS - HL">MANUT EQUIP BIOMEDICOS - HL  </option> 
                    <option value="MANUTENCAO PREDIAL - HL">MANUTENCAO PREDIAL - HL</option> 
                    <option value="MARKETING E RELACIONAMENTO">MARKETING E RELACIONAMENTO   </option> 
                    <option value="MEDIC CONTROLADOS - HL ">MEDIC CONTROLADOS - HL</option> 
                    <option value="MEDICINA NUCLEAR - HL">MEDICINA NUCLEAR - HL</option> 
                    <option value="METODOS GRAFICOS - HL">METODOS GRAFICOS - HL</option> 
                    <option value="NAO OPERACIONAL ">NAO OPERACIONAL</option> 
                    <option value="NUCLEO DE GESTÃO DE DOAÇÕES">NUCLEO DE GESTÃO DE DOAÇÕES  </option> 
                    <option value="NUCLEO ESPEC ONCOLÓGICA - NEO">NUCLEO ESPEC ONCOLÓGICA - NEO</option> 
                    <option value="NUC.PESQ.EN -NEP TRANSLACIONAL">NUC.PESQ.EN -NEP TRANSLACIONAL</option> 
                    <option value="NUTRICAO CLINICA - HL">NUTRICAO CLINICA - HL</option> 
                    <option value="OBRA DA ENFERMARIA SUS - HL">OBRA DA ENFERMARIA SUS - HL  </option> 
                    <option value="OBRA DO ELEVADOR - HL">OBRA DO ELEVADOR - HL</option> 
                    <option value="OBRA PREDIO AV.CHURCHILL Nº180">OBRA PREDIO AV.CHURCHILL Nº180</option> 
                    <option value="OBRAS - BLOCO CIRURGICO - HL ">OBRAS - BLOCO CIRURGICO - HL </option> 
                    <option value="OBRAS - MPT - M.G - GERADOR">OBRAS - MPT - M.G - GERADOR  </option> 
                    <option value="OBRAS - PA CONVENIO/PART. - HL">OBRAS - PA CONVENIO/PART. - HL</option> 
                    <option value="OBRAS DO ABRIGO ">OBRAS DO ABRIGO</option> 
                    <option value="ONCOOP - COOPERATIVA MÉDICA">ONCOOP - COOPERATIVA MÉDICA  </option> 
                    <option value="OUVIDORIA">OUVIDORIA</option> 
                    <option value="P.A. CONVENIO PARTICULAR - HL">P.A. CONVENIO PARTICULAR - HL</option> 
                    <option value="P.A. SUS - HL">P.A. SUS - HL</option> 
                    <option value="PATOLOGIA CLINICA - HL ">PATOLOGIA CLINICA - HL</option> 
                    <option value="PESQUISA CLINICA - NEP ">PESQUISA CLINICA - NEP</option> 
                    <option value="PET/CT - HL">PET/CT - HL</option> 
                    <option value="POSTO 1 - HL ">POSTO 1 - HL </option> 
                    <option value="POSTO 2 - HL ">POSTO 2 - HL </option> 
                    <option value="POSTO 3 - HL ">POSTO 3 - HL </option> 
                    <option value="POSTO 4 - HL ">POSTO 4 - HL </option> 
                    <option value="POSTO 5 - HL ">POSTO 5 - HL </option> 
                    <option value="POSTO 6 - HL ">POSTO 6 - HL </option> 
                    <option value="POSTO 8 - HL ">POSTO 8 - HL </option> 
                    <option value="PRÉ AUDITORIA DE ENFERMAGEM">PRÉ AUDITORIA DE ENFERMAGEM  </option> 
                    <option value="PROJ. ASSOCIACAO MORADORES SM">PROJ. ASSOCIACAO MORADORES SM</option> 
                    <option value="PROJ. INTEGRACAO PELO ESPORTE">PROJ. INTEGRACAO PELO ESPORTE</option> 
                    <option value="PROJETO CIDADANIA E ESPORTE">PROJETO CIDADANIA E ESPORTE  </option> 
                    <option value="PROJETO LED - HL">PROJETO LED - HL</option> 
                    <option value="PROJETO PRONON - TMO">PROJETO PRONON - TMO</option> 
                    <option value="PROJETO PRONON RESSONÂNCIA">PROJETO PRONON RESSONÂNCIA   </option> 
                    <option value="PROJETO PRONON ULTRASSONOGRAFI">PROJETO PRONON ULTRASSONOGRAFI</option> 
                    <option value="PROJETOS EDUCACIONAIS">PROJETOS EDUCACIONAIS</option> 
                    <option value="PROJETOS INSTITUCIONAIS">PROJETOS INSTITUCIONAIS</option> 
                    <option value="PROJETOS PRONON - ADM">PROJETOS PRONON - ADM</option> 
                    <option value="PROJETOS SOCIAIS">PROJETOS SOCIAIS</option> 
                    <option value="PSICOLOGIA - HMP">PSICOLOGIA - HMP</option> 
                    <option value="QT CONVÊNIO">QT CONVÊNIO</option> 
                    <option value="QT CONVÊNIO AUTORIZAÇAO">QT CONVÊNIO AUTORIZAÇAO</option> 
                    <option value="QT_ENGERMAGEM_MOVDOC">QT_ENGERMAGEM_MOVDOC</option> 
                    <option value="QT_FARMACIA_MOVDOC">QT_FARMACIA_MOVDOC</option> 
                    <option value="QT_FATURAMENTO_MOVDOC">QT_FATURAMENTO_MOVDOC</option> 
                    <option value="QT_RECEPÇÃO_MOVDOC">QT_RECEPÇÃO_MOVDOC</option> 
                    <option value="QUIMIOTERAPIA - HL">QUIMIOTERAPIA - HL</option> 
                    <option value="RADIOLOGIA - HL ">RADIOLOGIA - HL</option> 
                    <option value="RADIOLOGIA - HMP">RADIOLOGIA - HMP</option> 
                    <option value="RADIOTERAPIA - HL ">RADIOTERAPIA - HL</option> 
                    <option value="RECEPCAO - HMP">RECEPCAO - HMP</option> 
                    <option value="RECEPCAO CONV/PART - HL">RECEPCAO CONV/PART - HL</option> 
                    <option value="RECEPCAO SUS - HL ">RECEPCAO SUS - HL</option> 
                    <option value="RECURSO DE GLOSAS ">RECURSO DE GLOSAS</option> 
                    <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option> 
                    <option value="REGISTRO HOSPITALAR DE CANCER">REGISTRO HOSPITALAR DE CANCER</option> 
                    <option value="RELAÇÕES INSTITUCIONAIS">RELAÇÕES INSTITUCIONAIS</option> 
                    <option value="RESSONANCIA - HL">RESSONANCIA - HL</option> 
                    <option value="RESSONANCIA - HMP ">RESSONANCIA - HMP</option> 
                    <option value="SAME - ARQUIVO MEDICO - HL">SAME - ARQUIVO MEDICO - HL   </option> 
                    <option value="SAME - ARQUIVO MEDICO - HMP">SAME - ARQUIVO MEDICO - HMP  </option> 
                    <option value="SAME - MEMOVIP">SAME - MEMOVIP</option> 
                    <option value="SECRETARIADO - HMP">SECRETARIADO - HMP</option> 
                    <option value="SEGURANÇA - HL">SEGURANÇA - HL</option> 
                    <option value="SEGURANCA - HMP ">SEGURANCA - HMP</option> 
                    <option value="SERVIÇO CONTR INFEC HOSPITALAR">SERVIÇO CONTR INFEC HOSPITALAR</option> 
                    <option value="SERVICO SOCIAL - HL">SERVICO SOCIAL - HL</option> 
                    <option value="SESMT ">SESMT</option> 
                    <option value="SND - HL">SND - HL</option> 
                    <option value="SND - HMP">SND - HMP</option> 
                    <option value="SUPRIMENTOS">SUPRIMENTOS</option> 
                    <option value="TECNOLOGIA DA INFORMAÇÃO">TECNOLOGIA DA INFORMAÇÃO</option> 
                    <option value="TERAPIA OCUPACIONAL - HL">TERAPIA OCUPACIONAL - HL</option> 
                    <option value="TESOURARIA - HL ">TESOURARIA - HL</option> 
                    <option value="TOMOGRAFIA - HL ">TOMOGRAFIA - HL</option> 
                    <option value="TRANSPLANTE MEDULA OSSEA - HL">TRANSPLANTE MEDULA OSSEA - HL</option> 
                    <option value="TRANSPORTE ">TRANSPORTE</option> 
                    <option value="ULTRASSONOGRAFIA - HL">ULTRASSONOGRAFIA - HL</option>
                </select>


                <label>* TELEFONE</label>
                <input name="telefone" type="text" class="p" id="telefone" required>

                <label>* ORIGEM</label>
                <select name="origem" id="origem">
                    <option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                    <option value="CASA DE APOIO">CASA DE APOIO</option>
                    <option value="ANEXO">ANEXO</option>
                    <option value="SEDE ADMISTRATIVA">SEDE ADMISTRATIVA</option>
                    <option value="OUTROS">OUTROS</option>
                </select>

                <label>ENDEREÇO ORIGEM</label>
                <input name="enderecoOrigem"  id="enderecoOrigem" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="APENAS PARA ORIGEM: OUTROS">

                <label>EMPRESA / RESIDÊNCIA </label>
                <input name="empreOrigem" id="empreOrigem" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="INFORME A EMPRESA OU RESIDÊNCIA (PARA ORIGEM: OUTROS)">


                <!-- <label> SETOR</label>
                <select name="setor" id="setor" required>
                    <option value="" selected disabled> INFORME O SETOR </option>
                    <option value="ADMINISTRACAO">ADMINISTRACAO</option>
                    <option value="ADMINISTRACAO - HL">ADMINISTRACAO - HL</option>
                    <option value="ADMINISTRACAO - HMP">ADMINISTRACAO - HMP</option>
                    <option value="ADMINISTRACAO GERAL">ADMINISTRACAO GERAL</option>
                    <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                    <option value="ADMINISTRATIVO - HL">ADMINISTRATIVO - HL</option>
                    <option value="ADMINISTRATIVO - HMP">ADMINISTRATIVO - HMP</option>
                    <option value="AGENCIA TRANSFUSIONAL - HL">AGENCIA TRANSFUSIONAL - HL</option>
                    <option value="AGENCIA TRANSFUSIONAL - HMP">AGENCIA TRANSFUSIONAL - HMP</option>
                    <option value="AGENCIA TRANSFUSIONAL- HMP">AGENCIA TRANSFUSIONAL- HMP</option>
                    <option value="ALA A">ALA A</option>
                    <option value="ALA A - HMP">ALA A - HMP</option>
                    <option value="ALA B">ALA B</option>
                    <option value="ALA B - HMP">ALA B - HMP</option>
                    <option value="ALA C">ALA C</option>
                    <option value="ALA C - HMP">ALA C - HMP</option>
                    <option value="ALMOX BENS EM DISPONIBILI - HL">ALMOX BENS EM DISPONIBILI - HL</option>
                    <option value="ALMOXARIFADO - HL">ALMOXARIFADO - HL</option>
                    <option value="ALMOXARIFADO - HMP">ALMOXARIFADO - HMP</option>
                    <option value="ALMOXARIFADO PATRIMONIAL - HL">ALMOXARIFADO PATRIMONIAL - HL</option>
                    <option value="AMBULAT - CONVENIO/PARTICULAR">AMBULAT - CONVENIO/PARTICULAR</option>
                    <option value="AMBULATORIO">AMBULATORIO</option>
                    <option value="AMBULATORIO - CONV. PART. - HL">AMBULATORIO - CONV. PART. - HL</option>
                    <option value="AMBULATORIO - HMP">AMBULATORIO - HMP</option>
                    <option value="AMBULATORIO - INCENTIVO SUS">AMBULATORIO - INCENTIVO SUS</option>
                    <option value="AMBULATORIO - SUS">AMBULATORIO - SUS</option>
                    <option value="AMBULATORIO - SUS - HL">AMBULATORIO - SUS - HL</option>
                    <option value="ANALISE E RECURSO DE GLOSA- HL">ANALISE E RECURSO DE GLOSA- HL</option>
                    <option value="ANATOMIA / CITOLOGIA - HMP">ANATOMIA / CITOLOGIA - HMP</option>
                    <option value="ANATOMIA CITOLOGIA - HL">ANATOMIA CITOLOGIA - HL</option>
                    <option value="ANATOMIA/CITOLOGIA - HL">ANATOMIA/CITOLOGIA - HL</option>
                    <option value="ANATOMIA/CITOLOGIA - HMP">ANATOMIA/CITOLOGIA - HMP</option>
                    <option value="APOIO">APOIO</option>
                    <option value="APOIO - HL">APOIO - HL</option>
                    <option value="APOIO - HMP">APOIO - HMP</option>
                    <option value="APOIO/SERVICOS GERAIS">APOIO/SERVICOS GERAIS</option>
                    <option value="APOSENTADOS">APOSENTADOS</option>
                    <option value="AREAS COMUNS - ADM GERAL">AREAS COMUNS - ADM GERAL</option>
                    <option value="AREAS COMUNS - HL">AREAS COMUNS - HL</option>
                    <option value="AREAS COMUNS - HMP">AREAS COMUNS - HMP</option>
                    <option value="AREAS COMUNS - PREDIO ANEXO">AREAS COMUNS - PREDIO ANEXO</option>
                    <option value="ASSEMBLEIA GERAL - ADM">ASSEMBLEIA GERAL - ADM</option>
                    <option value="ASSESSORIA ADMINISTRATIVA">ASSESSORIA ADMINISTRATIVA</option>
                    <option value="ASSESSORIA DE IMPRENSA">ASSESSORIA DE IMPRENSA</option>
                    <option value="ASSESSORIA JURIDICA">ASSESSORIA JURIDICA</option>
                    <option value="ASSESSORIA JURIDICA - ADM">ASSESSORIA JURIDICA - ADM</option>
                    <option value="ASSIST CONTAS - MOVDOC">ASSIST CONTAS - MOVDOC</option>
                    <option value="AUDITORIA INTERNA - ADM">AUDITORIA INTERNA - ADM</option>
                    <option value="AUDITORIA MEDICA">AUDITORIA MEDICA</option>
                    <option value="AUDITORIA MÉDICA">AUDITORIA MÉDICA</option>
                    <option value="AUDITORIA MEDICA - HL">AUDITORIA MEDICA - HL</option>
                    <option value="BAZAR DAS VOLUNTARIAS">BAZAR DAS VOLUNTARIAS</option>
                    <option value="BAZAR MARIO PENNA">BAZAR MARIO PENNA</option>
                    <option value="BENS NAO ENCONTRADOS">BENS NAO ENCONTRADOS</option>
                    <option value="CAMPUS MARIO PENNA">CAMPUS MARIO PENNA</option>
                    <option value="CASA DE APOIO">CASA DE APOIO</option>
                    <option value="CENTRAL DE AQUECIMENTO - HL">CENTRAL DE AQUECIMENTO - HL</option>
                    <option value="CENTRAL DE AR CONDIC - HL">CENTRAL DE AR CONDIC - HL</option>
                    <option value="CENTRAL DE DOACOES">CENTRAL DE DOACOES</option>
                    <option value="CENTRAL DE GASES - HMP">CENTRAL DE GASES - HMP</option>
                    <option value="CENTRAL DE GUIAS - HL">CENTRAL DE GUIAS - HL</option>
                    <option value="CENTRAL DE OPME - HL">CENTRAL DE OPME - HL</option>
                    <option value="CENTRAL MARC. CONSULTAS - HL">CENTRAL MARC. CONSULTAS - HL</option>
                    <option value="CENTRAL MARC. CONSULTAS - HMP">CENTRAL MARC. CONSULTAS - HMP</option>
                    <option value="CENTRO CIRURGICO - HL">CENTRO CIRURGICO - HL</option>
                    <option value="CENTRO CIRURGICO - HMP">CENTRO CIRURGICO - HMP</option>
                    <option value="CENTRO DE DISTRIBUICAO - HL">CENTRO DE DISTRIBUICAO - HL</option>
                    <option value="CENTRO DE TRATAMENTO INTENSIVO">CENTRO DE TRATAMENTO INTENSIVO</option>
                    <option value="CIAM / RESIDENCIA MEDICA - HL">CIAM / RESIDENCIA MEDICA - HL</option>
                    <option value="CIAM/RESIDENCIA MEDICA">CIAM/RESIDENCIA MEDICA</option>
                    <option value="CIHDOTT">CIHDOTT</option>
                    <option value="CLINICA DA DOR - HL">CLINICA DA DOR - HL</option>
                    <option value="CME - ESTERILIZACAO - HL">CME - ESTERILIZACAO - HL</option>
                    <option value="CME - ESTERILIZACAO - HMP">CME - ESTERILIZACAO - HMP</option>
                    <option value="CME - HL">CME - HL</option>
                    <option value="CME - HMP">CME - HMP</option>
                    <option value="COLONOSCOPIA - HMP">COLONOSCOPIA - HMP</option>
                    <option value="COMISSAO DE CONTROLE INFECCAO">COMISSAO DE CONTROLE INFECCAO</option>
                    <option value="COMITE ETICA PESQUISA - HL">COMITE ETICA PESQUISA - HL</option>
                    <option value="COMPRAS">COMPRAS</option>
                    <option value="CONFERENCIA - CENTRO CIRURGICO">CONFERENCIA - CENTRO CIRURGICO</option>
                    <option value="CONFERENCIA DE CONTAS">CONFERENCIA DE CONTAS</option>
                    <option value="CONSELHO CURADOR">CONSELHO CURADOR</option>
                    <option value="CONSELHO DE ETICA">CONSELHO DE ETICA</option>
                    <option value="CONSELHO FISCAL">CONSELHO FISCAL</option>
                    <option value="CONSELHOS">CONSELHOS</option>
                    <option value="CONTABILIDADE">CONTABILIDADE</option>
                    <option value="CONTABILIDADE - ADM">CONTABILIDADE - ADM</option>
                    <option value="CONTROLADORIA - ADM">CONTROLADORIA - ADM</option>
                    <option value="CONVENIOS">CONVENIOS</option>
                    <option value="COORD ADMINISTRATIVA - HL">COORD ADMINISTRATIVA - HL</option>
                    <option value="COORD. DE ENFERMAGEM - HL">COORD. DE ENFERMAGEM - HL</option>
                    <option value="COORD. DE ENFERMAGEM - HMP">COORD. DE ENFERMAGEM - HMP</option>
                    <option value="COORD DE PA'S/AMB. CONV. - HL">COORD DE PA'S/AMB. CONV. - HL</option>
                    <option value="COORDENACAO DE ENFERMAGEM">COORDENACAO DE ENFERMAGEM</option>
                    <option value="COORDENACAO DE SADT">COORDENACAO DE SADT</option>
                    <option value="COORDENACAO DE TELEMARKETING">COORDENACAO DE TELEMARKETING</option>
                    <option value="COORDENACAO GERAL SADT - HL">COORDENACAO GERAL SADT - HL</option>
                    <option value="CRC - HL">CRC - HL</option>
                    <option value="CRC - HMP">CRC - HMP</option>
                    <option value="CTI - HL">CTI - HL</option>
                    <option value="CUSTOS E ORCAMENTOS">CUSTOS E ORCAMENTOS</option>
                    <option value="CUSTOS E ORCAMENTOS - ADM">CUSTOS E ORCAMENTOS - ADM</option>
                    <option value="DEPARTAMENTO PESSOAL">DEPARTAMENTO PESSOAL</option>
                    <option value="DEPARTAMENTO PESSOAL - ADM">DEPARTAMENTO PESSOAL - ADM</option>
                    <option value="DESUSO TELEFONIA - HL">DESUSO TELEFONIA - HL</option>
                    <option value="DIRET GEST E FINANCAS - ADM">DIRET GEST E FINANCAS - ADM</option>
                    <option value="DIRETORIA DE HUMANIZACAO - ADM">DIRETORIA DE HUMANIZACAO - ADM</option>
                    <option value="DIRETORIA HOSPITALAR - ADM">DIRETORIA HOSPITALAR - ADM</option>
                    <option value="DIRETORIA TECNICA">DIRETORIA TECNICA</option>
                    <option value="DIRETORIA TECNICA - HL">DIRETORIA TECNICA - HL</option>
                    <option value="ECODOPPLERGRAFIA - HL">ECODOPPLERGRAFIA - HL</option>
                    <option value="EMENDAS/VERBAS GOVERNAMENTAIS">EMENDAS/VERBAS GOVERNAMENTAIS</option>
                    <option value="ENDOSCOPIA DIGESTIVA - HL">ENDOSCOPIA DIGESTIVA - HL</option>
                    <option value="ENDOSCOPIA DIGESTIVA - HMP">ENDOSCOPIA DIGESTIVA - HMP</option>
                    <option value="ENFERMAGEM - HMP">ENFERMAGEM - HMP</option>
                    <option value="ENFERMARIA ESPECIAL - SUS - HL">ENFERMARIA ESPECIAL - SUS - HL</option>
                    <option value="ESPACO DE CONVIVENCIA - HL">ESPACO DE CONVIVENCIA - HL</option>
                    <option value="ESPACO DE CONVIVENCIA - HMP">ESPACO DE CONVIVENCIA - HMP</option>
                    <option value="ESTACIONAMENTO - HL">ESTACIONAMENTO - HL</option>
                    <option value="ESTOMATOLOGIA - HL">ESTOMATOLOGIA - HL</option>
                    <option value="ESTOQUE DE OPME - HMP">ESTOQUE DE OPME - HMP</option>
                    <option value="ESTOQUE JUDICIAL - HL">ESTOQUE JUDICIAL - HL</option>
                    <option value="ESTOQUE OPME">ESTOQUE OPME</option>
                    <option value="EVENTO DIA NAC. COMBATE CANCER">EVENTO DIA NAC. COMBATE CANCER</option>
                    <option value="FARMACIA CENTRAL - HL">FARMACIA CENTRAL - HL</option>
                    <option value="FARMACIA CENTRAL - HMP">FARMACIA CENTRAL - HMP</option>
                    <option value="FARMACIA CLINICA - HL">FARMACIA CLINICA - HL</option>
                    <option value="FARMACIA HMP - SOL PAR">FARMACIA HMP - SOL PAR</option>
                    <option value="FARMACIA QUIMIOTERAPIA - HL">FARMACIA QUIMIOTERAPIA - HL</option>
                    <option value="FARMACIA SAT. - UNID INTE -HL">FARMACIA SAT. - UNID INTE -HL</option>
                    <option value="FARMACIA SAT- PA SUS/SADT - HL">FARMACIA SAT- PA SUS/SADT - HL</option>
                    <option value="FARMACIA SATELITE - BLOCO">FARMACIA SATELITE - BLOCO</option>
                    <option value="FARMACIA SATELITE - BLOCO - HL">FARMACIA SATELITE - BLOCO - HL</option>
                    <option value="FARMACIA SATELITE - BLOCO -HMP">FARMACIA SATELITE - BLOCO -HMP</option>
                    <option value="FARMACIA SATELITE - CTI">FARMACIA SATELITE - CTI</option>
                    <option value="FARMACIA SATELITE - CTI - HL">FARMACIA SATELITE - CTI - HL</option>
                    <option value="FARMACIA SATELITE - UNI - HMP">FARMACIA SATELITE - UNI - HMP</option>
                    <option value="FARMACIA UNIDADES INTERNACAO">FARMACIA UNIDADES INTERNACAO</option>
                    <option value="FATURAMENTO - HL">FATURAMENTO - HL</option>
                    <option value="FATURAMENTO - HMP">FATURAMENTO - HMP</option>
                    <option value="FINANCEIRO (CR,CP,REP)-ADM">FINANCEIRO (CR,CP,REP)-ADM</option>
                    <option value="FINANCEIRO (CR,CP,TES)">FINANCEIRO (CR,CP,TES)</option>
                    <option value="FISIOTERAPIA">FISIOTERAPIA</option>
                    <option value="FISIOTERAPIA - CTI/UCO - HL">FISIOTERAPIA - CTI/UCO - HL</option>
                    <option value="FISIOTERAPIA - HL">FISIOTERAPIA - HL</option>
                    <option value="FISIOTERAPIA - HMP">FISIOTERAPIA - HMP</option>
                    <option value="FONOAUDIOLOGIA">FONOAUDIOLOGIA</option>
                    <option value="FONOAUDIOLOGIA - HL">FONOAUDIOLOGIA - HL</option>
                    <option value="FONOAUDIOLOGIA - HMP">FONOAUDIOLOGIA - HMP</option>
                    <option value="FUND.EDUCACIONAL MARIO PENNA">FUND.EDUCACIONAL MARIO PENNA</option>
                    <option value="GER. DE SERVIÇOS - HL">GER. DE SERVIÇOS - HL</option>
                    <option value="GER. MARKETING E RELACI. - ADM">GER. MARKETING E RELACI. - ADM</option>
                    <option value="GERENCIA COM E CONVENIOS - ADM">GERENCIA COM E CONVENIOS - ADM</option>
                    <option value="GERENCIA DE ENFERMAGEM - HL">GERENCIA DE ENFERMAGEM - HL</option>
                    <option value="GESTAO AMBIENTAL - ADM">GESTAO AMBIENTAL - ADM</option>
                    <option value="GESTAO DE LEITOS - HL">GESTAO DE LEITOS - HL</option>
                    <option value="GOVERNANCA">GOVERNANCA</option>
                    <option value="HEMODINAMICA">HEMODINAMICA</option>
                    <option value="HEMODINÂMICA - HL">HEMODINÂMICA - HL</option>
                    <option value="HIGIENIZACAO - HL">HIGIENIZACAO - HL</option>
                    <option value="HIGIENIZACAO - HMP">HIGIENIZACAO - HMP</option>
                    <option value="HOSPITAL DIA - HL">HOSPITAL DIA - HL</option>
                    <option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                    <option value="HOTELARIA">HOTELARIA</option>
                    <option value="HOTELARIA - HL">HOTELARIA - HL</option>
                    <option value="IMUNOFENOTIPAGEM - HL">IMUNOFENOTIPAGEM - HL</option>
                    <option value="IODOTERAPIA">IODOTERAPIA</option>
                    <option value="IODOTERAPIA - HL">IODOTERAPIA - HL</option>
                    <option value="LANCHONETE - HL">LANCHONETE - HL</option>
                    <option value="LAVANDEIRA">LAVANDEIRA</option>
                    <option value="LEITO DIA">LEITO DIA</option>
                    <option value="LOGISTICA E SUPRIMENTOS - ADM">LOGISTICA E SUPRIMENTOS - ADM</option>
                    <option value="MAMOGRAFIA - HL">MAMOGRAFIA - HL</option>
                    <option value="MAMOGRAFIA - HMP">MAMOGRAFIA - HMP</option>
                    <option value="MANUT EQUIP BIOMEDICOS - HL">MANUT EQUIP BIOMEDICOS - HL</option>
                    <option value="MANUT EQUIP BIOMEDICOS - HMP">MANUT EQUIP BIOMEDICOS - HMP</option>
                    <option value="MANUTENCAO - HL">MANUTENCAO - HL</option>
                    <option value="MANUTENÇÃO - HL">MANUTENÇÃO - HL</option>
                    <option value="MANUTENCAO - HMP">MANUTENCAO - HMP</option>
                    <option value="MANUTENÇÃO - HMP">MANUTENÇÃO - HMP</option>
                    <option value="MANUTENCAO PREDIAL - HL">MANUTENCAO PREDIAL - HL</option>
                    <option value="MANUTENCAO PREDIAL - HMP">MANUTENCAO PREDIAL - HMP</option>
                    <option value="MARCACAO DE CONSULTAS - HL">MARCACAO DE CONSULTAS - HL</option>
                    <option value="MARKETING/CRC">MARKETING/CRC</option>
                    <option value="MEDIC CONTROLADOS - HL">MEDIC CONTROLADOS - HL</option>
                    <option value="MEDICINA NUCLEAR">MEDICINA NUCLEAR</option>
                    <option value="MEDICINA NUCLEAR - HL">MEDICINA NUCLEAR - HL</option>
                    <option value="METODOS GRAFICOS">METODOS GRAFICOS</option>
                    <option value="METODOS GRAFICOS - HL">METODOS GRAFICOS - HL</option>
                    <option value="MPT - TRANSITÓRIO">MPT - TRANSITÓRIO</option>
                    <option value="NAO OPERACIONAL">NAO OPERACIONAL</option>
                    <option value="NEFROLOGIA - HL">NEFROLOGIA - HL</option>
                    <option value="NUCLEO DE ENSINO E PESQUISA">NUCLEO DE ENSINO E PESQUISA</option>
                    <option value="NUCLEO DE GESTAO DE DOACOES">NUCLEO DE GESTAO DE DOACOES</option>
                    <option value="NUTRICAO CLINICA - HL">NUTRICAO CLINICA - HL</option>
                    <option value="OBRA DO ELEVADOR - HL">OBRA DO ELEVADOR - HL</option>
                    <option value="OBRAS - ADAP.COR.DIRET. - HL">OBRAS - ADAP.COR.DIRET. - HL</option>
                    <option value="OBRAS - AG. TRANSFUSIONAL - HL">OBRAS - AG. TRANSFUSIONAL - HL</option>
                    <option value="OBRAS - BLOCO CIRURGICO - HL">OBRAS - BLOCO CIRURGICO - HL</option>
                    <option value="OBRAS - BLOCO CIRURGICO - HMP">OBRAS - BLOCO CIRURGICO - HMP</option>
                    <option value="OBRAS - CASA DE APOIO - HL">OBRAS - CASA DE APOIO - HL</option>
                    <option value="OBRAS - CENTRAL AR COND. - HL">OBRAS - CENTRAL AR COND. - HL</option>
                    <option value="OBRAS - CTI - HL">OBRAS - CTI - HL</option>
                    <option value="OBRAS - CTI - HMP">OBRAS - CTI - HMP</option>
                    <option value="OBRAS - CTI/LABORATORIO - HL">OBRAS - CTI/LABORATORIO - HL</option>
                    <option value="OBRAS - EQUIPTO PET/CT">OBRAS - EQUIPTO PET/CT</option>
                    <option value="OBRAS - ESTAC/FACHAD - HL 2012">OBRAS - ESTAC/FACHAD - HL 2012</option>
                    <option value="OBRAS - ESTACIONAMENTO - HL">OBRAS - ESTACIONAMENTO - HL</option>
                    <option value="OBRAS - ESTACIONAMENTO - HMP">OBRAS - ESTACIONAMENTO - HMP</option>
                    <option value="OBRAS - FATURAMENTO - HL">OBRAS - FATURAMENTO - HL</option>
                    <option value="OBRAS - GERÊNCIA COM.CONVÊNIOS">OBRAS - GERÊNCIA COM.CONVÊNIOS</option>
                    <option value="OBRAS - GERÊNCIA COM.MARKETING">OBRAS - GERÊNCIA COM.MARKETING</option>
                    <option value="OBRAS - GOVERNANÇA - HL">OBRAS - GOVERNANÇA - HL</option>
                    <option value="OBRAS - HEMODINAMICA - HL">OBRAS - HEMODINAMICA - HL</option>
                    <option value="OBRAS - HMP QUIMIOTERAPIA - HL">OBRAS - HMP QUIMIOTERAPIA - HL</option>
                    <option value="OBRAS - HOSP MARIO PENNA 100%">OBRAS - HOSP MARIO PENNA 100%</option>
                    <option value="OBRAS - HOSPITAL DIA - HL">OBRAS - HOSPITAL DIA - HL</option>
                    <option value="OBRAS - MPT - M.G - GERADOR">OBRAS - MPT - M.G - GERADOR</option>
                    <option value="OBRAS - MPT - M.G - PRHL">OBRAS - MPT - M.G - PRHL</option>
                    <option value="OBRAS - NOVO MÁRIO PENNA 2014">OBRAS - NOVO MÁRIO PENNA 2014</option>
                    <option value="OBRAS - PA CONVENIO/PART. - HL">OBRAS - PA CONVENIO/PART. - HL</option>
                    <option value="OBRAS - PA SUS - HL">OBRAS - PA SUS - HL</option>
                    <option value="OBRAS - PAISAGISMO - HL 2014">OBRAS - PAISAGISMO - HL 2014</option>
                    <option value="OBRAS - PAT. CLINICA - HMP">OBRAS - PAT. CLINICA - HMP</option>
                    <option value="OBRAS - PET/CT - MANT.INTERNA">OBRAS - PET/CT - MANT.INTERNA</option>
                    <option value="OBRAS - POSTO 5 - HL">OBRAS - POSTO 5 - HL</option>
                    <option value="OBRAS - POSTO 6 - HL">OBRAS - POSTO 6 - HL</option>
                    <option value="OBRAS - PREDIO ANEXO">OBRAS - PREDIO ANEXO</option>
                    <option value="OBRAS - PRESIDÊNCIA">OBRAS - PRESIDÊNCIA</option>
                    <option value="OBRAS - PROJ.AD.ED.AT.C.ARQ HL">OBRAS - PROJ.AD.ED.AT.C.ARQ HL</option>
                    <option value="OBRAS - QUIMIOTERAPIA - HL">OBRAS - QUIMIOTERAPIA - HL</option>
                    <option value="OBRAS - RADIOL./MAMOGRAF. - HL">OBRAS - RADIOL./MAMOGRAF. - HL</option>
                    <option value="OBRAS - RADIOTERAPIA - HL">OBRAS - RADIOTERAPIA - HL</option>
                    <option value="OBRAS - RECEP. CONV/PART - HL">OBRAS - RECEP. CONV/PART - HL</option>
                    <option value="OBRAS - RECEPCAO SUS - HL">OBRAS - RECEPCAO SUS - HL</option>
                    <option value="OBRAS - SND - HL">OBRAS - SND - HL</option>
                    <option value="OBRAS - SUP.CENT.PESQ.ENSINO">OBRAS - SUP.CENT.PESQ.ENSINO</option>
                    <option value="OBRAS - SUPCOM">OBRAS - SUPCOM</option>
                    <option value="OBRAS - TELEMARKETING">OBRAS - TELEMARKETING</option>
                    <option value="OBRAS - TOMOGRAFIA - HL">OBRAS - TOMOGRAFIA - HL</option>
                    <option value="OBRAS - TRANSF. SEDE">OBRAS - TRANSF. SEDE</option>
                    <option value="OBRAS - TRANS.FARM.CENTRAL-HL">OBRAS - TRANS.FARM.CENTRAL-HL</option>
                    <option value="OBRAS - TRANSPLANTE MEDULA">OBRAS - TRANSPLANTE MEDULA</option>
                    <option value="OBRAS/INVESTIMENTOS - HL">OBRAS/INVESTIMENTOS - HL</option>
                    <option value="ONCOOP - COOPERATIVA MÉDICA">ONCOOP - COOPERATIVA MÉDICA</option>
                    <option value="P.A. CONVENIO PARTICULAR - HL">P.A. CONVENIO PARTICULAR - HL</option>
                    <option value="P.A. SUS - HL">P.A. SUS - HL</option>
                    <option value="PASTORAL">PASTORAL</option>
                    <option value="PATOLOGIA CLINICA - HL">PATOLOGIA CLINICA - HL</option>
                    <option value="PATOLOGIA CLINICA - HMP">PATOLOGIA CLINICA - HMP</option>
                    <option value="PET/CT - HL">PET/CT - HL</option>
                    <option value="PGQ - ADM">PGQ - ADM</option>
                    <option value="PGQ HMP">PGQ HMP</option>
                    <option value="PORTARIA - HL">PORTARIA - HL</option>
                    <option value="PORTARIA - HMP">PORTARIA - HMP</option>
                    <option value="POSTO 1">POSTO 1</option>
                    <option value="POSTO 1 - HL">POSTO 1 - HL</option>
                    <option value="POSTO 2">POSTO 2</option>
                    <option value="POSTO 2 - HL">POSTO 2 - HL</option>
                    <option value="POSTO 3">POSTO 3</option>
                    <option value="POSTO 3 - HL">POSTO 3 - HL</option>
                    <option value="POSTO 4">POSTO 4</option>
                    <option value="POSTO 4 - HL">POSTO 4 - HL</option>
                    <option value="POSTO 5">POSTO 5</option>
                    <option value="POSTO 5 - HL">POSTO 5 - HL</option>
                    <option value="POSTO 6">POSTO 6</option>
                    <option value="POSTO 6 - HL">POSTO 6 - HL</option>
                    <option value="PRE AUDITORIA DE ENF - HL">PRE AUDITORIA DE ENF - HL</option>
                    <option value="PRESIDENCIA">PRESIDENCIA</option>
                    <option value="PRESIDENCIA - ADM">PRESIDENCIA - ADM</option>
                    <option value="PRODUTIVO">PRODUTIVO</option>
                    <option value="PRODUTIVO - HL">PRODUTIVO - HL</option>
                    <option value="PRODUTIVO - HMP">PRODUTIVO - HMP</option>
                    <option value="PROJ. ASSOCIACAO MORAD. STA MA">PROJ. ASSOCIACAO MORAD. STA MA</option>
                    <option value="PROJ. ASSOCIACAO MORADORES SM">PROJ. ASSOCIACAO MORADORES SM</option>
                    <option value="PROJ. ESPORTE CLUBE STA MARI">PROJ. ESPORTE CLUBE STA MARI</option>
                    <option value="PROJ. ESPORTE CLUBE STA MARIA">PROJ. ESPORTE CLUBE STA MARIA</option>
                    <option value="PROJ. INTEGRACAO PELO ESPORTE">PROJ. INTEGRACAO PELO ESPORTE</option>
                    <option value="PROJETO CIDADANIA E ESPORTE">PROJETO CIDADANIA E ESPORTE</option>
                    <option value="PROJETO LED - HL">PROJETO LED - HL</option>
                    <option value="PROJETO PRONON - LARINGE">PROJETO PRONON - LARINGE</option>
                    <option value="PROJETO PRONON - MAMOGRAFIA">PROJETO PRONON - MAMOGRAFIA</option>
                    <option value="PROJETO PRONON - TMO">PROJETO PRONON - TMO</option>
                    <option value="PROJETO PRONON ULTRASSONOGRAFI">PROJETO PRONON ULTRASSONOGRAFI</option>
                    <option value="PROJETO VALE SOCIAL">PROJETO VALE SOCIAL</option>
                    <option value="PROJETOS EDUCACIONAIS">PROJETOS EDUCACIONAIS</option>
                    <option value="PROJETOS INSTITUCIONAIS - ADM">PROJETOS INSTITUCIONAIS - ADM</option>
                    <option value="PROJETOS PRONON - ADM">PROJETOS PRONON - ADM</option>
                    <option value="PROJETOS SOCIAIS">PROJETOS SOCIAIS</option>
                    <option value="PRONTO ATEND CONVE/PARTICULAR">PRONTO ATEND CONVE/PARTICULAR</option>
                    <option value="PRONTO ATENDIMENTO SUS">PRONTO ATENDIMENTO SUS</option>
                    <option value="PROVISÃO CONTÁBIL - HL">PROVISÃO CONTÁBIL - HL</option>
                    <option value="PSICOLOGIA">PSICOLOGIA</option>
                    <option value="PSICOLOGIA - HL">PSICOLOGIA - HL</option>
                    <option value="PSICOLOGIA - HMP">PSICOLOGIA - HMP</option>
                    <option value="QT CONVÊNIO">QT CONVÊNIO</option>
                    <option value="QT CONVÊNIO AUTORIZAÇAO">QT CONVÊNIO AUTORIZAÇAO</option>
                    <option value="QT_ENGERMAGEM_MOVDOC">QT_ENGERMAGEM_MOVDOC</option>
                    <option value="QT_FARMACIA_MOVDOC">QT_FARMACIA_MOVDOC</option>
                    <option value="QT_FATURAMENTO_MOVDOC">QT_FATURAMENTO_MOVDOC</option>
                    <option value="QT_RECEPÇÃO_MOVDOC">QT_RECEPÇÃO_MOVDOC</option>
                    <option value="QUIMIOTERAPIA - HL">QUIMIOTERAPIA - HL</option>
                    <option value="QUIMIOTERAPIA - HMP">QUIMIOTERAPIA - HMP</option>
                    <option value="RADIO CIDADE NOVA">RADIO CIDADE NOVA</option>
                    <option value="RADIOLOGIA - HL">RADIOLOGIA - HL</option>
                    <option value="RADIOLOGIA - HMP">RADIOLOGIA - HMP</option>
                    <option value="RADIOLOGIA/MAMOGRAFIA - HL">RADIOLOGIA/MAMOGRAFIA - HL</option>
                    <option value="RADIOLOGIA/MAMOGRAFIA - HMP">RADIOLOGIA/MAMOGRAFIA - HMP</option>
                    <option value="RADIOMOLDAGEM">RADIOMOLDAGEM</option>
                    <option value="RADIOMOLDAGEM - HL">RADIOMOLDAGEM - HL</option>
                    <option value="RADIOTERAPIA">RADIOTERAPIA</option>
                    <option value="RADIOTERAPIA - HL">RADIOTERAPIA - HL</option>
                    <option value="RECEITA NÃO OPERACIONAL">RECEITA NÃO OPERACIONAL</option>
                    <option value="RECEITA SUBVENC - SUS HL">RECEITA SUBVENC - SUS HL</option>
                    <option value="RECEITA SUBVENC - SUS HMP">RECEITA SUBVENC - SUS HMP</option>
                    <option value="RECEITAS TELEMARKETING">RECEITAS TELEMARKETING</option>
                    <option value="RECEPCAO - HMP">RECEPCAO - HMP</option>
                    <option value="RECEPCAO CONV/PART - HL">RECEPCAO CONV/PART - HL</option>
                    <option value="RECEPCAO SUS - HL">RECEPCAO SUS - HL</option>
                    <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
                    <option value="RECURSOS HUMANOS - ADM">RECURSOS HUMANOS - ADM</option>
                    <option value="RELAÇÕES INSTITUCIONAIS - ADM">RELAÇÕES INSTITUCIONAIS - ADM</option>
                    <option value="REPASSE MEDICO - ADM">REPASSE MEDICO - ADM</option>
                    <option value="RESIDENCIA MEDICA">RESIDENCIA MEDICA</option>
                    <option value="RESIDENCIA MEDICA - HMP">RESIDENCIA MEDICA - HMP</option>
                    <option value="RESSONANCIA - HL">RESSONANCIA - HL</option>
                    <option value="RESSONANCIA - HMP">RESSONANCIA - HMP</option>
                    <option value="RHC - REG HOSP CANCER">RHC - REG HOSP CANCER</option>
                    <option value="ROUPARIA - HL">ROUPARIA - HL</option>
                    <option value="ROUPARIA - HMP">ROUPARIA - HMP</option>
                    <option value="SAME - ARCHIVIO">SAME - ARCHIVIO</option>
                    <option value="SAME - ARQUIVO MEDICO - HL">SAME - ARQUIVO MEDICO - HL</option>
                    <option value="SAME - ARQUIVO MEDICO - HMP">SAME - ARQUIVO MEDICO - HMP</option>
                    <option value="SAME - HL">SAME - HL</option>
                    <option value="SAME - HMP">SAME - HMP</option>
                    <option value="SAME - MEMOVIP">SAME - MEMOVIP</option>
                    <option value="SCIH - HL">SCIH - HL</option>
                    <option value="SCIH - HMP">SCIH - HMP</option>
                    <option value="SEC.EXEC. DA PRESIDENCIA - ADM">SEC.EXEC. DA PRESIDENCIA - ADM</option>
                    <option value="SECRETARIADO - HL">SECRETARIADO - HL</option>
                    <option value="SECRETARIADO - HMP">SECRETARIADO - HMP</option>
                    <option value="SEGURANÇA - HL">SEGURANÇA - HL</option>
                    <option value="SEGURANCA - HMP">SEGURANCA - HMP</option>
                    <option value="SERV CONTR INFECCAO HOSPITALAR">SERV CONTR INFECCAO HOSPITALAR</option>
                    <option value="SERVICO SOCIAL - HL">SERVICO SOCIAL - HL</option>
                    <option value="SERVICO SOCIAL - HMP">SERVICO SOCIAL - HMP</option>
                    <option value="SESMT - ADM">SESMT - ADM</option>
                    <option value="SESMT - MEDICINA DO TRABALHO">SESMT - MEDICINA DO TRABALHO</option>
                    <option value="SND - HL">SND - HL</option>
                    <option value="SND - HMP">SND - HMP</option>
                    <option value="SND - NUTRIÇÃO DIETÉTICA - HL">SND - NUTRIÇÃO DIETÉTICA - HL</option>
                    <option value="SND - SERVICO NUTR DIET - HMP">SND - SERVICO NUTR DIET - HMP</option>
                    <option value="SOLICITACAO EXTERNA - HL">SOLICITACAO EXTERNA - HL</option>
                    <option value="SUP. ADMINISTRATIVA">SUP. ADMINISTRATIVA</option>
                    <option value="SUPCOM - ADM">SUPCOM - ADM</option>
                    <option value="SUPERINT ADMINISTRATIVA">SUPERINT ADMINISTRATIVA</option>
                    <option value="SUPERINTEND. FINANCEIRA - ADM">SUPERINTEND. FINANCEIRA - ADM</option>
                    <option value="SUPERINTEND. OPERACIONAL - ADM">SUPERINTEND. OPERACIONAL - ADM</option>
                    <option value="SUPERINTENDENCIA EXECUTI - ADM">SUPERINTENDENCIA EXECUTI - ADM</option>
                    <option value="SUPERINTENDENCIA FINANCEIRA">SUPERINTENDENCIA FINANCEIRA</option>
                    <option value="SUPERINTENDENCIA GERAL">SUPERINTENDENCIA GERAL</option>
                    <option value="SUPERINTENDENCIA MEDICA">SUPERINTENDENCIA MEDICA</option>
                    <option value="TELEFONIA">TELEFONIA</option>
                    <option value="TELEFONIA - TIT">TELEFONIA - TIT</option>
                    <option value="TELEMARKETING">TELEMARKETING</option>
                    <option value="TERAPIA OCUPACIONAL - HL">TERAPIA OCUPACIONAL - HL</option>
                    <option value="TESOURARIA - HL">TESOURARIA - HL</option>
                    <option value="TESOURARIA HL">TESOURARIA HL</option>
                    <option value="TI - TECNOLOGIA DA INFORMACAO">TI - TECNOLOGIA DA INFORMACAO</option>
                    <option value="TIC - TEC INFORM E COMUN - ADM">TIC - TEC INFORM E COMUN - ADM</option>
                    <option value="TIC - TEC INFORM E COMUN - HMP">TIC - TEC INFORM E COMUN - HMP</option>
                    <option value="TIT - TELEFONIA">TIT - TELEFONIA</option>
                    <option value="TOMOGRAFIA - HL">TOMOGRAFIA - HL</option>
                    <option value="TOMOGRAFIA - HMP">TOMOGRAFIA - HMP</option>
                    <option value="TRANSPLANTE MEDULA OSSEA - HL">TRANSPLANTE MEDULA OSSEA - HL</option>
                    <option value="TRANSPORTE">TRANSPORTE</option>
                    <option value="TRANSPORTE - ADM">TRANSPORTE - ADM</option>
                    <option value="UCI - UNID. CARD. INTEN - HL">UCI - UNID. CARD. INTEN - HL</option>
                    <option value="ULTRASONOGRAFIA - HL">ULTRASONOGRAFIA - HL</option>
                    <option value="ULTRASONOGRAIA- HMP">ULTRASONOGRAIA- HMP</option>
                    <option value="ULTRASSONOGRAFIA - HL">ULTRASSONOGRAFIA - HL</option>
                    <option value="ULTRASSONOGRAFIA - HMP">ULTRASSONOGRAFIA - HMP</option>
                    <option value="UN CUIDADOS POS-OPERATORIOS">UN CUIDADOS POS-OPERATORIOS</option>
                    <option value="UNIDADE CORONARIANA">UNIDADE CORONARIANA</option>
                    <option value="UNIDADE CUIDADOS INTERM. - HMP">UNIDADE CUIDADOS INTERM. - HMP</option>
                    <option value="UNIDADES DE INTERNACAO - HMP">UNIDADES DE INTERNACAO - HMP</option>
                    <option value="UNIDADES OPERACIONAIS">UNIDADES OPERACIONAIS</option>
                    <option value="UNID.DE ASSISTÊNCIA CIRÚRGICA">UNID.DE ASSISTÊNCIA CIRÚRGICA</option>
                    <option value="UPGQ - QUALIDADE">UPGQ - QUALIDADE</option>
                    <option value="VOLMAPE">VOLMAPE</option>
                </select> -->

                <label>* DESTINO</label>
                <select name="destino" id="destino">
                <option value="HOSPITAL LUXEMBURGO">HOSPITAL LUXEMBURGO</option>
                    <option value="HOSPITAL MARIO PENNA">HOSPITAL MARIO PENNA</option>
                    <option value="CASA DE APOIO">CASA DE APOIO</option>
                    <option value="ANEXO">ANEXO</option>
                    <option value="SEDE ADMISTRATIVA">SEDE ADMISTRATIVA</option>
                    <option value="OUTROS">OUTROS</option>                    
                </select>

                <label>ENDEREÇO DESTINO</label>
                <input name="enderecoDestino" id="enderecoDestino" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="APENAS PARA DESTINO: OUTROS">

                <label>EMPRESA / RESIDÊNCIA </label>
                <input name="empreDestino" id="empreDestino" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="INFORME A EMPRESA OU RESIDÊNCIA (PARA DESTINO: OUTROS)">
 

                <label>PONTO DE REFERENCIA</label>
                <input name="pontoReferencia" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);">

                <label> PROCURAR POR</label>
                <input name="procurarPor"  id="procurarPor" type="text" class="g" onkeyup="javascript:naoPermiteAcento(this);">

                <label>TELEFONE DESTINO</label>
                <input name="telefoneDestino" type="text" class="p" id="telefoneDestino">

                <label>* DATA</label>
                <input name="data" type="text" class="p" id="telefone" required onKeyPress="DataHora(event, this)" maxlength="10">

                <label>* HORÁRIO</label>
                <input name="horario" type="text" class="p" id="telefone" required onKeyPress="Hora(event, this)" maxlength="5">

                

                
                
                <label>* PROTOCOLAR</label>
                <select name="protocolar">
                	<option value="SIM">SIM</option>
                    <option value="NAO">NAO</option>
                    
                </select>

              

                <label>* OBSERVAÇÕES</label>
                <textarea name="obs" cols="10" rows="5" class="g" onkeyup="javascript:naoPermiteAcento(this);" placeholder="Seja o mais detalhista possivel" required></textarea>

                <label>ANEXO</label>
                <input name="anexo" type="file" class="g">

				
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