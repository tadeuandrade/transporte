	<?php
    	  require_once('../modelo/ChamadoDAO.php');
        require_once('../modelo/Chamado.php');
        


        $dao = new ChamadoDAO();
        $lista = $dao-> getUltimoChamado();

         if($lista)
         {

                foreach($lista as $item)
                {
                $idChamado = $item -> getIdChamado();
        				$nome = $item -> getNome();
        				$setor = $item -> getSetor();
        				$telefone = $item -> getTelefone();
        				$descricao = $item -> getDescricao();
        				$DATA = $item -> getData();
        				$STATUS = $item -> getStatus();
        				$idUsuario = $item -> getIdUsuario();
        				$idTipo = $item -> getIdtipo();





				
				$data_brasil = date('d/m/Y', strtotime($DATA));
      }
    	
    	}
    	else {
                    echo '' ;
                           }

