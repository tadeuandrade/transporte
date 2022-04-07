	<?php
    	require_once('../modelo/RelatorioDAO.php');
        require_once('../modelo/Chamado.php');
        
        $dtInicial = $_GET["dtInicial"];
        $dtFinal = $_GET["dtFinal"];

        $d=explode("/",$dtInicial);
        $dtInicial=$d[2]."-".$d[1]."-".$d[0];

        $d=explode("/",$dtFinal);
        $dtFinal=$d[2]."-".$d[1]."-".$d[0];


        $dao = new ChamadoDAO();
        $lista = $dao-> quantTotalChamadosFechados($dtInicial, $dtFinal);

         if($lista)
         {

                foreach($lista as $item)
                {
                $quantTotalChamadosFechados = $item -> getIdChamado();
                }
    	
    	}
    	

