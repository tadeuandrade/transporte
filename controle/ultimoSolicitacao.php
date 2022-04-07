	<?php

    	  require_once('../modelo/SolicitacaoDAO.php');
        require_once('../modelo/Solicitacao.php');
        


        $dao = new SolicitacaoDAO();
        $lista = $dao-> getUltimaSolicitacao();

         if($lista)
         {

                foreach($lista as $item)
                {
                $idSolicitacoes = $item -> getIdSolicitacoes();
      }
    	
    	}
    	else {
                    echo '' ;
                           }

