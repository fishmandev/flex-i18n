<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', ['name' => 'world']);
    }

    /**
     * @Route("/pluralization/{quantity}", defaults={"quantity" = 0}, name="pluralization")
     * @param $quantity
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pluralizationAction($quantity)
    {
        return $this->render('default/pluralization.html.twig', ['quantity' => $quantity]);
    }
}
