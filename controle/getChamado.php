	<?php
    	  require_once('../modelo/ChamadoDAO.php');
          require_once('../modelo/Chamado.php');
        
        $idChamado = $_GET["idChamado"];


        $dao = new ChamadoDAO();
        $lista = $dao-> getChamado($idChamado);

         if($lista)
         {

                foreach($lista as $item)
                {
                $idChamado = $item -> getIdChamado();
        				$nome_usuario = $item -> getNome();
        				$setor = $item -> getSetor();
        				$telefone = $item -> getTelefone();
        				$descricao = $item -> getDescricao();
        				$DATA = $item -> getData();
        				$STATUS = $item -> getStatus();
        				$idUsuario = $item -> getIdUsuario();
        				$idTipo = $item -> getIdtipo();
                $unidade = $item -> getUnidade();
                $acao = $item -> getAcao();
                $email = $item -> getEmail();
				
				
				if($idTipo==1){
					$fila="Suporte ao computador";			
			}else if($idTipo==2){
					$fila="Suporte ao MV Sistemas";					
			}else if($idTipo==3){
					$fila="Suporte a internet";
			}else if($idTipo==4){
					$fila="Suporte a impressoras";
			}else if($idTipo==5){
					$fila="Suporte ao sistemas TOTVS";
			}else if($idTipo==6){
					$fila="Suporte a telefonia";
			}else if($idTipo==7){
					$fila="Suporte ao sistema interact";
			}else{
				break;
			}





				
				$data_brasil = date('d/m/Y', strtotime($DATA));
      }
    	
    	}
    	else {
                    echo '' ;
                           }

