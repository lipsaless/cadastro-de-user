<?php



require_once 'connect.php';
class User extends Connect
{
    protected $tabela;
    public $id;
    public $nome;
    public $email;

    public function getTabela(){
        return $this->tabela;
    }
    public function setTabela($tabela){
        $this->tabela = $tabela;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }


}





 ?>