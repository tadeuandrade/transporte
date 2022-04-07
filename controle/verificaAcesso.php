<?php
     if(empty($_SESSION["matricula"]))
        {
        session_destroy(); // destruo a sess�o
        ?>
                <script>
                        alert("Favor logar no Sistema teste!");
                        location.href="../visao/index.php";
                </script>
        <?php
        }
?>
