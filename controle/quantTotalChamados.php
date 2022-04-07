	<?php
    	  require_once('../modelo/RelatorioDAO.php');
        require_once('../modelo/Chamado.php');
        
        $idTipo = $_GET["idTipo"]; 

        $dao = new ChamadoDAO();
        $lista = $dao-> listaChamados($idTipo);

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
                        $unidade = $item -> getUnidade();
                        $responsavel = $item -> getEmail();
                        $titulo = $item -> getTitulo();

                        $data_brasil = date('d/m/Y H:i:s', strtotime($DATA));

                        




                
                
      }
    	
    	}
    	else {
                    echo '' ;
                           }

