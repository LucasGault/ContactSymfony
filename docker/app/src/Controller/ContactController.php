<?php

namespace App\Controller;

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
        $contacts = $contactRepository->findAll();
        return $this->render('contact/index.html.twig',compact('contacts'));
    }
}
