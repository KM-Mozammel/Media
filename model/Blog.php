<?php

class Blog{
    private $dbc;
    public $data;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function getBlog(){

        $sql = "SELECT * FROM blog";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();
        $this->data = $PageData;
    }
}