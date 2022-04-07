	<?php
    	  require_once('../modelo/ChamadoDAO.php');
        require_once('../modelo/Chamado.php');
        
        $matricula = $_GET["matricula"]; 

        $dao = new ChamadoDAO();
        $lista = $dao-> listaChamadosUsuariosFechado($matricula);

         if($lista)
         {

            echo '<BR><strong>CHAMADOS FECHADOS:</strong><BR>
            		<table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Chamado</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Usuario</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Titulo</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Unidade</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Setor</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Telefone</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Data</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Responsavel</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Status</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Visualizar</span></div></th>
                    </tr>
                  </thead>';
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

                        

                       

                           echo '<tr>
                                    <td><div align="center">'.$idChamado.'</div></td>
                                    <td><div align="center">'.$nome.'</div></td>
                                    <td><div align="center">'.$titulo.'</div></td>
                                    <td><div align="center">'.$unidade.'</div></td>
                                    <td><div align="center">'.$setor.'</div></td>
                                    <td><div align="center">'.$telefone.'</div></td>
                                    <td><div align="center">'.$data_brasil.'</div></td>
                                    <td><div align="center">'.$responsavel.'</div></td>
                                    <td><div align="center">'.$STATUS.'</div></td>
                                    <td><div align="center"><a href="atenderChamado.php?idChamado='.$idChamado.'"><i class="glyphicon glyphicon-pencil"></i></a></div></td>
                                  </tr>' ;
                        

                       

                





				
				
      }

      echo ' </table>';
    	
    	}
    	else {
                    echo 'Você não possui chamados nesse momento!' ;
                           }

