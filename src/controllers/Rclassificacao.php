<?php

namespace Webin\Anucios\controllers;

use PDOException;
use Webin\Anucios\lib\Controller;
use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use Webin\Anucios\models\Classificacao;

class Rclassificacao extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function addclassificacao(){


        $id_user = $_SESSION["usuario"]['id'];
        $categoria = $_SESSION["usuario"]['categoria'];
        $email = $_SESSION["usuario"]['email'];
        $idPerfil = $_POST['idP'];
        $comentario = $_POST['comentario'];

        
        if(isset($categoria) && isset($email) && isset($id_user)){
            
            $classificacao = new Classificacao();

            $classificacao->save($id_user,$idPerfil,$comentario);
            
            header("location: ../VAGAS/signProfissional?idP=$idPerfil");
        }else{
            $this->render('errors/index');
           
        }

    }

    public function MostrarClassificacoes($idUser){
        $classificacao = new classificacao();
        $result = $classificacao->getById($idUser);
        return $result;
    }

    public function VerificarExists($idUser, $idPerfil){
        $classificacao = new classificacao();
        $resultExits = $classificacao->existclassificacao($idUser,$idPerfil);
        return $resultExits;
    }

    public function excluiRclassificacao(){
        $idPerfil = $_POST['idP'];
        $idUser = $_SESSION['usuario']['id'];
        $classificacao = new classificacao();
        $classificacao->Dellclassificacao($idUser,$idPerfil);
        header("location: ../VAGAS/signProfissional?idP=$idPerfil");
    }

    public function excluiRclassificacaoProfissional(){
        $id = $_POST['idP'];
        $classificacao = new classificacao();
        $classificacao->DellclassificacaoProfissional($id);
        header("location: ../VAGAS/empresasSolicitadas");
    }
}



?>