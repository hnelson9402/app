<?php

namespace Controllers;

use Models\ViewModel;

require_once dirname(__DIR__).'/Config/autoload.php';

class ViewController extends ViewModel
{

    public function getTemplateView()
    {
        return require_once dirname(__DIR__) . '/Views/layout/layout.php';        
    }

    public function getViewController()
    {
        if (isset($_GET['route'])) {
            $route = explode('/', $_GET['route']);
            $response = ViewModel::getViewModel($route[0]);
        } else {
            $response = 'login';
        }
        return $response;
    }
}
