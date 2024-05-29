<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class Anucios extends Model{
     private int    $idUser;
     private string $titulo;      
     private string $descricao;   
     private string $areaActuacao;
     private int    $vagas; 
     private string    $dataFinal;          
     private string $contrato;
     private string $imagem;
   

    public function saveAnucio(string $titulo,string $descricao,string $areaActuacao,int $vagas
    ,string $contrato, string $imagem , int $idUser, string $dataFinal)
    {
        $this->idUser = $idUser;
        $this->titulo = $titulo;      
        $this->descricao = $descricao;   
        $this->areaActuacao = $areaActuacao;
        $this->vagas = $vagas;              
        $this->contrato = $contrato;
        $this->imagem = $imagem;
        $this->dataFinal = $dataFinal;
   
        try{
            $db = new Database();
            $query = $db->connect()->prepare("INSERT INTO anucio VALUES (default,'$this->idUser', '$this->titulo',
            '$this->descricao','$this->areaActuacao','$this->vagas',default,'$this->dataFinal','$this->contrato','$this->imagem')");
            $query->execute();
         
            return true;
        }catch(PDOException $e){
            error_log($e);
            return false;
        }
    } 


    public static function get($areaActuacao){
        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM anucio WHERE areaActuacao = :areaActuacao');
            $query->execute(['areaActuacao' => $areaActuacao]);
            $data = $query->fetch(PDO::FETCH_ASSOC);
            return $data;

        }catch(PDOException $e){
            return false;
        }
    }

    public static function getById($idAnucio){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("select users.id, anucio.id as idA,users.nome,anucio.titulo, users.subnome,users.telefone,users.email,users.localizacao,anucio.descricao,anucio.areaActuacao,anucio.vagas,anucio.data,anucio.dataFinal,anucio.contrato 
            ,anucio.imagem from anucio inner join users on anucio.idUser=users.id 
            where anucio.id ='$idAnucio'");
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }
    
    public function getAll(){

        try{

            $db = new Database();
            $query = $db->connect()->prepare('select users.id, anucio.id as idA, anucio.titulo, users.nome,users.subnome,anucio.areaActuacao,anucio.imagem from anucio inner join users on anucio.idUser=users.id');
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }
    public function getAllLimit(){

        try{

            $db = new Database();
            $query = $db->connect()->prepare('select users.id, anucio.id as idA, anucio.titulo, users.nome,users.subnome,anucio.areaActuacao,anucio.imagem from anucio inner join users on anucio.idUser=users.id ORDER BY anucio.id DESC LIMIT 10');
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }

} 