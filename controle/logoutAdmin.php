<?php
     session_start();
     //limpa sess�o
     
     $_SESSION["matricula"]=NULL;
     $_SESSION["nome"]=NULL;
     
     
     session_destroy(); // destruo a sess�o
     ?>
         <script charset="utf-8">
           alert ("Desconectado com sucesso !");
           location.href="../visao/";
         </script>
