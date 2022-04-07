<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
require_once('../modelo/SolicitacaoDAO.php');
require_once('../modelo/Solicitacao.php');

//$idTipo = $_GET["idTipo"]; 
$idSolicitacoes = $_GET['idSolicitacoes'];

$dao = new SolicitacaoDAO();
// $anexo_link= utf8_encode($anexo);

$lista = $dao-> getInformacoes($idSolicitacoes);
if($lista)
{
foreach($lista as $item)
       {

              $idSolicitacoes = $item-> getIdSolicitacoes();
              $empresa = $item-> getEmpresa();
              $nome = $item-> getNome();
              $telefone = $item-> getTelefone();
              $origem = $item-> getOrigem();
              $descricao = $item-> getDescricao();
              $empreOrigem = $item-> getEmpreOrigem();
              $destino  = $item-> getDestino();
              $empreDestino = $item-> getEmpreDestino();
              $endereco = $item-> getEndereco();
              $pontoReferencia = $item-> getPontoReferencia();
              $telefoneDestino = $item-> getTelefoneDestino();
              $data = $item-> getData();
              $horario = $item-> getHorario();
              $descricao = $item-> getDescricao();
              $moto = $item-> getMoto();
              $anexo = $item-> getAnexo();
              $recebido = $item-> getRecebido();
              $notaFiscal = $item-> getNotaFiscal();


              $data = $item -> getData();
              $horario = $item -> getHorario();
              $status = $item -> getStatus();

              $paciente = $item -> getPaciente();

       echo '<div>';
              echo '<strong>SOLICITAÇÃO:</strong> '.$idSolicitacoes.'<BR>';
              echo '<strong>EMPRESA:</strong> '.$empresa.'/ <strong>NOME:</strong> '.$nome.'<BR>';
              echo '<strong>TELEFONE:</strong> '.$telefone.'<BR>'; 
              echo '<strong>ORIGEM:</strong> '.$origem.' - <br><strong>SETOR:    </strong> '.$descricao.'<BR>';
              echo '<strong>EMPRESA / RESIDÊNCIA: </strong> '.$empreOrigem.'<BR>';
              echo '<strong>DESTINO:</strong> '.$destino.'<br><strong>EMPRESA / RESIDÊNCIA:</strong>'.$empreDestino.'<BR>';
              echo '<strong>ENDEREÇO:</strong> '.$endereco.'- <strong>PONTO DE REFERENCIA:</strong> '.$pontoReferencia.'<BR>';
              echo '<strong>TELEFONE DESTINO:</strong> '.$telefoneDestino.'<BR>';
              echo '<strong>DATA / HORA:</strong> '.$data.'/ '.$horario.'<BR>';
              echo '<strong>DESCRIÇÃO:</strong> '.$descricao.'<BR>';
              echo '<strong>PODE SER MOTO:</strong> '.$moto.'<br>';
              echo '<strong>ANEXO: </STRONG><a href="../visao/pasta_salvar_arq/'.utf8_encode($anexo).'" target="_blank" style="text-decoration: none;"> '.utf8_encode($anexo).'</a>';
       echo '</div>';
   }
}
    	

                           










    