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
    $status    = $_POST['status'];
    $acao      = $_POST['acao'];
    $idChamado = $_GET['idChamado'];
    $idUsuario = $_POST['idUsuario'];
    $unidade   = $_POST['unidade'];

    $descricao = str_replace("\"", "",$descricao);
    $descricao = str_replace("'", "",$descricao);
    $descricao = str_replace("%", "",$descricao);
    
          
                 

                        $dao = new ChamadoDAO();
                        if($dao-> atualizarChamado($nome,$setor,$idTipo,$telefone,$email,$descricao,$status,$acao,$idChamado,$idUsuario,$unidade))
                        {

							?>
                           <script charset="utf-8">
                            location.href="../visao/atenderChamadoSucesso.php?idChamado=<?php echo $idChamado?>";
                           </script>
                         <?php

                        } else {
                            ?>
                              <script charset="utf-8">
                                      alert("Erro ao cadastrar ! Repita novamente a operacao.")
                                      location.href="../visao/atenderChamado.php?idChamado=<?php echo $idChamado?>";
                              </script>
                            <?php
                           
                           }

