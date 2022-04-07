<?php
class Solicitacao{
    private $idSolicitacao;
	private $empresa;
	private $nome;
	private $endereco;
    private $pontoReferencia;
	private $data;
	private $horario;
	private $telefone;
	private $quantidade;
	private $protocolar;
	private $acesso;
	private $moveis;
	private $descricao;
	private $ajudante;
	private $moto;
	private $anexo;
	private $paciente;
	private $leito;
	private $motivo;
	private $tipoAmbulancia;
	private $tipoAcomodacao;
	private $isolamento;
	private $gas;
	private $obs;
	private $categoria;
	private $solicitante;
	private $dataSolicitacao;
	private $status;
	private $instrucoes;

	public function Bolsa($idSolicitacao="",$empresa="",$nome="",$endereco="",$pontoReferencia="",$data="",$horario="",$telefone="",$quantidade="",$protocolar="",$acesso="",$moveis="", $descricao="", $ajudante="", $moto="",$anexo="",$paciente="",$leito="",$motivo="",$protocolar="",$tipoAmbulancia="",$tipoAcomodacao="", $isolamento="", $gas="", $obs="",$categoria="",$solicitante="",$dataSolicitacao="", $status="", $motorista="", $veiculo="", $instrucoes=""){

		$this->idSolicitacao   = $idSolicitacao;
		$this->empresa 		   = $empresa;
		$this->nome 		   = $nome;
		$this->endereco 	   = $endereco;
		$this->pontoReferencia = $pontoReferencia;
        $this->data 		   = $data;
		$this->horario 		   = $horario;
		$this->telefone  	   = $telefone;
		$this->quantidade 	   = $quantidade;
		$this->protocolar      = $protocolar;
		$this->acesso 		   = $acesso;
		$this->moveis 		   = $moveis;
		$this->descricao 	   = $descricao;
		$this->ajudante 	   = $ajudante;
		$this->moto 		   = $moto;
		$this->anexo           = $anexo;
		$this->paciente 	   = $paciente;
		$this->leito 		   = $leito;
		$this->motivo 		   = $motivo;
		$this->dataSolicitacao = $dataSolicitacao;
        $this->status 		   = $status;
		$this->motorista 	   = $motorista;
		$this->veiculo         = $veiculo;
		$this->instrucoes      = $instrucoes;
	}
    
	public function getIdSolicitacao(){
		return $this->idSolicitacao;
	}
	public function getEmpresa(){
		return $this->empresa;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function getPontoReferencia(){
		return $this->pontoReferencia;
	}
	public function getData(){
		return $this->data;
	}
	public function getHorario(){
		return $this->horario;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getQuantidade(){
		return $this->quantidade;
	}
	public function getProtocolar(){
		return $this->protocolar;
	}
	public function getAcesso(){
		return $this->acesso;
	}
	public function getMoveis(){
		return $this->moveis;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getAjudante(){
		return $this->ajudante;
	}
	public function getMoto(){
		return $this->moto;
	}
	public function getAnexo(){
		return $this->anexo;
	}
	public function getPaciente(){
		return $this->paciente;
	}
	public function getLeito(){
		return $this->leito;
	}
	public function getMotivo(){
		return $this->motivo;
	}
	public function getDataSolicitacao(){
		return $this->dataSolicitacao;
	}
	public function getStatus(){
		return $this->status;
	}
	public function getMotorista(){
		return $this->motorista;
	}
	public function getVeiculo(){
		return $this->veiculo;
	}
	public function getInstrucoes(){
		return $this->instrucoes;
	}

	public function setIdSolicitacao($p){
		 $this->idSolicitacao = $p;
	}
	public function setEmpresa($p){
		 $this->empresa = $p;
	}
	public function setNome($p){
		 $this->nome = $p;
	}
	public function setEndereco($p){
		 $this->endereco = $p;
	}
	public function setPontoReferencia($p){
		 $this->pontoReferencia = $p;
	}
	public function setData($p){
		 $this->data = $p;
	}
	public function setHorario($p){
		 $this->horario = $p;
	}
	public function setTelefone($p){
		 $this->telefone = $p;
	}
	public function setQuantidade($p){
		 $this->quantidade = $p;
	}
	public function setProtocolar($p){
		 $this->protocolar = $p;
	}
	public function setAcesso($p){
		 $this->acesso = $p;
	}
	public function setMoveis($p){
		 $this->moveis = $p;
	}
	public function setDescricao($p){
		 $this->descricao = $p;
	}
	public function setAjudante($p){
		 $this->ajudante = $p;
	}
	public function setMoto($p){
		 $this->moto = $p;
	}
	public function setAnexo($p){
		 $this->anexo = $p;
	}
	public function setPaciente($p){
		 $this->paciente = $p;
	}
	public function setLeito($p){
		 $this->leito = $p;
	}
	public function setMotivo($p){
		 $this->motivo = $p;
	}
	public function setDataSolicitacao(){
		 $this->dataSolicitacao = $p;
	}
	public function setStatus($p){
		 $this->status = $p;
	}
	public function setMotorista($p){
		 $this->motorista = $p;
	}
	public function setVeiculo($p){
		 $this->veiculo = $p;
	}
	public function setInstrucoes($p)){
		 $this->instrucoes = $p;
	}

}
