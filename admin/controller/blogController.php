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
    // Get the form data;
    // put them into database;
    // Get the form data;
    // put them into database;

}