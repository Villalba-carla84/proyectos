<?php
    class Controller{
        protected function render($path ,$parameters = [], $layout = ''){
            ob_start();
            require_once(__DIR__ . '/../views/'.$path.'.php');
            $content = ob_get_clean();
            require_once(__DIR__ . '/../layouts/'.$layout.'.php');
        }
    }