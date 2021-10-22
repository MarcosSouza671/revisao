<?php
    
class pessoa{
    private $nome;
    private $endereco;
    private $bairro;
    private $cpf;
    private $cidade;
    private $estado;

    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

}

?>