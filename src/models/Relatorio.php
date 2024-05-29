<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class Relatorio extends Model{



    public static function QtdUser(){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("
            select count(id) as user from users");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $user = $data['user'];
            return $user;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function QtdUadesao(){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("
            select count(id) as adesao from adesao");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $user = $data['adesao'];
            return $user;

        }catch(PDOException $e){
            echo $e;
        }
    }
    public static function Qtdclassificacao(){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("
            select count(id) as solicitacao from classificacoes");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $user = $data['solicitacao'];
            return $user;

        }catch(PDOException $e){
            echo $e;
        }
    }
    public static function QtdPerfil(){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("
            select count(id) as perfil from perfil");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $user = $data['perfil'];
            return $user;

        }catch(PDOException $e){
            echo $e;
        }
    }
    public static function Qtdanucio(){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("
            select count(id) as anucio from anucio");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $user = $data['anucio'];
            return $user;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function Qtdcsolicitacao(){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("
            select count(id) as solicitacao from solicitacoes");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $user = $data['solicitacao'];
            return $user;

        }catch(PDOException $e){
            echo $e;
        }
    }

}


?>