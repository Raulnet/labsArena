<?php
/**
 * Created by PhpStorm.
 * User: raulnet
 * Date: 18/03/17
 * Time: 10:42
 */

require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
require __DIR__.'/../app/config/dev.php';
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';
$app->run();