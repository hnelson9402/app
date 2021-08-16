<?php

/**
 * *********************************************************
 *        Load file required dynamically                   *
 * *********************************************************
 * 
 * 
 */

spl_autoload_register(function($class){

     //path of project
     $SERVER = dirname(__DIR__)."/";

     //Dynamic route of file
     $route = $SERVER. str_replace("\\" , "/" , $class . ".php");       

     //validate if the file exists
     if (is_readable($route)) {
          require_once "".$route;
     }else{
          echo "No se puede ubicar el archivo";
     }

 });