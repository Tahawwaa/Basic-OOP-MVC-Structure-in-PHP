<?php

  class core{
    protected $currentcontroller = 'pages';
    protected $currentmethod = 'index';
    protected $params = [];
    
    public function __construct(){
        $url = $this->getUrl();
        print_r($url);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
          return $_GET['url'];
        }
    }
  }