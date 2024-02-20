<?php

class BlogController extends Controller{
    function default(){
        
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new Blog($dbc);
        $PageObj->getBlog();
        $variable['pageObj'] = $PageObj->data;

        $template = new Template();
        $template->view('blog', $variable);
    }
}
