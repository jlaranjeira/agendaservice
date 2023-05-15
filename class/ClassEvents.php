<?php 
namespace Classes;

use Models\ModelConect;
use PDO;

class ClassEvents extends ModelConect 
{
    public function getEvents()
    {
        $b = $this->conectDB()->prepare("select * from events");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
        
    }

    #criação do insert no banco de dados
    public function createEvents($id=0,$nome,$email,$telefone,$endereco,$title,$msg,$start,$end)
    {
        $b = $this->conectDB()->prepare("insert into events values(?,?,?,?,?,?,?,?,?)"); 
        $b->bindParam(1, $id, \PDO::PARAM_INT); 
        $b->bindParam(2, $nome, \PDO::PARAM_STR);
        $b->bindParam(3, $email, \PDO::PARAM_STR);
        $b->bindParam(4, $telefone, \PDO::PARAM_STR);
        $b->bindParam(5, $endereco, \PDO::PARAM_STR);
        $b->bindParam(6, $title, \PDO::PARAM_STR);
        $b->bindParam(7, $msg, \PDO::PARAM_STR);
        $b->bindParam(8, $start, \PDO::PARAM_STR);
        $b->bindParam(9, $end, \PDO::PARAM_STR);
        $b->execute();
    }

    #Busca evento pelo Id

    public function getEventsById($id)
    {
        $b = $this->conectDB()->prepare("select * from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT); 
        $b->execute();
        return $f=$b->fetch(\PDO::FETCH_ASSOC);
    }

    #Update no Banco de Dados
    public function updateEvents($id,$nome,$email,$telefone,$endereco,$start)
    {
        $b = $this->conectDB()->prepare("update events set nome=?, email=?, telefone=?,endereco=?,start=? where id=?"); 
        $b->bindParam(1, $nome, \PDO::PARAM_STR);
        $b->bindParam(2, $email, \PDO::PARAM_STR);
        $b->bindParam(3, $telefone, \PDO::PARAM_STR);
        $b->bindParam(4, $endereco, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $id, \PDO::PARAM_INT); 
        $b->execute();

    }

    # Deletar agendamento do banco de dados

    public function deleteEvents($id)
    {
        $b = $this->conectDB()->prepare("delete from events where id=?"); 
        $b->bindParam(1, $id, \PDO::PARAM_INT); 
        $b->execute();

    }

}

?>