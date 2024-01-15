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

    public function cadastrar($nome, $senha, $email, $dataan, $telefone) {
        $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE nome = :n");
        $sql->bindValue(":n", $nome);
        $sql->execute();
    
        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
    
            $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, senha, email, data_aniversario, telefone) VALUES (:n, :s, :e, :d, :t)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":s", $hashedSenha);
            $sql->bindvalue(":e", $email);
            $sql->bindvalue(":d", $dataan);
            $sql->bindvalue(":t", $telefone);
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
