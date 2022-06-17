<?php

    namespace app\Controllers;

    // Models
    use MFP\Model\Container;

    // Resources
    use dmf\controller\Action;

    class indexController extends Action
    {
        public function index()
        {
            $this->render('index');
        }
    }
