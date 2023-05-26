<?php

namespace  App\Controllers;


class Error404Controller extends Controller{
   public function index(){
    $isCarouser=false;
    $title='404 page not found  - '.WEB_NAME;

    $this->render('404', compact('title', 'isCarouser'), 'home');
    }
}

