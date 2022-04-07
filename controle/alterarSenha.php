<?php

  session_start();
  require_once('../modelo/UsuarioDAO.php');
  require_once('../modelo/Usuario.php');

  $matricula = $_POST['matricula'];
  $senha = $_POST['senha'];

                    
    $dao = new UsuarioDAO();
    if($dao-> updateSenha($matricula, $senha)){

      ?>
        <script charset="utf-8">
          location.href="../visao/index.php";
        </script>
      <?php
    } 


