<?php
     if(empty($_SESSION["matricula"]) or $_GET["matricula"]<>$_SESSION["matricula"])
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
