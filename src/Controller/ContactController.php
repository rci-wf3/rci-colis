<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Swift_Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"GET","POST"})
     */
    public function contact(Request $request, \Swift_Mailer $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $users = $this->getDoctrine()->getRepository()

            $mail = (new Swift_Message("Hello, it's me"))
                ->setFrom('ne-pas-repondre@rci-colis.com')
                ->setTo('ferrand.antony@gmail.com')
                ->setBody(
                    $this->renderView(
                        'email/template.html.twig',
                        [

                        ]
                    ),
                    'text/html'
                );
            
            $mailer->send($mail);

            return $this->redirectToRoute('front_index');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}