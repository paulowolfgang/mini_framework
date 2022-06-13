<?php

namespace app\Controllers;

class indexController
{

    private $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function render($view)
    {
        $class = get_class($this);
        $class = str_replace('app\\Controllers\\', '', $class);
        $class = strtolower(str_replace('Controller', '', $class));
        
        require_once "../app/Views/".$class."/".$view.".phtml";
    }

    public function index()
    {
        $this->render('index');
    }
}