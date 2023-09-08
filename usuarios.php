<?php
class usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        try
        {
            $this->pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            $this->msgErro = $e->getMessage();
        }
    }

    public function cadastrar($nome, $senha, $email, $dataan) {
        $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE nome = :n");
        $sql->bindValue(":n", $nome);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, senha, email, data_aniversario) VALUES (:n, :s, :e, :d)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":s", sha1($senha)); 
            $sql->bindvalue(":e", $email);
            $sql->bindvalue(":d", $dataan); 
            $sql->execute();

            return true;
        }
    }

    public function logar($nome, $senha)
    {
        $senhasha1 = sha1($senha);

        $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE nome = :n AND senha = :s");
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":s", $senhasha1);
        $sql->execute();

        if ($sql->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>
