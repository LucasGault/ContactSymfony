<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll([],[]);
        // dd($contactRepository->findAll());
        return $this->render('contact/index.html.twig', compact('contacts') );
    }

    /**
     * @Route("/contacts/{id<[0-9]+>}", name="app_contacts_show")
     */
    public function show(Contact $contact): Response
    {
        dd($contact);
    }
}
