<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use PDO;
use PDOException;

class Adesao extends Model{

    private int $idCliente;
    private int $idAnucio;

    public function save(int $idCliente, int $idAnucio)
    {
        $this->idCliente = $idCliente;
        $this->idAnucio = $idAnucio;

        try{
            $db = new Database();
            $query = $db->connect()->prepare("insert into adesao values (default,'$this->idAnucio','$this->idCliente',CURRENT_TIMESTAMP )");
            $query->execute();
         
            return true;
        }catch(PDOException $e){
            error_log($e);
            return false;
        }
    }

    public static function getEmpresa($areaActuacao){
        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM anucio WHERE area = :areaActuacao');
            $query->execute(['areaActuacao' => $areaActuacao]);
            $data = $query->fetch(PDO::FETCH_ASSOC);
            return $data;

        }catch(PDOException $e){
            return false;
        }
    } 
    public static function getById($idUser){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("select adesao.idUserCliente,adesao.data, adesao.idAnucio, adesao.id, users.nome,users.subnome, users.email,users.telefone,users.localizacao,users.categoria,perfil.id as idP from adesao inner join users on users.id=adesao.idUserCliente inner join perfil on perfil.idUser=users.id inner join  anucio on anucio.id=adesao.idAnucio where anucio.idUser=$idUser");
            $query->execute();

            return $query;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function existAdesao($idCliente,$idAnucio){
        try{
            $db = new Database();
            $query = $db->connect()->prepare("select *from adesao where idUserCliente = $idCliente and idAnucio=$idAnucio");
            $query->execute();
            return $query->rowCount() > 0;

        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public static function DellAdesao($idCliente,$idAnucio){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("delete from adesao where idUserCliente=$idCliente and idAnucio=$idAnucio");
            $query->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function DellAdesaoEmprego($id){
        try{

            $db = new Database();
            $query = $db->connect()->prepare("delete from adesao where id=$id");
            $query->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }


    public static function GetGraficoadesao(){
        try{
            $data = date('Y');
            $Qtadesao = [];
            $db = new Database();
            $cont = 1;
            
            while($cont < 13){

                $query = $db->connect()->prepare("select SUM(adesao.id) as adesao from adesao where data LIKE '2023-0$cont%'" );
                $query->execute();
                $data = $query->fetch(PDO::FETCH_ASSOC);
                $adesao = $data['adesao'];
                      
                if($adesao == 0){
                    array_push($Qtadesao, 0);
                }else{
                    array_push($Qtadesao, $adesao);
                }
                $cont++;
            }

            return $Qtadesao;

        }catch(PDOException $e){
            return false;
        }
    }

}


?>