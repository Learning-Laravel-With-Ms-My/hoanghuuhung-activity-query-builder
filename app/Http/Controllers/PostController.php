<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $posts;
    public function __construct(){
        $this->posts = new Post();
    }
    public function index(){
        $allPosts = $this->posts->getAllPosts();
        foreach ($allPosts as $post){
            echo '<h5>'.$post->id.'</h5>';
            echo "tittle is: ".$post->title."<br/>";
            echo "Description:".$post->description;
            echo '<br />';
        }
    }
    public function onePost($id){
        $post = $this->posts->getOnePost($id);
        dd($post);
    }
    public function create(){
        $this->posts->insertData();
    }
    public function update(){
        $this->posts->updatePost();
    }
    public function readData(){
        $this->posts->readData();
    }
    public function delete(){
        $this->posts->deletePost();
    }
}
