<?php

namespace Webin\Anucios\controllers;

use PDOException;
use Webin\Anucios\lib\Controller;

use Webin\Anucios\models\Relatorio;

class RRelatorio extends Controller{

    function __construct()
    {
        parent::__construct();

    }

    public function auth(){

        
    header('location:../VAGAS/relatorio');
                
    }

    public function Usuario(){
        $Relatorio = new Relatorio();
        $result = $Relatorio->QtdUser();
        return $result;
    }
    public function Adesao(){
        $Relatorio = new Relatorio();
        $result = $Relatorio->QtdUadesao();
        return $result;
    }
    public function perfil(){
        $Relatorio = new Relatorio();
        $result = $Relatorio->QtdPerfil();
        return $result;
    }
    public function classificacao(){
        $Relatorio = new Relatorio();
        $result = $Relatorio->Qtdclassificacao();
        return $result;
    }
    public function solicitacao(){
        $Relatorio = new Relatorio();
        $result = $Relatorio->Qtdcsolicitacao();
        return $result;
    }

    public function anucio(){
        $Relatorio = new Relatorio();
        $result = $Relatorio->Qtdanucio();
        return $result;
    }
}