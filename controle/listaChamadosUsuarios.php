	<?php
    	  require_once('../modelo/ChamadoDAO.php');
        require_once('../modelo/Chamado.php');
        
        $matricula = $_GET["matricula"]; 

        $dao = new ChamadoDAO();
        $lista = $dao-> listaChamadosUsuarios($matricula);

         if($lista)
         {

            echo '<table class="table">
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

                        if ($STATUS == 'ABERTO'){

                            echo '<tr>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$idChamado.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$nome.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$titulo.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$unidade.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$setor.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$telefone.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$data_brasil.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$responsavel.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$STATUS.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center"><a href="atenderChamado.php?idChamado='.$idChamado.'"><i class="glyphicon glyphicon-pencil"></i></a></div></td>
                                  </tr>';

                        }
                        else if ($STATUS == 'AGUARDANDO CLIENTE'){
                            echo '<tr>
                                    <td bgcolor="#CC99CC"><div align="center">'.$idChamado.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$nome.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$titulo.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$unidade.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$setor.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$telefone.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$data_brasil.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$responsavel.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center">'.$STATUS.'</div></td>
                                    <td bgcolor="#CC99CC"><div align="center"><a href="atenderChamado.php?idChamado='.$idChamado.'"><i class="glyphicon glyphicon-pencil"></i></a></div></td>
                                  </tr>';



                        }
                        else if ($STATUS == 'AGUARDANDO TERCEIROS'){

                            echo '<tr>
                                    <td bgcolor="#66CC99"><div align="center">'.$idChamado.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$nome.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$titulo.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$unidade.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$setor.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$telefone.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$data_brasil.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$responsavel.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center">'.$STATUS.'</div></td>
                                    <td bgcolor="#66CC99"><div align="center"><a href="atenderChamado.php?idChamado='.$idChamado.'"><i class="glyphicon glyphicon-pencil"></i></a></div></td>
                                  </tr>';
                    
                        }

                        else if ($STATUS == 'AGENDADO'){

                            echo '<tr>
                                    <td bgcolor="#99CCFF"><div align="center">'.$idChamado.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$nome.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$titulo.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$unidade.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$setor.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$telefone.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$data_brasil.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$responsavel.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center">'.$STATUS.'</div></td>
                                    <td bgcolor="#99CCFF"><div align="center"><a href="atenderChamado.php?idChamado='.$idChamado.'"><i class="glyphicon glyphicon-pencil"></i></a></div></td>
                                  </tr>';
                    
                        }

                        else {

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

                       

                





				
				
      }

      echo ' </table>';
    	
    	}
    	else {
                    echo 'Você não possui chamados nesse momento!' ;
                           }

