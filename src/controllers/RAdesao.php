<?php

namespace Webin\Anucios\controllers;

use PDOException;
use Webin\Anucios\lib\Controller;
use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use Webin\Anucios\models\Adesao;
use Webin\Anucios\models\Anucios;

class RAdesao extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function addVaga(){


        $idUser = $_SESSION["usuario"]['id'];
        $categoria = $_SESSION["usuario"]['categoria'];
        $email = $_SESSION["usuario"]['email'];
        $idAnucio = $_POST['idA'];
        
        if(isset($categoria) && isset($email) && isset($idUser)){

            $adesao = new Adesao();

            $adesao->save($idUser,$idAnucio);
            header("location: ../VAGAS/signEmpresa?idA=$idAnucio");
        }else{
            $this->render('errors/index');
           
        }

    }

    public function MostrarAdesoes($idUser){
        $adesao = new Adesao();
        $result = $adesao->getById($idUser);
        return $result;
    }

    public function VerificarExists($idUser, $idAdesao){
        $adesao = new Adesao();
        $resultExits = $adesao->existAdesao($idUser,$idAdesao);
        return $resultExits;
    }

    public function excluirAdesao(){
        $idAnucio = $_POST['idA'];
        $idUser = $_SESSION['usuario']['id'];
        $adesao = new Adesao();
        $adesao->DellAdesao($idUser,$idAnucio);
        header("location: ../VAGAS/signEmpresa?idA=$idAnucio");
    }

    public function excluirAdesaoVagas(){
        $id = $_POST['idA'];
        $adesao = new Adesao();
        $adesao->DellAdesaoEmprego($id);
        header("location: ../VAGAS/profissionaisAderidos");
    }



    public function MostrarGrafico(){
        $adesao = new Adesao();
        $result = $adesao->GetGraficoadesao();
        return $result;
    }
}



?>