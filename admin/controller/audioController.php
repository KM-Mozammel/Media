<?php 

class AudioController extends Controller{ 

    public function runBeforeAction(){
        if(isset($_SESSION['logedin'])){
            return true;
        } else{
            $Tempalte = new Template();
            $Tempalte->view("view/status-pages/login");
            die();
        }
    }
    public function audio($section){
        $Tempalte = new Template();
        $Tempalte->view($section);
    }

    // Get the form data;
    // put them into database;


}


