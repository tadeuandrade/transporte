<?php
  session_start();
  require_once('../modelo/UsuarioDAO.php');
  require_once('../modelo/Usuario.php');


  $dao = new UsuarioDAO();
  $matricula = $_POST['matricula'];
  $senha = $_POST['senha'];
  
  $usuario = $dao-> verificarLogin ($matricula,$senha);
             if($usuario)
             {
  		    		$matricula = $usuario->getMatricula();
  					  $nome = $usuario->getNome();
  					  $email = $usuario->getEmail();
  		    		$acesso = $usuario->getAcesso();
                    
              
		    		$_SESSION["matricula"]= $matricula;
            $_SESSION["nome"]=$nome;
					  $_SESSION["email"]=$email;
					
					if ($acesso == 'admin'){
					?>
                    <script charset="utf-8">
                                       location.href="../visao/adminTransporte.php";
                    </script>
                    <?php
					}
					else {
					?>
                    <script charset="utf-8">
                                       location.href="../visao/adminTransporte.php";
                    </script>
                    <?php
					}
                    
                    
             }else{
                   ?>
                    <script charset="utf-8">
                     alert("Usuario ou senha incorretos!");
                     //location.href="../visao/index.php";
                    </script>
                   <?php
                  }
             
