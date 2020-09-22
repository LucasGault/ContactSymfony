<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

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

    /**
     * @Route("/create", name="app_contact_create")
     */
    public function create(): Response 
    {
        $form = $this->createFormBuilder()
            ->add('firstname')
            ->add('lastname')
            ->add('phonenumber', NumberType::class)
            ->add('submit')
            ->getForm()
        ;

        return $this->render('contact/create.html.twig', [
            'formulaireAjout' => $form->createView()
        ]) ;
    }
}
