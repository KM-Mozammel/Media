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
        if(isset($_POST['id'])){
            include ROOT_PATH . 'model/Post.php';
            $updateAudio = new Post();
            $updateAudio->updatePost($_POST['id']);
            die();
        }
        
        include ROOT_PATH . 'model/post.php';
        $showPost = new Post();
        $showPost->findById($_GET['id']);

        $Tempalte = new Template();
        $Tempalte->show("blog-pages/blog-update-form", $showPost->data);

    }
    // Delete from database

    public function delete($id){
        include_once ROOT_PATH. 'model/Post.php';
        $deleteAudio = new Post();
        $deleteAudio->delete($id);
    }

}