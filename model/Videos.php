<?php

class Video{
    public $data;
    private $dbc;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function getVideo(){
        
        $sql = "SELECT * FROM videos";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }
}