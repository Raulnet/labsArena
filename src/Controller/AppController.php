<?php
/**
 * Created by PhpStorm.
 * User: raulnet
 * Date: 18/03/17
 * Time: 11:35
 */

namespace labs\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class AppController extends AbstractController
{
    /**
     * @param Application $app
     * @return string
     */
    public function indexAction(Application $app){

        return $this->twig($app)->render('/Home/index.html.twig', [

        ]);
    }

    /**
     * @param Application $app
     * @return string
     */
    public function drawAction(Application $app){
        return $this->twig($app)->render('/Home/draw.html.twig', []);
    }

    /**
     * @param Application $app
     * @param Request $request
     * @return string
     */
    public function svgAction(Application $app, Request $request){

        if($request->getMethod() == 'POST'){
            $data = $request->getContent();
            dd($data);
        }
        $block = [
            ['label' => 'A',
                'seats' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
            ],
            ['label' => 'B',
                'seats' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
            ],
            ['label' => 'C',
                'seats' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
            ],
            ['label' => 'D',
                'seats' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
            ]
        ];

        return $this->twig($app)->render('/Home/svg.html.twig', [
            'block' => $block
        ]);
    }

}