<?php
  require_once('../modelo/FuncionarioDAO.php');
  require_once('../modelo/Funcionario.php');


    $nome = strtoupper($_POST['nome']);
    $matricula = $_POST['matricula'];
    $cdSetor = $_POST['cdSetor'];
    
    $dao = new FuncionarioDAO();
    if($dao-> inserirFuncionario($matricula, $nome, $cdSetor)){

    ?>
        <script charset="utf-8">
          location.href="../visao/cadastroUsuario.php";
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



