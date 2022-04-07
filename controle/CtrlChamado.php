<?php
session_start();
require_once('../modelo/ChamadoDAO.php');




function CRUDChamado(&$msg_crud)
{
    
    $dao = new ChamadoDAO();
    
    
     $nome                = $_POST['nome'];
     $setor               = $_POST['setor'];
     $telefone            = $_POST['telefone'];
     $email               = $_POST['email'];
     $descricao           = $_POST['descricao'];
     $idTipo              = $_GET['idTipo'];
  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
   
    
    if ($_GET['CRUD'] == "save") {

           $dao-> inserirChamado($nome, $setor, $telefone, $email, $descricao,$idTipo);


        			    





        
    } 


/*

    else if ($_GET['CRUD'] == "editar") {

            $idUsuario = $_SESSION["idUsuario"];
            $idEquipamento = $_GET["idEquipamento"];

            $dao2   = new EquipamentoDAO();
            $dao2->atualizarEquipamentos($idEquipamento,$idTipo,$idFornecedor,$ptr1,$ptr2,$ptr3,$modelo,$idMarca,$serial,$obs,$status,$contrato,$perifericos);

            $dao   = new EquipamentoDAO();
            $dao->inserirDadosEquipamento($idEquipamento, $idUsuario, $idUnidade, $idSetor, $usuarioResponsavel, $hostname, $processador, $memoria, $hd,$gerencia, $idSetorResp,$classificacao,$dtAquisicao,$rede);



                                
                   
                                $msg_crud = '<div class="alert alert-success" role="alert">Dados do equipamento atualizado com <strong>sucesso!</strong></div><br><a href="termoTransferencia.php?idEquipamento='.$idEquipamento.'"><button class="btn btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i> Clique aqui para imprimir o termo de transferencia</button></a>';


        
    } 

    else if ($_GET['CRUD'] == "excluir") {

            
            $idEquipamento = $_GET["idEquipamento"];
            $dao   = new EquipamentoDAO();
            $dao->excluirEquipamento($idEquipamento);



                                
                   
                                $msg_crud = '<div class="alert alert-success" role="alert">Dados do equipamento atualizado com <strong>sucesso!</strong></div><br><a href="termoTransferencia.php?idEquipamento='.$idEquipamento.'"><button class="btn btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i> Clique aqui para imprimir o termo de transferencia</button></a>';


        
    } 

*/
    
    $_GET['CRUD'] = null;
    
}




?>
             

