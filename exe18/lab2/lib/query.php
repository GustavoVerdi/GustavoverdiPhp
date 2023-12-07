<?php

require_once 'conexaobd.php';

class Query {
    private $sql;
    private $registros;
    private $connection;
    private $queryResource;

    public function __construct($oConn) {
        $this->registros = 0;
        $this->connection = $oConn;
    }

    public function open() {
        $this->queryResource = pg_query($this->connection->getInternalConnection(), $this->sql);
        if ($this->queryResource) {
            $this->registros = pg_num_rows($this->queryResource);
            return true;
        }
        return false;
    }

    public function getNextRow() {
        $row = pg_fetch_assoc($this->queryResource);
        return ($row) ? $row : false;
    }

    public function insert($tabela, $colunas, $valores) {
        $i = 0; 
        $colunasStr = implode(', ', $colunas);
        $placeholders = implode(', ', array_fill(0, count($colunas), '$' . ++$i));
    
        $query = "INSERT INTO $tabela ($colunasStr) VALUES ($placeholders)";
    

        $result = pg_query_params(
            $this->connection->getInternalConnection(),
            $query,
            $valores
        );
    
        return $result;
    }

    public function delete($tabela, $where) {
        $result = pg_query_params(
            $this->connection->getInternalConnection(),
            "DELETE FROM $tabela WHERE $where",
            []
        );

        return $result;
    }

    public function getRegistros() {
        return $this->registros;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }
}

?>
