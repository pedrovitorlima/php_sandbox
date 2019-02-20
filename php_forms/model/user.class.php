<?php 

require_once("../database/crud.class.php");

class User extends Crud{
    protected $table = "users";

    private $idUser;
    private $name;
    private $email;

    public function setId($idUser) {
        $this->idUser = $idUser;
    }

    public function getId() {
        return $this-idUser;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (name, email) VALUES (:name, :email)";
        $stm = Connection::prepare($sql);
        $stm->bindParam(":name", self::getName());
        $stm->bindParam(":email", self::getEmail());
        return $stm->execute();
    }

    public function update() {
        $sql = "UPDATE $this->table SET name = :name, email = :email, id_user = :id_user";
        $stm = Connection::prepare($sql);
        $stm->bindParam(":name", self::getName());
        $stm->bindParam(":email", self::getEmail());
        $stm->bindParam(":id_user", self::getId());
        return $stm->execute();
    }
}
