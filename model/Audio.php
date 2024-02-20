<?php

class Audio{
    private $dbc;
    public $data;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function getAudio(){
        
        $sql = "SELECT * FROM audio";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }

}