<?php
    class Router{
        private $controller;
        private $method;
        private $sectionName='none';

        public function __construct(){
            $this->matchRoute();
        }
        public function matchRoute(){
            $indexHome=1;
            $url = explode('/', URL);
            $this->controller = !empty($url[$indexHome]) ? $url[$indexHome] : 'Home';
            // echo '<pre>  $this->controller 1: ' , var_dump( $this->controller) , '</pre>';
            // echo '<pre>  url: ' , var_dump( $url) , '</pre>';


            $file=null;
            if(!empty($url[$indexHome]) ) {
                if(!empty($url[2]) && !preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i', $url[2])){
                    $this->controller ='View';
                    $this->sectionName=$url[1].'/'.$url[2] ;
                }else{
                    $specialControllers = [
                        'getAssets' => 'Assets',
                        'email' => 'Email',
                        'reset' => 'Reset',
                        'init' => 'Init'
                    ];
                    
                    if (array_key_exists($this->controller, $specialControllers)) {
                        $this->controller = $specialControllers[$this->controller];
                    } else {
                        $this->controller = 'View';
                    }
                    $this->sectionName = $url[$indexHome];
                }
                // echo '<pre>  $this->sectionName: ' , var_dump( $this->sectionName) , '</pre>';

            }
            $this->controller = $this->controller . 'Controller';
            // echo '<pre>  $this->controller 2: ' , var_dump( $this->controller) , '</pre>';
            require_once(__DIR__ . '/controllers/'.ucfirst($this->controller).'.php');
        }
        public function run(){
            $controller = new $this->controller();
            $controller->draw($this->sectionName);
        }
    }