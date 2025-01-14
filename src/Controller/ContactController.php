<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact', methods: ['GET', 'POST'])]
    public function contact(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $subject = $request->request->get('subject');
            $messageContent = $request->request->get('message');

            $contactMessage = new ContactMessage();
            $contactMessage->setName($name);
            $contactMessage->setEmail($email);
            $contactMessage->setSubject($subject);
            $contactMessage->setMessage($messageContent);
            $contactMessage->setCreatedAt(new \DateTime());

            $em->persist($contactMessage); // hnaya kat stager dak l.objet wlkin maktpushihch l db  ( kat prepareh ) 
            $em->flush();  // hna fin kaytpucha l db 

            $this->addFlash('success', 'Your message has been sent successfully!');

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/contact.html.twig');
    }




#[Route('/admin/messages', name: 'admin_messages')]
public function adminMessages(EntityManagerInterface $em): Response
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $messages = $em->getRepository(ContactMessage::class)->findBy([], ['createdAt' => 'DESC']);

    return $this->render('templates/admin/messages.html.twig', ['messages' => $messages, ]);
}

}
