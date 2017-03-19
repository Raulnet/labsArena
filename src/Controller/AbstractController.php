<?php
/**
 * Created by PhpStorm.
 * User: raulnet
 * Date: 18/03/17
 * Time: 12:15
 */

namespace labs\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Twig_Environment;

abstract class AbstractController
{
    /**
     * @param Application $app
     * @return Twig_Environment
     */
    protected function twig(Application $app){
        return $app['twig'];
    }
}