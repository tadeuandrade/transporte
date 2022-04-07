<?php
class Veiculo{
    private $idVeiculo;
	private $tipo;
	private $placa;
	private $lugares;
    private $status;

	public function Veiculo($idVeiculo="",$tipo="",$placa="",$lugares="",$status=""){

		$this->idVeiculo   = $idVeiculo;
		$this->tipo 	   = $tipo;
		$this->placa   	   = $placa;
		$this->lugares 	   = $lugares;
		$this->status 	   = $status;
	}
    
	public function getIdVeiculo(){
		return $this->idVeiculo;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getPlaca(){
		return $this->placa;
	}
	public function getLugares(){
		return $this->lugares;
	}
	public function getStatus(){
		return $this->status;
	}


	public function setIdVeiculo($p){
		 $this->idVeiculo = $p;
	}
	public function setTipo($p){
		 $this->tipo = $p;
	}
	public function setPlaca($p){
		 $this->placa = $p;
	}
	public function setLugares($p){
		 $this->lugares = $p;
	}
	public function setStatus($p){
		 $this->status = $p;
	}

}
