<?php
	require_once('../modelo/MotoristaDAO.php');
	require_once('../modelo/Motorista.php');


	$idSolicitacoes = $_GET['idSolicitacoes'];
	$daoMotorista = new MotoristaDAO();
	$lista = $daoMotorista -> getComboMotoristasDoChamado($idSolicitacoes);
	
	if ($lista) {
		foreach($lista as $item) {
			$idMotorista = $item -> getIdMotorista();
			$nome = $item -> getNome();
			
			echo '<option value="'.$idMotorista.'">'.$nome.'</option>';

		};
	};
?>
