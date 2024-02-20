<?php

class HomePageController extends Controller{
    function default(){

        // fetch the SEO
        // get the page data
        // $title
        // $content
        // $variable


        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $PageObj = new HomeData($dbc);
        $PageObj->getAudio();
        $PageObj->getVideo();
        $PageObj->getblog();

        $variable['audio'] = $PageObj->audio;
        $variable['video'] = $PageObj->video;
        $variable['blog'] = $PageObj->blog;

        $template = new Template();
        $template->view('home', $variable);
    }
}
