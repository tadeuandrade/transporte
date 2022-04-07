<?php
	require_once('../modelo/UsuarioDAO.php');
	require_once('../modelo/Usuario.php');
	
	$daoUsuario = new UsuarioDAO();
	$lista = $daoUsuario -> getComboUsuarios();
	
	if ($lista) {
		foreach($lista as $item) {
			$matricula = $item -> getMatricula();
			$nome = $item -> getNome();
			
			echo '<option value="'.$matricula.'">'.$nome.'</option>';

		};
	};
?>
