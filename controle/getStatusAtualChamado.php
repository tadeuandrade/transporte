	<?php
    	require_once('../modelo/RelatorioDAO.php');
        require_once('../modelo/Chamado.php');
        
      


        $dao = new ChamadoDAO();
        $lista = $dao-> statusAtualChamados();

         if($lista)
         {
           echo ' <table width="100%" border="1">
                  <tr>
                    <td bgcolor="#CCCCCC"><div align="center">STATUS</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">QUANTIDADE</div></td>
                  </tr>';
                foreach($lista as $item)
                {
                $qtdStatus = $item -> getIdChamado();
                $status = $item -> getStatus();

                echo '<tr>
                          <td><div align="center">'.$status.'</div></td>
                          <td><div align="center">'.$qtdStatus.'</div></td>
                      </tr>';
                }
           echo '
                </table> ';     
    	
    	}

        echo '<strong> Status dos chamados na data de hoje - Equipe Infraestrutura: </strong>';


        $dao2 = new ChamadoDAO();
        $lista = $dao2-> statusAtualChamadosInfra();

         if($lista)
         {
           echo ' <table width="100%" border="1">
                  <tr>
                    <td bgcolor="#CCCCCC"><div align="center">STATUS</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">QUANTIDADE</div></td>
                  </tr>';
                foreach($lista as $item)
                {
                $qtdStatus = $item -> getIdChamado();
                $status = $item -> getStatus();

                echo '<tr>
                          <td><div align="center">'.$status.'</div></td>
                          <td><div align="center">'.$qtdStatus.'</div></td>
                      </tr>';
                }
           echo '
                </table> ';     
        
        }

         echo '<strong> Status dos chamados na data de hoje - Equipe Sistemas: </strong>';


        $dao3 = new ChamadoDAO();
        $lista = $dao3-> statusAtualChamadosSistemas();

         if($lista)
         {
           echo ' <table width="100%" border="1">
                  <tr>
                    <td bgcolor="#CCCCCC"><div align="center">STATUS</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">QUANTIDADE</div></td>
                  </tr>';
                foreach($lista as $item)
                {
                $qtdStatus = $item -> getIdChamado();
                $status = $item -> getStatus();

                echo '<tr>
                          <td><div align="center">'.$status.'</div></td>
                          <td><div align="center">'.$qtdStatus.'</div></td>
                      </tr>';

                      
                }
           echo '
                </table> ';     
        
        }

        echo '<strong> Chamados - Por dias aberto </strong>';

        $dao4 = new ChamadoDAO();
        $lista = $dao4-> diasChamadosAbertos();

         if($lista)
         {
           echo ' <table width="100%" border="1">
                  <tr>
                    <td bgcolor="#CCCCCC"><div align="center">CHAMADO</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">USUARIO</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">TITULO</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">DATA</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">STATUS</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">DIAS ABERTOS</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">RESPONAVEL</div></td>
                  </tr>';
                foreach($lista as $item)
                {
                


                $idChamados = $item -> getIdChamado();
                $usuario = $item -> getNome();
                $titulo = $item -> getTitulo();
                $data = $item -> getData();
                $status = $item -> getStatus();
                $dias = $item -> getUnidade();
                $responsavel = $item -> getIdUsuario();

                echo '<tr>
                          <td><div align="center">'.$idChamados.'</div></td>
                          <td><div align="center">'.$usuario.'</div></td>
                          <td><div align="center">'.$titulo.'</div></td>
                          <td><div align="center">'.$data.'</div></td>
                          <td><div align="center">'.$status.'</div></td>
                          <td><div align="center">'.$dias.'</div></td>
                          <td><div align="center">'.$responsavel.'</div></td>
                      </tr>';
                }
           echo '
                </table> ';     
        
        }
    	

