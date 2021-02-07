<?php
    require_once "conexao.class.php";

    class Manager extends Conexao{
        
        public function insertClient($table, $data) {
            $pdo = parent::get_instance();
            $fields = implode(",", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
            $sql = "INSERT INTO $table ($fields) VALUES ('$values')";
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value) {
                $statement->bindValue(":$key", $value, PDO::PARAM_STR);
            }
        }
        
        public function listClient($table) {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM $table ORDER BY name ASC";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

    }

?>