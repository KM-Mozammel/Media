<?php 
class Controller {
    function runAction($section){

        if(method_exists($this, 'runBeforeAction')){
            $result = $this->runBeforeAction();
        }

        if(method_exists($this, $section)){
            $this->$section($section);
        } else {
            include 'view/status-pages/404.html';
        }
    }
}