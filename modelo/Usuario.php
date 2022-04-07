<?php
class Usuario{
    private $matricula;
	private $nome;
	private $email;
	private $setor;
    private $senha;
	private $acesso;

	public function Usuario($matricula="",$nome="",$email="",$setor="",$senha="",$acesso=""){

		$this->matricula = $matricula;
		$this->nome = $nome;
		$this->email = $email;
		$this->setor = $setor;
		$this->senha = $senha;
        $this->acesso = $acesso;
	}
    
	public function getMatricula(){
		return $this->matricula;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSetor(){
		return $this->setor;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getAcesso(){
		return $this->acesso;
	}


	public function setMatricula($p){
		 $this->matricula = $p;
	}
	public function setNome($p){
		 $this->nome = $p;
	}
	public function setEmail($p){
		 $this->email = $p;
	}
	public function setSetor($p){
		 $this->setor = $p;
	}
	public function setSenha($p){
		 $this->senha = $p;
	}
	public function setAcesso($p){
		 $this->acesso = $p;
	}

}
