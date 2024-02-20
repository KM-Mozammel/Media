<?php

    class Router {
        public $id;
        public $module;
        public $action;
        public $entity_id;
        public $pretty_url;

        private $dbc;

        public function __construct($dbc)
        {
            $this->dbc = $dbc;
        }

        public function findBy($pretty_url){

            $sql = "SELECT * FROM routers WHERE pretty_url = :pretty_url";
            $stmt = $this->dbc->prepare($sql);
            $stmt->execute(['pretty_url' => $pretty_url]);
            $pageData = $stmt->fetch();

            $this->id = $pageData['id'];
            $this->module = $pageData['module'];
            $this->action = $pageData['action'];
            $this->entity_id = $pageData['entity_id'];
            $this->pretty_url = $pageData['pretty_url'];

        }
    }