<?php

namespace Webin\Anucios\controllers;

use Webin\Anucios\lib\Controller;
use Webin\Anucios\models\User;
use Webin\Anucios\models\PostImage;

class Actions extends Controller{

    function __construct(private User $user)
    {
        parent::__construct();
    }

    public function like(){
        $post_id = $this->post('post_id');
        $origin = $this->post('origin');
        if(!is_null($post_id) && !is_null($origin)){
            $post = PostImage::get($post_id);
            $post->addLike($this->user);
            header('location: ../INSTAGRAM/'.$origin);
        }
    }

}