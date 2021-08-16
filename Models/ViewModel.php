<?php

namespace Models;

class ViewModel
{

    /*------------Method for show view----------*/
    protected static function getViewModel($view)
    {
        $whiteList = ['main' , 'user'];

        if (in_array($view, $whiteList)) {
            if (is_file('./Views/'.$view.'/' . $view . '-view.php')) {
                $content = './Views/'.$view.'/' . $view . '-view.php';
            } else {
                $content = '404';
            }
        } elseif ($view == 'login' || $view == 'index') {
            $content = 'login';
        } else {
            $content = '404';
        }
        return $content;
    }
}