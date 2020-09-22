<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ContactRepository $contactRepository)
    {
        $contacts = $contactRepository->findBy(array(), array('firstname'=>'ASC'));
        return $this->render('contact/index.html.twig',compact('contacts'));
    }
}
