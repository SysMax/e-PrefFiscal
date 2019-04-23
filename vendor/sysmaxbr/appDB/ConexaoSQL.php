<?php

namespace SysMax\appDB;


/**
 * Description of ConexaoSQL
 *
 * @author Maximus
 */
class ConexaoSQL extends \PDO{
    
    private $conn;
    
    public function __construct() {
        $this->conn = new \PDO("mysql:host=localhost;dbname=e-PrefFiscal", "root", "SysMax10" );
    }
    
    private function setParams($statement, $parameters = array()) {
        
        foreach ($parameters as $key => $values) {
            
            $this->setParam($statement, $key, $values);
        }
    }
    
    private function setParam($statement, $key, $value) {
        
        $statement->bindParam($key, $values);
    }
    
    public function query($rawQuery, $params = array()) {
        
        $stmt = $this->conn->prepare($rawQuery);
        
        $this->setParams($stmt, $params);
        
        $stmt->execute();
        
        return $stmt;
    }
    
    public function select($rawQuery, $params = array()):array {
        
        $stmt = $this->query($rawQuery, $params);
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
