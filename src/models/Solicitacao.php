<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class Solicitacao extends Model{

    private int $idUser;
    private int $idPerfil;

    public function save(int $idUser, int $idPerfil)
    {
        $this->idUser = $idUser;
        $this->idPerfil = $idPerfil;

        try{
            $db = new Database();
            $query = $db->connect()->prepare("insert into solicitacoes values (default,'$this->idUser','$this->idPerfil',CURRENT_TIMESTAMP )");
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
    public static function getById($idUser){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("select solicitacoes.idUser,solicitacoes.data, solicitacoes.idPerfil, solicitacoes.id, users.nome,users.subnome, users.email,users.telefone,users.localizacao,users.categoria,anucio.id as idAnucio from solicitacoes inner join users on users.id=solicitacoes.idUser inner join anucio on anucio.idUser = users.id inner join  perfil on perfil.id=solicitacoes.idPerfil where perfil.idUser=$idUser");
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function existSolicitacao($idUser,$idPerfil){
        try{
            $db = new Database();
            $query = $db->connect()->prepare("select *from solicitacoes where idUser = $idUser and idPerfil=$idPerfil");
            $query->execute();
            return $query->rowCount() > 0;

        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public static function DellSolicitacao($idUser,$idPerfil){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("delete from solicitacoes where idUser=$idUser and idPerfil=$idPerfil");
            $query->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function DellSolicitacaoProfissional($id){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("delete from solicitacoes where id=$id");
            $query->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }


    public static function GetGraficosolicitacao(){
        try{
            $data = date('Y');
            $Qtsolicitacao = [];
            $db = new Database();
            $cont = 1;
            
            while($cont < 13){

                $query = $db->connect()->prepare("select SUM(solicitacoes.id) as solicitacao from solicitacoes where data LIKE '2023-0$cont%'" );
                $query->execute();
                $data = $query->fetch(PDO::FETCH_ASSOC);
                $solicitacao = $data['solicitacao'];
                      
                if($solicitacao == 0){
                    array_push($Qtsolicitacao, 0);
                }else{
                    array_push($Qtsolicitacao, $solicitacao);
                }
                $cont++;
            }

            return $Qtsolicitacao;

        }catch(PDOException $e){
            return false;
        }
    }

}


?>