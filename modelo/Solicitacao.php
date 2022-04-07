<?php
class Solicitacao{
    private $idSolicitacoes;
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
	private $destino;
	private $origem;
	private $telefoneDestino;
	private $setor;
	private $enderecoOrigem;
	private $idVeiculo;
	private $dataRealizacao;
	private $horarioRealizacao;
	private $idMotorista;
	private $kmInicial;
	private $kmFinal;
	private $kmUtilizado;
	private $recebido;
	private $notaFiscal;
	private $observacao;
	private $rateio;
	private $setorDestino;
	private $passageiros;
	private $empreOrigem;
	private $empreDestino;
	private $procurarPor;
	private $cdSetor;

	public function Bolsa($idSolicitacoes="",$empresa="",$nome="",$endereco="",$pontoReferencia="",$data="",$horario="",$telefone="",$quantidade="",$protocolar="",$acesso="",$moveis="", $descricao="", $ajudante="", $moto="",$anexo="",$paciente="",$leito="",$motivo="",$protocolar="",$tipoAmbulancia="",$tipoAcomodacao="", $isolamento="", $gas="", $obs="",$categoria="",$solicitante="",$dataSolicitacao="", $status="", $motorista="", $veiculo="", $instrucoes="", $destino="", $origem="", $telefoneDestino="", $setor="", $idVeiculo="", $dataRealizacao="", $horarioRealizacao="", $idMotorista="",$enderecoOrigem="", $kmInicial="", $kmFinal="", $kmUtilizado="", $recebido="",$notaFiscal="",$observacao="",$setorDestino="",$passageiros="", $empreOrigem="", $empreDestino="", $procurarPor="", $cdSetor=""){

		$this->idSolicitacoes  = $idSolicitacoes;
		$this->empresa 		   = $empresa;
		$this->nome 		   = $nome;
		$this->endereco 	   = $endereco;
		$this->pontoReferencia = $pontoReferencia;
        $this->data 		   = $data;
		$this->horario 		   = $horario;
		$this->telefone  	   = $telefone;
		$this->quantidade 	   = $quantidade;
		$this->protocolar      = $protocolar;
		$this->tipoAcomodacao  = $tipoAcomodacao;
		$this->tipoAmbulancia  = $tipoAmbulancia;
		$this->isolamento  	   = $isolamento;
		$this->solicitante     = $solicitante;
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
		$this->destino         = $destino;
		$this->categoria       = $categoria;
		$this->origem          = $origem;
		$this->gas       	   = $gas;
		$this->obs             = $obs;
		$this->telefoneDestino = $telefoneDestino;
		$this->setor 		   = $setor;
		$this->idVeiculo       	 = $idVeiculo;
		$this->dataRealizacao    = $dataRealizacao;
		$this->horarioRealizacao = $horarioRealizacao;
		$this->idMotorista 		 = $idMotorista;
		$this->enderecoOrigem    = $enderecoOrigem;
		$this->kmInicial    	 = $kmInicial;
		$this->kmFinal 			 = $kmFinal;
		$this->kmUtilizado 		 = $kmUtilizado;
		$this->recebido			 = $recebido;
		$this->notaFiscal		 = $notaFiscal;
		$this->observacao  		 = $observacao;
		$this->rateio    		 = $rateio;
		$this->setorDestino 		 = $setorDestino;
		$this->passageiros    		 = $passageiros;
		$this->empreOrigem  	 = $empreOrigem;
		$this->empreDestino  	 = $empreDestino;
		$this->procurarPor 	 = $procurarPor;
		$this->cdSetor 	 = $cdSetor;
	}
    
