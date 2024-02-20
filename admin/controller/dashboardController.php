<?php 

class DashboardController extends Controller{  

    public function runBeforeAction(){
        if(isset($_SESSION['logedin'])){
            return true;
        } else{
            $Tempalte = new Template();
            $Tempalte->view("view/status-pages/login");
            die();
        }
    }
    public function default($section){
        $Tempalte = new Template();
        $Tempalte->view("dashboard");
    }
    // Get the form data;
    // put them into database;

}