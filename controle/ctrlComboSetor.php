<?php
include_once('../modelo/Setor.php');
include_once('../modelo/SetorDAO.php');

$dao = new SetorDAO();
$lista = $dao-> getComboSetor();

if($lista){
  foreach($lista as $item){
    $cdSetor = $item-> getCdSetor();
    $nmSetor = $item-> getNmSetor();
    $nmSetor = utf8_decode($nmSetor);
    echo '<option value="'.$cdSetor.'">'.$nmSetor.'</option>';
  }	
}

