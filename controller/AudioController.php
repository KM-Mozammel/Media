<?php

class AudioController extends Controller{
    function default(){
        // Getting Database Connection
        
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        // Fetching Data from Database
        $PageObj = new Audio($dbc);
        $PageObj->getAudio();
        $variable['pageObj'] = $PageObj->data;

        // Showing data into html file

        $template = new Template();
        $template->view('audio', $variable);

    }
}
