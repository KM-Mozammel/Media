<?php

class VideoController extends Controller{
    function default(){
        
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new Video($dbc);
        $PageObj->getVideo();
        $variable['pageObj'] = $PageObj->data;

        $template = new Template();
        $template->view('video', $variable);
    }
}
