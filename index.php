<?php

require_once 'config/global.php';
require_once 'config/database.php';
require_once 'config/views.php';
require_once 'app/Helpers/Functions.php';
require_once 'app/vendor/autoload.php';
require_once 'autoload.php';

use App\Core\Router;

$router = new Router($_SERVER['REQUEST_URI']);

require_once 'routes/web.php';

$router->run();