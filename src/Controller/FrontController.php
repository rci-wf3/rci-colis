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
        return $this->render('front/historique.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/cguv", name="front_cguv")
     */
    public function cguv()
    {
        return $this->render('front/cguv.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/mentions-legales", name="front_mentions")
     */
    public function mentions()
    {
        return $this->render('front/mentions.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/FAQ", name="front_FAQ")
     */
    public function FAQ()
    {
        return $this->render('front/FAQ.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

}
