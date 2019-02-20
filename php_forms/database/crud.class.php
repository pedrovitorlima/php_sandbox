<?php

require_once('connection.php');

abstract class Crud extends Connection {
    protected $table;

    abstract public function insert();
    abstract public function update();

    public function find($id) {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stm = Connection::prepare($sql);
        $stm->bindParam(":id", $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

    public function findAll() {
        $sql = "SELECT * FROM $this->table";
        $stm = Connection::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stm = Connection::prepare($sql);
        return $stm->execute();
    }

}