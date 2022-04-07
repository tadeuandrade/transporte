<?php

  session_start();
  require_once('../modelo/ChamadoDAO.php');
  require_once('../modelo/Chamado.php');


  	$nome      = $_POST['nome'];
	  $setor     = $_POST['setor'];
    $telefone  = $_POST['telefone'];
    $email     = $_POST['email'];
	  $descricao = $_POST['descricao'];
	  $idTipo    = $_POST['idTipo'];
    $unidade   = $_POST['unidade'];
    $titulo    = $_POST['titulo'];
    $relator   = $_SESSION["matricula"];
    
    $descricao = str_replace("\"", "",$descricao);
    
          
                 

                        $dao = new ChamadoDAO();
                        if($dao-> inserirChamado($nome, $setor, $telefone, $email, $descricao,$idTipo, $unidade, $titulo, $relator))
                        {

							?>
                           <script charset="utf-8">
                            location.href="../visao/chamadoSucessoAdmin.php";
                           </script>
                         <?php

                        } else {
                            ?>
                              <script charset="utf-8">
                                      alert("Erro ao cadastrar ! Repita novamente a operacao.")
                                      //location.href="../views/cadastroBolsa.php";
                              </script>
                            <?php
                           
                           }

