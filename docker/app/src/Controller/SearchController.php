<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use App\Form\SearchType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class SearchController extends AbstractController
{
        /**
     * @Route("/", name="home")
     */
    public function recherche(Request $request, ContactRepository $repo, PaginatorInterface $paginator) {

        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);
        
        $donnees = $repo->findAll();
 
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
 
            $firstname = $searchForm->getData()->getFirstname();

            $donnees = $repo->search($firstname);


            if ($donnees == null) {
                $this->addFlash('erreur', 'Aucun article contenant ce mot clé dans le titre n\'a été trouvé, essayez en un autre.');
           
            }

    }

     // Paginate the results of the query
     $contacts = $paginator->paginate(
        // Doctrine Query, not results
        $donnees,
        // Define the page parameter
        $request->query->getInt('page', 1),
        // Items per page
        10000
    );

        return $this->render('contact/index.html.twig',[
            'contacts' => $contacts,
            'searchForm' => $searchForm->createView()
        ]);
    }
}
