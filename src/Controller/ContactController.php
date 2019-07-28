<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Swift_Message;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"GET","POST"})
     */
    public function contact(Request $request): Response
    {
        if ($request) {
            # code...
        }
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $users = $this->getDoctrine()->getRepository()

            $mail = (new Swift_Message("Hello, it's me"))
                ->setFrom('ne-pas-repondre@rci-colis.com')
                ->setTo('steelook22@gmail.com')
                ->setBody(
                    $this->renderView(
                        'template.html.twig',
                        [

                        ]
                    ),
                    'text/html'
                );
            
            $mail->msg_send();

            return $this->redirectToRoute('vache_index');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}