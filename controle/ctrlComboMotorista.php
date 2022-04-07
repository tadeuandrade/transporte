<?php
	require_once('../modelo/MotoristaDAO.php');
	require_once('../modelo/Motorista.php');
	
	$daoMotorista = new MotoristaDAO();
	$lista = $daoMotorista -> getComboMotoristas();
	
	if ($lista) {
		foreach($lista as $item) {
			$idMotorista = $item -> getIdMotorista();
			$nome = $item -> getNome();
			
			echo '<option value="'.$idMotorista.'">'.$nome.'</option>';

		};
	};
?>
