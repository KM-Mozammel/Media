<?php

class Template{

    public function view($template, $variable){
        include VIEW_PATH . 'layout/default.html';
    }
}