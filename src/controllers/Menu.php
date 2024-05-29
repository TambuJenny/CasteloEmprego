<?php

namespace Webin\Anucios\controllers;

use Webin\Anucios\lib\Controller;

class Menu extends Controller{

    function __construct()
    {
        parent::__construct();

    }

    public function auth(){

        
    header('location:../VAGAS/menu');
                
    }
}