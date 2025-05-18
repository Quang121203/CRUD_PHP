<?php

require_once './core/Database.php';

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function getAll()
    {
        $sql = $this->db->query("SELECT * FROM users");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByID($id)
    {
        $sql = $this->db->query("SELECT * FROM users WHERE id =" . $id);
        $user = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $user ? $user[0] : null;
    }

    public function getByEmail($email)
    {
        $sql = $this->db->query("SELECT * FROM users WHERE email = '" . $email."'");
        $user = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $user ? $user[0] : null;
    }

    public function delete($id)
    {
        return $this->db->exec("DELETE FROM users WHERE id = " . $id);
    }

    public function update($data)
    {
        return $this->db->exec(
            "UPDATE users SET name= '" . $data['name']
            . "',email ='" . $data['email']
            . "',password ='" . $data['password']
            . "',id =" . $data['id']
            . " WHERE id =" . $data['idOld']
        );
    }

    public function add($data)
    {
        return $this->db->exec("INSERT INTO users (name, email, password) VALUES ('"
            . $data['name'] . "', '"
            . $data['email'] . "', '"
            . $data['password'] . "')");
    }
}
