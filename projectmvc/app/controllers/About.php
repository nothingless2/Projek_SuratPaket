<?php

class About extends Controller {
    public function index(){
        $this->view('about/index');
        $this->view('default/header');
        $this->view('default/sidenav');
        
    }
    public function page(){
        
        $this->view('about/page');
    }
}