<?php

namespace Bit8\Bundle\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Bit8ApiBundle:Default:index.html.twig');
    }
}
