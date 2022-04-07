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
        $lista = $dao-> listaChamadoMes($dtInicial, $dtFinal);

         if($lista)
         {
           echo ' <table width="100%" border="1">
                  <tr>
                    <td bgcolor="#CCCCCC"><div align="center">CHAMADO</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">USUARIO</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">TITULO</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">DATA</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">STATUS</div></td>
                    <td bgcolor="#CCCCCC"><div align="center">FECHADO EM</div></td>
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
                $dataFechamento = $item -> getDataFechamento();

                echo '<tr>
                          <td><div align="center">'.$idChamados.'</div></td>
                          <td><div align="center">'.$usuario.'</div></td>
                          <td><div align="center">'.$titulo.'</div></td>
                          <td><div align="center">'.$data.'</div></td>
                          <td><div align="center">'.$status.'</div></td>
                          <td><div align="center">'.$dataFechamento.'</div></td>
                          <td><div align="center">'.$dias.'</div></td>
                          <td><div align="center">'.$responsavel.'</div></td>
                      </tr>';
                }
           echo '
                </table> ';     
        
        }
    	

