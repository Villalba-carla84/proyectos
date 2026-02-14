<?php
class HomeController extends Controller
{
    public function draw()
    {
        $this->render('home',[] , 'layout');
    }
   
}
