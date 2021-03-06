<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RCI;

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

    /**
     * @Route("/relais", name="front_relais")
     */
    public function relais()
    {
        $relais = $this->getDoctrine()->getRepository(RCI::class)->findAll();
        return $this->render('front/relais.html.twig', [
            'controller_name' => 'FrontController',
            'relais' => $relais,
        ]);
    }


    /**
     * @Route("/tarifs", name="front_tarifs")
     */
    public function tarifs()
    {
        return $this->render('front/tarifs.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/professionel", name="front_professionel")
     */
    public function professionel()
    {
        return $this->render('front/professionel.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/commande", name="front_commande")
     */
    public function commande()
    {
        return $this->render('front/commande.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/formule_devis", name="front_formule_devis")
     */
    public function formule_devis()
    {
        return $this->render('front/formule_devis.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/formule_unite", name="front_formule_unite")
     */
    public function formule_unite()
    {
        return $this->render('front/formule_unite.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/devenir_rci", name="front_devenir_rci")
     */
    public function devenir_rci()
    {
        return $this->render('front/devenir_rci.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/confidentialite", name="front_confidentialite")
     */
    public function confidentialite()
    {
        return $this->render('front/confidentialite.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/cookies", name="front_cookies")
     */
    public function cookies()
    {
        return $this->render('front/cookies.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/credits", name="front_credits")
     */
    public function credits()
    {
        return $this->render('front/credits.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
