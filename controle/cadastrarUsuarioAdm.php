<?php

  session_start();
  require_once('../modelo/UsuarioDAO.php');
  require_once('../modelo/Usuario.php');


  	 $nome = $_POST['nome'];
     $setor = $_POST['setor'];
     $email = $_POST['email'];
     $matricula = $_POST['matricula'];
	   $senha = $_POST['senha'];

                        
                        $dao = new UsuarioDAO();
                        if($dao-> inserirUsuario($nome, $setor, $email, $matricula, $senha))
                        {

              ?>
                           <script charset="utf-8">
                            location.href="../visao/usuarioCadastroSucesso.php";
                           </script>
                         <?php

                        } else {
                            ?>
                              <script charset="utf-8">
                                      alert("Erro ao cadastrar ! Repita novamente a operacao.")
                                      location.href="../visao/cadastroUsuario.php";
                              </script>
                            <?php
                           
                           }



