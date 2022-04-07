<?php
    session_start();   

    $adServer = "172.16.0.12";
	
    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldaprdn = 'fmp' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);


    if ($bind) {

       
        $filter="(sAMAccountName=$username)";
        $result = ldap_search($ldap,"dc=fmp,dc=local",$filter);
        ldap_sort($ldap,$result,"sn");
        $info = ldap_get_entries($ldap, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
           $_SESSION["nomeUsuario"] = $info[$i]["sn"][0]; 
           $_SESSION["cargo"] = $info[$i]["givenname"][0];
           $_SESSION["usuario"] = $_POST['username'];
          
        }
        @ldap_close($ldap);

        ?>
                    <script charset="utf-8">
                                       location.href="../visao/painelTransporte.php";
                    </script>
                    <?php
                    
    } else {
        ?>
                    <script charset="utf-8">
                     alert("Usuario ou senha incorretos!");
                     location.href="../visao/acessoUser.php";
                    </script>
                   <?php
    }


 ?> 