<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
    	$form = $this->createForm(ContactType::class);

        return $this->render('contact/contact.html.twig', [
            'controller_name' => $form->createView()
        ]);
    }
}