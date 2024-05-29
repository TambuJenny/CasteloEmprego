<?php

namespace Webin\Anucios\models;

use Webin\Anucios\lib\Database;
use Webin\Anucios\lib\Model;
use Webin\Anucios\models\User;
use PDO;
use PDOException;

class Post extends Model{
    private string $id;
    private array $likes;
    private User $user;

    public function __construct(private string $title){
        parent::__construct();
        $this->likes = [];
    }
    public function getId():string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getLikes(){
        return count($this->likes);
    }

    
    public function setUser(User $value){
        $this->user = $value;
    }
    public function getUser(){
        return $this->user;
    }


    public function fetchLikes(){
        $items = [];

        try{
            $db = new Database();
            $query = $db->connect()->prepare('SELECT * FROM likes WHERE post_id = :post_id');
            $query->execute(['post_id' => $this->id]);

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new Like($p['post_id'],$p['user_id']);
                $item->setId($p['id']);
                array_push($items, $item);
            }
            $this->likes=$items;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public function addLike(User $user){
     /* if($this->checkIfUserLiked($user)){
            $this->removeLike($user);
        }else{*/
            $like = new Like($this->id,$user->getId());
            $like->save();
            array_push($this->likes, $like); 
       // }
    }

    public function setLikes($value){
        $this->likes = $value;
    }

    protected function checkIfUserLiked(User $user):bool{
        $found = array_filter(
            $this->likes,
            function(Like $like) use ($user){
                return $like->getUserId() === $user->getId();
            }
        );
        return count($found) > 0;

    }

    public function removeLike(User $user){
        $found = array_filter(
            $this->likes,
            function(Like $like) use ($user){
                return $like->getUserId() === $user->getId();
            }
        );
        $found[0]->remove($user->getId());
    }
}