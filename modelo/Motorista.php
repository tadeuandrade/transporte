<?php
class Motorista{
    private $idMotorista;
	private $nome;
	private $matricula;
	private $email;
    private $status;

	public function Motorista($idMotorista="",$nome="",$matricula="",$email="",$status=""){

		$this->idMotorista = $idMotorista;
		$this->nome 	   = $nome;
		$this->matricula   = $matricula;
		$this->email 	   = $email;
		$this->status 	   = $status;
	}
    
	public function getIdMotorista(){
		return $this->idMotorista;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getMatricula(){
		return $this->matricula;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getStatus(){
		return $this->status;
	}

	public function setIdMotorista($p){
		 $this->idMotorista = $p;
	}
	public function setNome($p){
		 $this->nome = $p;
	}
	public function setMatricula($p){
		 $this->matricula = $p;
	}
	public function setEmail($p){
		 $this->email = $p;
	}
	public function setStatus($p){
		 $this->status = $p;
	}
}
