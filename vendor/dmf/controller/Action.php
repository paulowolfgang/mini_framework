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
        $this->view->page = $view;
        require_once "../app/Views/layoutExample.phtml";
    }

    protected function content()
    {
        $class = get_class($this);
        $class = str_replace('app\\Controllers\\', '', $class);
        $class = strtolower(str_replace('Controller', '', $class));
        
        require_once "../app/Views/".$class."/".$this->view->page.".phtml";
    }
}
