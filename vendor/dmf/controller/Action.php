<?php

namespace dmf\controller;

abstract class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view)
    {
        $class = get_class($this);
        $class = str_replace('app\\Controllers\\', '', $class);
        $class = strtolower(str_replace('Controller', '', $class));
        
        require_once "../app/Views/".$class."/".$view.".phtml";
    }
}
