<?php

namespace Webin\Anucios\controllers;
use Webin\Anucios\lib\Controller;
use Webin\Anucios\models\User;

class Signup extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    
    public function register(){

        $nome = $this->post('nome');
        $subnome = $this->post('subnome');
        $telefone = $this->post('telefone');
        $email = $this->post('email');
        $localizacao = $this->post('localizacao');
        $categoria = $this->post('categoria');
        $password = $this->post('password');
        $descricao = $this->post('descricao');
        
        if(isset($nome) && isset($password) && isset($email)){

            $user = new User();
            $user->save($nome,$subnome,$telefone,$email,$localizacao,$categoria,$password,$descricao);
            header('location: ../VAGAS/login');
        }else{
            $this->render('errors/index');
           
        }
    }
}