	public function getIdSolicitacoes(){
		return $this->idSolicitacoes;
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
	public function getTipoAcomodacao(){
		return $this->tipoAcomodacao;
	}
	public function getTipoAmbulancia(){
		return $this->tipoAmbulancia;
	}
	public function getIsolamento(){
		return $this->isolamento;
	}
	public function getSolicitante(){
		return $this->solicitante;
	}
	public function getDestino(){
		return $this->destino;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function getOrigem(){
		return $this->origem;
	}
	public function getGas(){
		return $this->gas;
	}
	public function getObs(){
		return $this->obs;
	}
	public function getTelefoneDestino(){
		return $this->telefoneDestino;
	}
	public function getSetor(){
		return $this->setor;
	}
	public function getIdVeiculo(){
		return $this->idVeiculo;
	}
	public function getDataRealizacao(){
		return $this->dataRealizacao;
	}
	public function getHorarioRealizacao(){
		return $this->horarioRealizacao;
	}
	public function getIdMotorista(){
		return $this->idMotorista;
	}
	public function getEnderecoOrigem(){
		return $this->enderecoOrigem;
	}
	public function getKmInicial(){
		return $this->kmInicial;
	}
	public function getKmFinal(){
		return $this->kmFinal;
	}
	public function getKmUtilizado(){
		return $this->kmUtilizado;
	}
	public function getRecebido(){
		return $this->recebido;
	}
	public function getNotaFiscal(){
		return $this->notaFiscal;
	}
	public function getObservacao(){
		return $this->observacao;
	}
	public function getRateio(){
		return $this->rateio;
	}
	public function getSetorDestino(){
		return $this->setorDestino;
	}
	public function getPassageiros(){
		return $this->passageiros;
	}
	public function getEmpreOrigem(){
		return $this->empreOrigem;
	}
	public function getEmpreDestino(){
		return $this->empreDestino;
	}
	public function getProcurarPor(){
		return $this->procurarPor;
	}
	public function getCdSetor(){
		return $this->cdSetor;
	}



	public function setIdSolicitacoes($p){
		 $this->idSolicitacoes = $p;
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
	public function setDataSolicitacao($p){
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

	public function setInstrucoes($p){
		 $this->instrucoes = $p;
	}
	
	public function setTipoAcomodacao($p){
		 $this->tipoAcomodacao = $p;
	}

	public function setTipoAmbulancia($p){
		 $this->tipoAmbulancia = $p;
	}

	public function setIsolamento($p){
		 $this->isolamento = $p;
	}

	public function setSolicitante($p){
		 $this->solicitante = $p;
	}

	public function setDestino($p){
		 $this->destino = $p;
	}

	public function setCategoria($p){
		 $this->categoria = $p;
	}

	public function setOrigem($p){
		 $this->origem = $p;
	}

	public function setGas($p){
		 $this->gas = $p;
	}

	public function setObs($p){
		 $this->obs = $p;
	}

	public function setTelefoneDestino($p){
		 $this->telefoneDestino = $p;
	}
	public function setSetor($p){
		 $this->setor = $p;
	}

	public function setIdVeiculo($p){
		 $this->idVeiculo = $p;
	}
	public function setDataRealizacao($p){
		 $this->dataRealizacao = $p;
	}
	public function setHorarioRealizacao($p){
		 $this->horarioRealizacao = $p;
	}
	public function setIdMotorista($p){
		 $this->idMotorista = $p;
	}
	public function setEnderecoOrigem($p){
		 $this->enderecoOrigem = $p;
	}
	public function setKmInicial($p){
		 $this->kmInicial = $p;
	}
	public function setKmFinal($p){
		 $this->kmFinal = $p;
	}
	public function setKmUtilizado($p){
		 $this->kmUtilizado = $p;
	}
	public function setRecebido($p){
		$this->recebido = $p;
	}
	public function setNotaFiscal($p){
		$this->notaFiscal = $p;
	}
	public function setObservacao($p){
		$this->observacao = $p;
	}
	public function setRateio($p){
		 $this->rateio = $p;
	}
	public function setSetorDestino($p){
		 $this->setorDestino = $p;
	}
	public function setPassageiros($p){
		 $this->passageiros = $p;
	}
	public function setEmpreOrigem($p){
		 $this->empreOrigem = $p;
	}
	public function setEmpreDestino($p){
		 $this->empreDestino = $p;
	}
	public function setProcurarPor($p){
		 $this->procurarPor = $p;
	}
	public function setCdSetor($p){
		 $this->cdSetor = $p;
	}

}
