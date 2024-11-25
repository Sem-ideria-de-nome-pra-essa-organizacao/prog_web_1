<?php

class db {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $dbname ="db_pweb1_2024_2_blog";

    public function __construct(){
        $this->conn();
    }
    function conn(){

        try{
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname;port=$this->port",
                $this->user,
                $this->password,
                [
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND =>" SET NAMES utf8"
                ]
            );

            return $conn;

        } catch(PDOException $e){
            echo "Erro: ". $e->getMessage();
        }
    }

    public function insert($data){
        $conn = $this->conn();
        $sql = "INSERT INTO categoria(nome) VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$data['nome']]);
    }
    public function update($data){
        $conn = $this->conn();
        $sql = "UPDATE categoria SET nome = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$data['nome'],$data['id']]);
    }

    public function all(){
        $conn = $this->conn();
        $sql = 'SELECT * FROM categoria';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchALL(PDO::FETCH_CLASS);

    }
    public function filter($data){
        
        $tipo = $data['tipo'];
        $val = $data['valor'];
        $conn = $this->conn();

        $sql = "SELECT * FROM categoria WHERE $tipo LIKE ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute(["%$val%",]);
        
        return $stmt->fetchALL(PDO::FETCH_CLASS);

    }
    public function find($id){
                $conn = $this->conn();

        $sql = "SELECT * FROM categoria WHERE id LIKE ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id,]);

        return $stmt->fetchObject();

    }

    public function destroy($id){
        $conn = $this->conn();
        $sql = 'DELETE FROM categoria WHERE id =?';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        

    }
}