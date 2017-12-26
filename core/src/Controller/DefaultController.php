<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     *
     * @Method({"GET"})
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

}
