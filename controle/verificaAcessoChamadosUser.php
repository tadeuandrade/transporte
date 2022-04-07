<?php
     if(empty($_SESSION["usuario"]) or $_GET["user"]<>$_SESSION["usuario"])
        {
        session_destroy(); // destruo a sessão
        ?>
                <script>
                        alert("Favor logar no Sistema!");
                        location.href="../visao/index.php";
                </script>
        <?php
        }
?>
