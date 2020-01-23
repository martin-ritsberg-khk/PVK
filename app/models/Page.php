<?php


class Page
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function addUser(){
        $this->db->query('INSERT INTO users (name, email, status) VALUES (:name, :email, :status)');
        $values = [
            'name' => 'Testa',
            'email' => 'testa@host.local',
            'status' => 'user'
        ];
        foreach ($values as $param => $value){
            $this->db->bind($param,$value);
        }
        $this->db->excecute();
    }
}