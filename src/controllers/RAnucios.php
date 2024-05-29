<?php

namespace Webin\Anucios\controllers;
use Webin\Anucios\lib\Controller;
use Webin\Anucios\models\Anucios;

class RAnucios extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    
    public function addAnucio(){

        $titulo = $this->post('titulo');
        $descricao = $this->post('descricao');
        $areaActuacao = $this->post('areaActuacao');
        $vagas = $this->post('vagas');
        $dataFinal = $this->post('dataFinal');
        $contrato = $this->post('contrato');
        $imagem = $_FILES['imagem'];

        $Logoextensao = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));

        $LogoNovoNome = "logo".uniqid().".".$Logoextensao;

        move_uploaded_file($imagem["tmp_name"], "./public/" .$LogoNovoNome);



        $idUser = $_SESSION["usuario"]['id'];
        
        if(isset($areaActuacao) && isset($idUser)){

            $anucio =  new Anucios();

            $anucio->saveAnucio($titulo,$descricao,$areaActuacao,$vagas,$contrato,$LogoNovoNome,$idUser,$dataFinal);
            header('location: ../VAGAS/empresas');
        }else{
            $this->render('errors/index');
           
        }
    }
    public function Mostraranucio(){
        $anucio = new Anucios();
        $result = $anucio->getAll();
        return $result;
    }

    public function MostraranucioLimit(){
        $anucio = new Anucios();
        $result = $anucio->getAllLimit();
        return $result;
    }
    public function MostraranucioUnico($id_anucio){
        $anucio = new Anucios();
        $result = $anucio->getById($id_anucio);
        return $result;
    }
}