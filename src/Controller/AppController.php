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
        $seats = [];
        for($i = 0; $i < 20; $i++){
            $seats [] = $i;
        }
        return $this->twig($app)->render('/Home/index.html.twig', [
            'seats' => $seats,
            'rows' => [1,2,3,4,5,6,7,8,9,10]
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
        $seats = [];
        for($i = 0; $i < 20; $i++){
            $seats [] = $i;
        }
        $block = [
            ['label' => 'A',
                'seats' => $seats
            ],
            ['label' => 'B',
                'seats' => $seats
            ],
            ['label' => 'C',
                'seats' => $seats
            ],
            ['label' => 'D',
                'seats' => $seats
            ]
        ];

        return $this->twig($app)->render('/Home/svg.html.twig', [
            'block' => $block
        ]);
    }

    /**
     * @param Application $app
     * @param Request $request
     * @return string
     */
    public function svg2Action(Application $app, Request $request){

        if($request->getMethod() == 'POST'){
            $data = $request->getContent();
            var_dump($data);die;
        }
        $seats = [];
        for($i = 0; $i < 50; $i++){
            $seats [] = $i;
        }
        $block = [
            'grid' => [
                'block' => 'A1',
                'groups_row' => [0],
                'seats' => $seats,
                'groups' => [
                    [
                        'rows' => ['A', 'B', 'C', 'D'],
                        'seats' => [
                            'A' => $seats,
                            'B' => $seats,
                            'C' => $seats,
                            'D' => $seats
                        ]
                    ]
                ]
            ]
        ];

        return $this->twig($app)->render('/Home/svg_v2.html.twig', [
            'block' => json_encode($block, true)
        ]);
    }

    /**
     * @param Application $app
     * @return string
     */
    public function polymerAction(Application $app){

        $users = [
          ['id' => 1, 'name' => "Raulnet"],
          ['id' => 2, 'name' => "Pierre"],
          ['id' => 3, 'name' => "Charle"],
          ['id' => 4, 'name' => "Remi"],
        ];


        return $this->twig($app)->render('Home/polymer.html.twig', [
            'users' => $users
        ]);
    }


}