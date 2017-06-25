<?php
/**
 * Created by PhpStorm.
 * User: raulnet
 * Date: 18/03/17
 * Time: 10:38
 */
$app->get('/', "labs\Controller\AppController::indexAction")->bind('home');
$app->get('/draw', "labs\Controller\AppController::drawAction")->bind('draw');
$app->match('/svg', "labs\Controller\AppController::svgAction")->bind('svg');
$app->match('/svg2', "labs\Controller\AppController::svg2Action")->bind('svg2');
$app->match('/polymer', "labs\Controller\AppController::polymerAction")->bind('polymer');
