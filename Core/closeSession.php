<?php

use Core\Session;

require_once dirname(__DIR__)."/Config/autoload.php";

Session::sessionStart();
Session::closeSession();