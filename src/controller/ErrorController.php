<?php

namespace App\src\controller;
use App\src\model\View;

class ErrorController
{
    private $view;

    public function errorNotFound()
    {
        return $this->view->render('error_404',[]);
    }

    public function errorServer()
    {
        return $this->view->render('error_500',[]);
    }

}