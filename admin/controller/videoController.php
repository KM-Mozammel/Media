<?php 

class VideoController extends Controller{  
    public function runBeforeAction(){
        if(isset($_SESSION['logedin'])){
            return true;
        } else{
            $Tempalte = new Template();
            $Tempalte->view("view/status-pages/login");
            die();
        }
    }
    public function video($section){
        $Tempalte = new Template();
        $Tempalte->view($section);
    }
    // Showing data    
    public function show(){
        // Getting data from Model
        include ROOT_PATH . 'model/Video.php';
        $showVideo = new Video();
        $showVideo->showvideo();
        
        $Tempalte = new Template();
        $Tempalte->show("video-page/video-list", $showVideo->data);
    }
    // update Data Form
    public function update(){
        if(isset($_POST['id'])){
            include ROOT_PATH . 'model/Video.php';
            $updateAudio = new Video();
            $updateAudio->updateVideo($_POST['id']);
            die();
        }

        include ROOT_PATH . 'model/Video.php';
        $showVideo = new Video();
        $showVideo->findById($_GET['id']);

        $Tempalte = new Template();
        $Tempalte->show("video-page/video-update-form", $showVideo->data);

    }
    // Delete from database

    public function delete($id){
        include_once ROOT_PATH. 'model/Video.php';
        $deleteAudio = new Video();
        $deleteAudio->delete($id);
    }
}