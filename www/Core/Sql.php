<?php
namespace App\Core;

abstract class Sql{

    private $pdo;
    private $table;

    public function __construct(){
        //Mettre en place un SINGLETON
        try{
            $this->pdo = new \PDO("pgsql:host=database;port=5432;dbname=esgi" , "esgi" , "Test1234" );
        }catch(\Exception $e){
            die("Erreur SQL : ".$e->getMessage());
        }
        $classExploded = explode("\\", get_called_class());
        $this->table = end($classExploded);
        $this->table = "esgi_".$this->table;
    }

    public function save(): void
    {
        $columns = get_object_vars($this);
        $columnsToDeleted =get_class_vars(get_class());
        $columns = array_diff_key($columns, $columnsToDeleted);
        unset($columns["id"]);

        if(is_numeric($this->getId()) && $this->getId()>0)
        {
            $columnsUpdate = [];
            foreach ($columns as $key=>$value)
            {
                $columnsUpdate[]= $key."=:".$key;
            }
            $queryPrepared = $this->pdo->prepare("UPDATE ".$this->table." SET ".implode(",",$columnsUpdate)." WHERE id=".$this->getId());

        }else{
            $queryPrepared = $this->pdo->prepare("INSERT INTO ".$this->table." (".implode(",", array_keys($columns)).") 
                            VALUES (:".implode(",:", array_keys($columns)).")");
        }

        $queryPrepared->execute($columns);
    }
    public function search(array $element)
    {
        foreach($element as $key => $value){
            $toSelect [] = $key."=:". $key; 
        }
        $sql = "SELECT * FROM ".$this->table." WHERE ". implode(' AND ',$toSelect);
        $queryPrepared=$this->pdo->prepare($sql);
        // print_r($element);
        // $queryPrepared->execute([$element]);
        $queryPrepared->execute(array_values($element));
        // print_r($queryPrepared->execute([$element]));
    }
}