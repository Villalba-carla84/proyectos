<?php
class PagesController extends Controller
{
    public function draw($info)
    {
        // echo '<pre>  $info: ' , var_dump( $info) , '</pre>';
 
        ob_start();
        require_once(__DIR__ . '/../partials/pages/'.$info.'.php');
        $content = ob_get_clean();
        

        $this->render('page',[ 'htmlContent' => isset($content)?$content:null] , 'layout');
    }
   
}


