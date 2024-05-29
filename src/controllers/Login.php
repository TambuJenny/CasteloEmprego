<?php

namespace Webin\Anucios\controllers;

use Webin\Anucios\lib\Controller;
use Webin\Anucios\models\User;

class Login extends Controller{

    function __construct()
    {
        parent::__construct();

    }

    public function auth(){

        $email = $this->post('email');
        $password = $this->post('password');

        if(isset($email) && isset($password)){
            if(User::exists($email,$password)){

                $user = User::get($email);
                session_start();         
                $_SESSION["usuario"] = ($user); //serialize permite transformar o objecto em uma string que se pode guardar da sessão
                if($_SESSION['usuario']['categoria'] == "admin") {

                    header('location:../VAGAS/relatorio');    
                }
                header('location:../VAGAS/menu');
                 
            }else{
              //  error_log('Usuario não encontrado');
                header('location:../VAGAS/login');
            }
        }else{
            header('location:../VAGAS/login');
        }
    }
}