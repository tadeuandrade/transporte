<?php
class Chamado{
    private $idChamado;
	private $nome;
	private $setor;
	private $telefone;
    private $email;
	private $descricao;
	private $data;
	private $status;
	private $idUsuario;
	private $idTipo;
	private $acao;
	private $unidade;
	private $dataFechamento;
	private $titulo;
	private $relator;

	public function Bolsa($idChamado="",$nome="",$setor="",$telefone="",$email="",$descricao="",$data="",$status="",$idUsuario="",$idTipo="",$acao="",$unidade="", $dataFechamento="", $titulo="", $relator=""){

		$this->idChamado = $idChamado;
		$this->nome = $nome;
		$this->setor = $setor;
		$this->telefone = $telefone;
		$this->email = $email;
        $this->descricao = $descricao;
		$this->data = $data;
		$this->status = $status;
		$this->idUsuario = $idUsuario;
		$this->idTipo = $idTipo;
		$this->acao = $acao;
		$this->unidade = $unidade;
		$this->dataFechamento = $dataFechamento;
		$this->titulo = $titulo;
		$this->relator = $relator;
	}
    
	public function getIdChamado(){
		return $this->idChamado;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getSetor(){
		return $this->setor;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getData(){
		return $this->data;
	}
	public function getStatus(){
		return $this->status;
	}
	public function getIdUsuario(){
		return $this->idUsuario;
	}
	public function getIdTipo(){
		return $this->idTipo;
	}
	public function getAcao(){
		return $this->acao;
	}
	public function getUnidade(){
		return $this->unidade;
	}
	public function getDataFechamento(){
		return $this->dataFechamento;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	public function getRelator(){
		return $this->relator;
	}


	public function setIdChamado($p){
		 $this->idChamado = $p;
	}
	public function setNome($p){
		 $this->nome = $p;
	}
	public function setSetor($p){
		 $this->setor = $p;
	}
	public function setTelefone($p){
		 $this->telefone = $p;
	}
	public function setEmail($p){
		 $this->email = $p;
	}
	public function setDescricao($p){
		 $this->descricao = $p;
	}
	public function setData($p){
		 $this->data = $p;
	}
	public function setStatus($p){
		 $this->status = $p;
	}
	public function setIdUsuario($p){
		 $this->idUsuario = $p;
	}
	public function setIdTipo($p){
		 $this->idTipo = $p;
	}
	public function setAcao($p){
		 $this->acao = $p;
	}
	public function setUnidade($p){
		 $this->unidade = $p;
	}
	public function setDataFechamento($p){
		 $this->dataFechamento = $p;
	}
	public function setTitulo($p){
		 $this->titulo = $p;
	}
	public function setRelator($p){
		 $this->relator = $p;
	}

}
