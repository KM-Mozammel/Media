<?php 

class BlogController extends Controller{  
    public function runBeforeAction(){
        if(isset($_SESSION['logedin'])){
            return true;
        } else{
            $Tempalte = new Template();
            $Tempalte->view("view/status-pages/login");
            die();
        }
    }
    public function blog($section){
        $Tempalte = new Template();
        $Tempalte->view($section);
    }
    
    // Showing data    
    public function show(){
        // Getting data from Model
        include ROOT_PATH . 'model/Post.php';
        $showPost = new Post();
        $showPost->showpost();
        
        $Tempalte = new Template();
        $Tempalte->show("blog-pages/blog-list", $showPost->data);
    }
    // update Data Form
    public function update(){
        include ROOT_PATH . 'model/post.php';
        $showPost = new Post();
        $showPost->findById($_GET['id']);

        $Tempalte = new Template();
        $Tempalte->show("blog-pages/blog-update-form", $showPost->data);

    }

}