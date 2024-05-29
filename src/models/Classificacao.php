<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class Classificacao extends Model{

    private int $idUser;
    private int $idPerfil;
    private string $comentario;

    public function save(int $idUser, int $idPerfil, string $comentario)
    {
        $this->idUser = $idUser;
        $this->idPerfil = $idPerfil;
        $this->comentario = $comentario;

        try{
            $db = new Database();
            $query = $db->connect()->prepare("insert into classificacoes values (default,'$this->idUser','$this->idPerfil','$this->comentario',default )");
            $query->execute();
         
            return true;
        }catch(PDOException $e){
            error_log($e);
            return false;
        }
    }

    public static function getpProfissional($id){
        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM perfil WHERE area = :area');
            $query->execute(['area' => $id]);
            $data = $query->fetch(PDO::FETCH_ASSOC);
            return $data;

        }catch(PDOException $e){
            return false;
        }
    } 
    public static function getById($idPerfil){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("select classificacoes.idUser,classificacoes.data, classificacoes.idPerfil,classificacoes.comentario, classificacoes.id, users.nome,users.subnome, users.email,users.telefone,users.localizacao,users.categoria from classificacoes inner join users on users.id=classificacoes.idUser inner join  perfil on perfil.id=classificacoes.idPerfil where perfil.id=$idPerfil order by id desc limit 10");
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function existClassificacao($idUser,$idPerfil){
        try{
            $db = new Database();
            $query = $db->connect()->prepare("select *from classificacoes where idUser = $idUser and idPerfil=$idPerfil");
            $query->execute();
            return $query->rowCount() > 0;

        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public static function DellClassificacao($idUser,$idPerfil){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("delete from classificacoes where idUser=$idUser and idPerfil=$idPerfil");
            $query->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function DellClassificacaoProfissional($id){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("delete from classificacoes where id=$id");
            $query->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }

}


?>