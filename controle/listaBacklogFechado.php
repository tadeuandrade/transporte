	<?php
    	  require_once('../modelo/ChamadoDAO.php');
        require_once('../modelo/Chamado.php');
        
        $mes = $_GET["mes"]; 

        $dao = new ChamadoDAO();
        $lista = $dao-> backlogMensalFechamento($mes);

         if($lista)
         {

            echo '<table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Chamado</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Usuario</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Setor</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Telefone</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Responsavel</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Status</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Data</span></div></th>
                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1"></span></div></th>

                      <th scope="col" bgcolor="#000"><div align="center"><span class="style1">Fechado</span></div></th>
                    </tr>
                  </thead>';
                foreach($lista as $item)
                {
                $idChamado = $item -> getIdChamado();
                        $nome = $item -> getNome();
                        $setor = $item -> getSetor();
                        $telefone = $item -> getTelefone();
                        $DATA = $item -> getData();
                        $STATUS = $item -> getStatus();
                        $idUsuario = $item -> getIdUsuario();

                        $dataFechamento = $item -> getDataFechamento();

                        $data_brasil = date('d/m/Y H:i:s', strtotime($DATA));
                        $data_brasil_fecha = date('d/m/Y H:i:s', strtotime($dataFechamento));



                        

                        

                            echo '<tr>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$idChamado.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$nome.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$setor.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$telefone.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$idUsuario.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$STATUS.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$data_brasil.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$responsavel.'</div></td>
                                    <td bgcolor="#FFFFFF"><div align="center">'.$data_brasil_fecha.'</div></td>
                                  </tr>';

                       
                       

                





				
				
      }

      echo ' </table>';
    	
    	}
    	else {
                    echo 'Não possui chamado fechado até o momento!' ;
                           }

