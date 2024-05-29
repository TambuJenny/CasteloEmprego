<?php

namespace Webin\Anucios\controllers;

use PDOException;
use Webin\Anucios\lib\Controller;
use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use Webin\Anucios\models\Adesao;
use Webin\Anucios\models\Solicitacao;

class Rsolicitacao extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function addSolicitacao(){


        $id_user = $_SESSION["usuario"]['id'];
        $categoria = $_SESSION["usuario"]['categoria'];
        $email = $_SESSION["usuario"]['email'];
        $idPerfil = $_POST['idP'];
        
        if(isset($categoria) && isset($email) && isset($id_user)){

            $solicitacao = new Solicitacao();

            $solicitacao->save($id_user,$idPerfil);
            header("location: ../VAGAS/signProfissional?idP=$idPerfil");
        }else{
            $this->render('errors/index');
           
        }

    }

    public function MostrarSolicitacoes($idUser){
        $solicitacao = new Solicitacao();
        $result = $solicitacao->getById($idUser);
        return $result;
    }

    public function VerificarExists($idUser, $idPerfil){
        $solicitacao = new Solicitacao();
        $resultExits = $solicitacao->existSolicitacao($idUser,$idPerfil);
        return $resultExits;
    }

    public function excluirSolicitacao(){
        $idPerfil = $_POST['idP'];
        $idUser = $_SESSION['usuario']['id'];
        $solicitacao = new Solicitacao();
        $solicitacao->DellSolicitacao($idUser,$idPerfil);
        header("location: ../VAGAS/signProfissional?idP=$idPerfil");
    }

    public function excluirSolicitacaoProfissional(){
        $id = $_POST['idP'];
        $solicitacao = new Solicitacao();
        $solicitacao->DellSolicitacaoProfissional($id);
        header("location: ../VAGAS/empresasSolicitadas");
    }



    public function MostrarGrafico(){
        $solicitacao = new Solicitacao();
        $result = $solicitacao->GetGraficosolicitacao();
        return $result;
    }

}



?>