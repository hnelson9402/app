<?php

namespace Config;

date_default_timezone_set('America/Bogota');

class ErrorLog
{

    public static function activateErrorLog()
    {
        error_reporting(E_ALL); // Reportar todos los errores de PHP
        ini_set('ignore_repeated_errors', TRUE); // Ignoramos errores repetidos
        ini_set('display_errors', FALSE); //FALSE No muestra los errores en el navegador
        ini_set('log_errors', TRUE); // Habilitamos el Log de errores
        ini_set('error_log', dirname(__DIR__) . '/Logs/php-error.log'); // Asignamos la dirección donde se guardaran los Logs

    }
}
