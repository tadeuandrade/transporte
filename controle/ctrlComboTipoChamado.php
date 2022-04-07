<?php
	require_once('../modelo/ChamadoDAO.php');
	require_once('../modelo/Chamado.php');
	
	$daoChamado = new ChamadoDAO();
	$lista = $daoChamado -> getComboTipoChamados();
	
	if ($lista) {
		foreach($lista as $item) {
			$tipo = $item -> getIdTipo();
			$fila="";
			if($tipo==1){
					$fila="Suporte ao computador";			
			}else if($tipo==2){
					$fila="Suporte ao MV Sistemas";					
			}else if($tipo==3){
					$fila="Suporte a internet";
			}else if($tipo==4){
					$fila="Suporte a impressoras";
			}else if($tipo==5){
					$fila="Suporte ao sistemas TOTVS";
			}else if($tipo==6){
					$fila="Suporte a telefonia";
			}else if($tipo==7){
					$fila="Suporte ao sistema interact";
			}else{
				break;
			}
				echo '<option value="'.$tipo.'">'.$fila.'</option>';		
			

		};
	};
	
?>
