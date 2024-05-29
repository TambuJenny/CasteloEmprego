<?php

namespace Webin\Anucios\models;
use Webin\Anucios\lib\Model;
use PDOException;

class Like extends Model{

    private string $id;
    private $db;
    public function __construct(private int $post_id, private int $user_id)
    {
        parent::__construct();
    }

    public function save(){
        try{
            $query = $this->prepare('INSERT INTO likes (post_id, user_id) VALUES(:post_id, :user_id)');
            $query->execute([
                'post_id'  => $this->post_id, 
                'user_id'  => $this->user_id
                ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function remove($user_id){
        try{
            
            $query = $this->db->execute('DELETE FROM likes WHERE user_id = :user_id AND post_id = :post_id');
            $query->execute([
                'post_id'  => $this->post_id, 
                'user_id'  => $user_id
                ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function setUserId($value){
        $this->id = $value;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }


    public function getPostId(){
        return $this->post_id;
    }
    public function getUserId(){
        return $this->user_id;
    }

}