<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front_index")
     */
    public function index()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/historique", name="front_historique")
     */
    public function historique()
    {
        return $this->render('front/propos/historique.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
