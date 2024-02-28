<?php 

class AudioController extends Controller{ 

    // Checking if the user is loged in
    public function runBeforeAction(){
        if(isset($_SESSION['logedin'])){
            return true;
        } else{
            $Tempalte = new Template();
            $Tempalte->view("view/status-pages/login");
            die();
        }
    }

    // Show the add Audio Form
    public function audio($section){
        $Tempalte = new Template();
        $Tempalte->view($section);
    }

    // Showing data    
    public function show(){
        // Getting data from Model
        include ROOT_PATH . 'model/Audio.php';
        $showAudio = new Audio();
        $showAudio->showaudio();
        
        $Tempalte = new Template();
        $Tempalte->show("audio-pages/audio-list", $showAudio->data);
    }
    // update Data Form
    public function update(){
        include ROOT_PATH . 'model/Audio.php';
        $showAudio = new Audio();
        $showAudio->findById($_GET['id']);

        $Tempalte = new Template();
        $Tempalte->show("audio-pages/audio-update-form", $showAudio->data);

    }
}


