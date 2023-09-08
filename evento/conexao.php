<?php
class Database{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'valor';
    private $conexao;

    public function conectar(){
        $this->conexao = null;
        try {
            $this->conexao = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->database . ';charset=utf8', 
            $this->username, $this->password);
            return $this->conexao;
        } catch(Exception $e) {
            die('Erro : '.$e->getMessage());
        }
    }
}
?>
