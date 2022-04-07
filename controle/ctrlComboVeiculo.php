<?php
	require_once('../modelo/VeiculoDAO.php');
	require_once('../modelo/Veiculo.php');
	
	$daoVeiculo = new VeiculoDAO();
	$lista = $daoVeiculo -> getComboVeiculos();
	
	if ($lista) {
		foreach($lista as $item) {
			$idVeiculo = $item -> getIdVeiculo();
			$tipo 	   = $item -> getTipo();
			$placa 	   = $item -> getPlaca();
			$lugares   = $item -> getLugares();

			
			echo '<option value="'.$idVeiculo.'">'.$tipo.' - '.$placa.'</option>';

		};
	};
?>
