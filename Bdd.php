<?php

class Bdd{
    private $hostName = '127.0.0.1';
    private $dbName = 'meetic';
    private $userName = 'root';
    private $password = 'root';

    private $connection;

    public function __construct(){
        $this->connection = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        /* Vérification de la connexion */
        if ($this->connection->connect_errno){
            printf("Échec de la connexion : %s\n", $this->connection->connect_error);
            exit();
        }
    }

    function query($request){
        $rows = [];
        if ($result = $this->connection->query($request)) {
            if ($result->num_rows!= 0){
                while($obj = $result->fetch_all()){
                    array_push($rows, $obj);
                }
            }
        }
        return $rows;
    }
}
?>