<?php

namespace app\Controllers;

use dmf\controller\Action;

class indexController extends Action
{
    public function index()
    {
        $this->render('index');
    }
}