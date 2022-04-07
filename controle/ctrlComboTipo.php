<?php
	require_once('../modelo/ChamadoDAO.php');
	require_once('../modelo/Chamado.php');
	
	$daoChamado = new ChamadoDAO();
	$lista = $daoChamado -> getComboTipoChamados();
	
	if ($lista) {
		foreach($lista as $item) {
			$idTipo = $item -> getidTipo();
			
			echo '<option value="'.$idTipo.'">'.$idTipo.'</option>';

		};
	};
?>
