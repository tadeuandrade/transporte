<?php
     session_start();
     //limpa sessão
     
     $_SESSION["matricula"]=NULL;
     $_SESSION["nome"]=NULL;
     
     
     session_destroy(); // destruo a sessão
     ?>
         <script charset="utf-8">
           alert ("Desconectado com sucesso !");
           location.href="../visao/acessoUser.php";
         </script>
