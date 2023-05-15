<?php 
namespace Models;

 /**
  * Summary of ModelConect
  */
 abstract class ModelConect
{
    /**
     * Summary of conectDB
     * @return \PDO|string
     */
    protected function conectDB()
    {
        try{
            $con=new \PDO("mysql:host=".HOST.";dbname=".DB."",USER,PASS);
            return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }

    }
}

?>