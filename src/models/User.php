<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class User extends Model{

    public static function exists($email,$password){
        try{
            $db = new Database();
            $query = $db->connect()->prepare("SELECT email FROM users WHERE email = '$email' and password = '$password'");
            $query->execute();
            return $query->rowCount() > 0;

        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }   

    public function save(string $nome,string $subnome,string $telefone,string $email,string $localizacao,string $categoria,string $password,string $descricao
    ){
        try{
            $db = new Database();
            $query = $db->connect()->prepare("INSERT INTO users VALUES (default,'$nome', '$subnome', '$telefone',
            '$email','$localizacao','$categoria','$password','$descricao')");
            $query->execute();
         
            return true;
        }catch(PDOException $e){
            error_log($e);
            return false;
        }
    } 


    public static function get($email){
        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM users WHERE email = :email');
            $query->execute(['email' => $email]);
            $data = $query->fetch(PDO::FETCH_ASSOC);
            return $data;

        }catch(PDOException $e){
            return false;
        }
    }

    public static function getById($user_id){
        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM users WHERE id = :id');
            $query->execute([ 'id' => $user_id]);
            $data = $query->fetch(PDO::FETCH_ASSOC);

            return $data;
        }catch(PDOException $e){
            return false;
        }
    }

    public function getAll(){
        $items = [];

        try{
            $query = $this->query('SELECT * FROM users');

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new User($p['nome'],$p['subnome'],$p['telefone'],$p['email']
            ,$p['localizacao'],$p['categoria'],$p['password'],$p['descricao']);

                array_push($items, $item);
            }
            return $items;


        }catch(PDOException $e){
            echo $e;
        }
    }

} 