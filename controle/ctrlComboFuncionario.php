<?php
    session_start();
    require_once('../modelo/FuncionarioDAO.php');
    require_once('../modelo/Funcionario.php');

	$dao = new FuncionarioDAO();
	$lista = $dao->getFuncionarios();

	if($lista){
	foreach($lista as $item){
		$idFuncionario = $item -> getIdFuncionario();
		$nome = $item-> getNome();
		$matricula = $item-> getMatricula();
		echo '<option value="'.$matricula.' - '.$nome.'">'.$matricula. ' - ' .$nome.'</option>';
	}
}
