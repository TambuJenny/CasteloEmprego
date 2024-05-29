<?php

namespace Webin\Anucios\controllers;

use Webin\Anucios\lib\Controller;
use Webin\Anucios\lib\UtilImages;
use Webin\Anucios\models\User;
use Webin\Anucios\models\PostImage;

class Home extends Controller{

    function __construct(private User $user)
    {
        parent::__construct();
    }

    public function index(){
        $posts=PostImage::getFeed();
        $this->render('home/index', ['user' => $this->user,'posts'=>$posts]);
    }

    public function store(){

        $title = $this->post('title');
        $image = $this->file('image');

        if(!is_null($title) && !is_null($image)){
           $fileName =  UtilImages::storeImage($image);
           $post = new PostImage($title,$fileName); 
           $this->user->publish($post);
           header('location:../VAGAS/home');

         }else{
         header('location:../VAGAS/home');
        }
}

}