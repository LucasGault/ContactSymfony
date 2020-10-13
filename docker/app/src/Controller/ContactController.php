<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\User;

use App\Repository\ContactRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\HTTPFoundation\Response;

class ContactController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ContactRepository $contactRepository) : Response 
    {
        $contacts = $contactRepository->findBy(array(), array('firstname'=>'ASC'));
        return $this->render('contact/index.html.twig',compact('contacts'));
    }

    /**
     * @Route("/delete/{id}", name="app_contact_delete", methods={"DELETE"})
     */
    public function delete($id,EntityManagerInterface $em): Response
    {
        $contact = $this->getDoctrine()
        ->getRepository(Contact::class)
        ->find($id);

        $em->remove($contact);
        $em->flush();
        return $this->redirectToRoute('home');
    }
}
