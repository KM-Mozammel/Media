<?php 

    class HomeData{
        public $audio;
        public $video;
        public $blog;

        private $dbc;

        public function __construct($dbc)
        { 
          $this->dbc = $dbc;  
        }

        public function getAudio(){
        
            $sql = "SELECT * FROM audio";
            $stmt = $this->dbc->prepare($sql);
            $stmt->execute();
            $PageData = $stmt->fetchAll();
    
            $this->audio = $PageData;
            
        }

        public function getBlog(){

            $sql = "SELECT * FROM blog";
            $stmt = $this->dbc->prepare($sql);
            $stmt->execute();
            $PageData = $stmt->fetchAll();
            $this->blog = $PageData;
        }

        public function getVideo(){
        
            $sql = "SELECT * FROM videos";
            $stmt = $this->dbc->prepare($sql);
            $stmt->execute();
            $PageData = $stmt->fetchAll();
    
            $this->video = $PageData;
    
        }

    }