<?php

namespace App\Models;

use App\Models\BaseModel;
use \PDO;

class User extends BaseModel
{
    private $username;
    private $password;
    private $email;
    private $first_name;
    private $last_name;
    private $id;
    private $created;
    private $updated;

    public function list(){
        $sql = "SELECT * FROM users";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_CLASS, '\App\Models\Users');
        return $result;
    }
    public function register(){
        $sql = "INSERT INTO users";
    }
    public function hash_password(){

    }
    public function login(){

    }
    public function logout(){

    }
}