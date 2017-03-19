<?php
/**
 * Created by PhpStorm.
 * User: raulnet
 * Date: 18/03/17
 * Time: 11:35
 */

namespace labs\Controller;

use Silex\Application;

class AppController extends AbstractController
{
    /**
     * @param Application $app
     * @return string
     */
    public function indexAction(Application $app){

        return $this->twig($app)->render('/Home/index.html.twig', []);
    }

    /**
     * @param Application $app
     * @return string
     */
    public function drawAction(Application $app){
        return $this->twig($app)->render('/Home/draw.html.twig', []);
    }
}