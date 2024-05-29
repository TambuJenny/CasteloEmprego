<?php

use Webin\Anucios\controllers\Admin;
use Webin\Anucios\controllers\Login;
use Webin\Anucios\controllers\Menu;
use Webin\Anucios\controllers\Profissionais;
use Webin\Anucios\controllers\Empresas;
use Webin\Anucios\controllers\Conta;
use Webin\Anucios\controllers\Signup;
use Webin\Anucios\controllers\Home;
use Webin\Anucios\controllers\RPerfil;
use Webin\Anucios\controllers\RAdesao;
use Webin\Anucios\controllers\RAnucios;
use Webin\Anucios\controllers\Rclassificacao;
use Webin\Anucios\controllers\Relatorio;
use Webin\Anucios\controllers\RRelatorio;
use Webin\Anucios\controllers\Rsolicitacao;
use Webin\Anucios\models\Anucios;
use Webin\Anucios\models\Solicitacao;

$router = new \Bramus\Router\Router();
session_start();

$dontenv=Dotenv\Dotenv::createImmutable(__DIR__ . '/../config');
$dontenv->load();

function notAuth(){
    if(!isset($_SESSION['user'])){
        header('location:../ANUCIOS/login');
        exit();
    }
}
function auth(){
    if(isset($_SESSION['user'])){
        header('location:../ANUCIOS/home');
        exit();
    }
}


$router->before('GET', '/', function() { 

        header('location: menu');
});


$router->get('/', function() { 
    echo "home";
});

$router->get('/login', function() {
    auth();
    $controller = new Login;
    $controller->render('login/index');
});


$router->post('/auth', function() {
    auth();
    $controller = new Login;
    $controller->auth();
});

$router->get('/signup', function() { 
    auth();
    $controller = new Signup;
    $controller->render('signup/index');
});

$router->get('/empresas', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('empresas/index');
});
$router->get('/menu', function() { 
    auth();
    $controller = new Menu;
    $controller->render('menu/index');
});

$router->get('/signEmpresa', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('empresas/signEmpresa');
});
$router->get('/criarAnucio', function() { 
    auth();
    if(($_SESSION['usuario']['id'] != null) && ($_SESSION['usuario']['categoria'])=="Empregador"){

        $controller = new Empresas;
        $controller->render('empresas/criarAnucio');
    }else{

        $controller = new Empresas;
        $controller->render('empresas/index');

    }
});
$router->get('/mostrarDados', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('empresas/mostrarDados');
});

$router->get('/sair', function() { 
    auth();
    session_destroy();
    session_unset();
    unset($_SESSION['usuario']);

    $controller = new Empresas;
    $controller->render('menu/index');
});

$router->get('/profissionaisAderidos', function() { 
    auth();
    if(($_SESSION['usuario']['id'] != null) && ($_SESSION['usuario']['categoria'])=="Empregador"){
        $controller = new Empresas;
        $controller->render('empresas/profissionaisAderidos');
    }else{
        $controller = new Empresas;
        $controller->render('empresas/profissionais');
    }
});

$router->get('/conta', function() { 
    auth();
    $controller = new Conta;
    $controller->render('conta/index');
});

$router->get('/perfil', function() { 
    auth();
    
    if(($_SESSION['usuario']['id'] != null) && ($_SESSION['usuario']['categoria'])=="Profissional"){
        $controller = new Conta;
        $controller->render('conta/perfil');
    }else{
        $controller = new Conta;
        $controller->render('profissionais/index');
    }

});

$router->get('/profissionais', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('profissionais/index');
});

$router->get('/criarAnucioP', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('profissionais/criarAnucioP');
});


$idProfissional = $_GET['idP'];
$router->get("/signProfissional?idP=$idProfissional", function() { 
    auth();
    $controller = new Empresas;
    $controller->render('profissionais/signProfissional');
});

$router->get('/signProfissional', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('profissionais/signProfissional');
});

$router->get('/empresasSolicitadas', function() { 
    auth();
    $controller = new Empresas;
    $controller->render('profissionais/empresasSolicitadas');
});


$router->get('/admin', function(){
$controller = new Admin;
$controller->render('admin/index');
});

$router->get('/relatorio', function(){
    $controller = new RRelatorio;
    $controller->render('relatorio/index');
    });

$router->post('/register', function() { 
    auth();
    $controller = new Signup;
    $controller->register();
});

$router->post('/registarAnucio', function() { 
    auth();
    $user = unserialize($_SESSION['usuario']);
    $controller = new RAnucios;
    $controller->addAnucio();
});



$router->post('/deletarSolicitacao', function() { 
    auth();
    $controller = new Rsolicitacao;
    $controller->excluirSolicitacao();
});
$router->post('/deletarVaga', function() { 
    auth();
    $controller = new RAdesao;
    $controller->excluirAdesao();
});


$router->post('/deletarSolicitacaoProfissional', function() { 
    auth();
    $controller = new Rsolicitacao;
    $controller->excluirSolicitacaoProfissional();
});

$router->post('/deletarAdesaEmpresa', function() { 
    auth();
    $controller = new RAdesao;
    $controller->excluirAdesaoVagas();
});

$router->post('/addPerfil', function() { 
    auth();
    $user = unserialize($_SESSION['usuario']);
    $controller = new RPerfil;
    $controller->addPerfil();
});

$router->get('/home', function() {
    notAuth();
    $user = unserialize($_SESSION['usuario']); // volto a transformar user em objecto
    $controller = new Home($user);
    $controller->index();
});

$router->post('/publish', function() { 
    notAuth();
    $user = unserialize($_SESSION['usuario']);
    $controller = new Home($user);
    $controller->store();
});


$router->get('/signout', function() {
    notAuth();
    unset($_SESSION['user']);
    header('location: ../ANUCIOS/login');
});


$router->post('/solicitarProfissional', function() { 
    auth();
    $controller = new Rsolicitacao;
    $controller->addSolicitacao();
});

$router->post('/classificarProfissional', function() { 
    auth();
    $controller = new Rclassificacao;
    $controller->addclassificacao();
});

$router->post('/solicitarVaga', function() { 
    auth();
    $controller = new RAdesao;
    $controller->addVaga();
});


$router->run(); 











