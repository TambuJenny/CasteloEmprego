<?php

namespace Webin\Anucios\controllers;
use Webin\Anucios\lib\Controller;
use Webin\Anucios\models\Perfil;

class RPerfil extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    
    public function addPerfil(){

        $nivelAcademico = $this->post('nivelAcademico');
        $habilidades = $this->post('habilidades');
        $area = $this->post('area');
        $categoria = $this->post('categoria');
        $informacoes = $this->post('informacoes');

        $imagem = $_FILES['imagem'];
        $curriculum =  $_FILES['curriculum'];

        //$imgext = $imagem['name'];
        //$curext =$curriculum['name'];
        
        $Imgextensao = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));
        $Curriculumextensao = strtolower(pathinfo($curriculum['name'], PATHINFO_EXTENSION));

        $imgNovoNome = "img".uniqid().".".$Imgextensao;
        $CurriculumNovoNome = "curiculum".uniqid().".".$Curriculumextensao;

        

        move_uploaded_file($imagem["tmp_name"], "./public/" .$imgNovoNome);
        move_uploaded_file($curriculum["tmp_name"], "./public/" .$CurriculumNovoNome);



        $id_user = $_SESSION["usuario"]['id'];
        
        if(isset($area) && isset($categoria) && isset($id_user)){

            $user = new Perfil();

            $user->save($nivelAcademico,$habilidades,$area,$categoria,$informacoes,$imgNovoNome,$CurriculumNovoNome,$id_user);
            header('location: ../VAGAS/profissionais');
        }else{
            $this->render('errors/index');
           
        }
    }
    public function MostrarPerfil(){
        $perfil = new Perfil();
        $result = $perfil->getAll();
        return $result;
    }
    public function MostrarPerfilLimitado(){
        $perfil = new Perfil();
        $result = $perfil->getAllLimite();
        return $result;
    }
    public function MostrarPerfilUnico($id_perfil){
        $perfil = new Perfil();
        $result = $perfil->getById($id_perfil);
        return $result;
    }
}