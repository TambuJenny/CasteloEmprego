<?php

namespace Webin\Anucios\controllers;

use Webin\Anucios\lib\Controller;

class Empresas extends Controller{

    function __construct()
    {
        parent::__construct();

    }

    public function auth(){

        
    header('location:../VAGAS/empresas');
                
    }
}