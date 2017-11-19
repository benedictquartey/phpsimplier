<?php 
class Posts extends Controller{
    public function __construct(){
       
    }
    public function index(){
        $this->view('posts/index');
    }
        
   
}