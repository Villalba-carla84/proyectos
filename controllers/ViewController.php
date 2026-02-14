<?php
class ViewController extends Controller
{
    public function draw($info)
    {
        $this->render($info,[] , 'layout');
    }
   
}
?>



