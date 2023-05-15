<?php 
namespace Classes;

use Models\ModelConect;

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
    public function createEvents($id=0,$title,$description,$color='blue',$start,$end)
    {
        $b = $this->conectDB()->prepare("insert into events values(?,?,?,?,?,?)"); 
        $b->bindParam(1, $id, \PDO::PARAM_INT); 
        $b->bindParam(2, $title, \PDO::PARAM_STR);
        $b->bindParam(3, $description, \PDO::PARAM_STR);
        $b->bindParam(4, $color, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR);
        $b->execute();
    }
}

?>