<?php

namespace AppBundle\Controller;

use GuzzleHttp\Exception\RequestException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Bit8\Client;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
       return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
        
        

        
        
    }


    /**
     * @Route("/api", name="api")
     */
    public function apiAction(Request $request)
    {

       $c =  $this->get('bit8_api.client');


        return $c->getBaseUri();




    }

    /**
     * @Route("/all", name="all")
     */
    public function allAction()
    {
        $response = new Response(
            '{
   "data": {
       "locations": [
           {
               "name": "Eiffel Tower",
               "coordinates": {
                   "lat": 21.12,
                   "long": 19.56
               }
           },
           {
               "name": "Ostankino",
               "coordinates": {
                   "lat": 2156.12,
                   "long": 1956.56
               }
           }
          
       ]
   },
  "success": true
}',
            Response::HTTP_OK,
            array('content-type' => 'application/json')
        );

        return $response;
    }



}
