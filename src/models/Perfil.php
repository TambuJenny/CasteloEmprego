<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class Perfil extends Model{

   private string $nome;
   private string $area;
   private string $imagem;

   
    public function save(string $nivelAcademico,string $habilidades,$area,string $categoria
    ,string $informacoes,string $imagem, string $curriculum, int $id_user)
    {
        try{
            $db = new Database();
            $query = $db->connect()->prepare("INSERT INTO perfil VALUES (default,'$nivelAcademico', '$habilidades',
            '$area','$categoria','$informacoes','$imagem','$curriculum','$id_user')");
            $query->execute();
         
            return true;
        }catch(PDOException $e){
            error_log($e);
            return false;
        }
    } 


    public static function get($area){
        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM perfil WHERE area = :area');
            $query->execute(['area' => $area]);
            $data = $query->fetch(PDO::FETCH_ASSOC);
            return $data;

        }catch(PDOException $e){
            return false;
        }
    }

    public static function getById($id_perfil){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("select users.id, perfil.id as idP,users.nome,perfil.habilidades, users.subnome,users.telefone,users.email,users.descricao,perfil.nivelAcademico,perfil.categoria,perfil.area,perfil.informacoes,perfil.imagem,perfil.curriculum 
            from perfil inner join users on perfil.idUser=users.id 
            where perfil.id ='$id_perfil'");
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public function getAll(){

        try{

            $db = new Database();
            $query = $db->connect()->prepare('select users.id, perfil.id as idP, users.nome,users.subnome,perfil.area,perfil.imagem from perfil inner join users on perfil.idUser=users.id');
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }
    public function getAllLimite(){

        try{

            $db = new Database();
            $query = $db->connect()->prepare('select users.id, perfil.id as idP, users.nome,users.subnome,perfil.area,perfil.imagem from perfil inner join users on perfil.idUser=users.id ORDER BY perfil.id DESC LIMIT 10');
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }

   /**
    * Get the value of nome
    */ 
   public function getNome()
   {
      return $this->nome;
   }

   /**
    * Set the value of nome
    *
    * @return  self
    */ 
   public function setNome($nome)
   {
      $this->nome = $nome;

      return $this;
   }

   /**
    * Get the value of area
    */ 
   public function getArea()
   {
      return $this->area;
   }

   /**
    * Set the value of area
    *
    * @return  self
    */ 
   public function setArea($area)
   {
      $this->area = $area;

      return $this;
   }

   /**
    * Get the value of imagem
    */ 
   public function getImagem()
   {
      return $this->imagem;
   }

   /**
    * Set the value of imagem
    *
    * @return  self
    */ 
   public function setImagem($imagem)
   {
      $this->imagem = $imagem;

      return $this;
   }
} 