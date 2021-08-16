<?php

use Config\ErrorLog;
use Core\Session;

require_once dirname(__DIR__) . '/Config/autoload.php';

ErrorLog::activateErrorLog();

if (empty($_POST['name']) || empty($_POST['rol']) ) {
    echo json_encode('vacio');
} else {
    Session::sessionStart();

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['rol'] = $_POST['rol'];
    $_SESSION['status'] = true;

    echo json_encode('listo');
}
