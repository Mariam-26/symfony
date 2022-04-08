<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Form\ArticlesFormType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(ArticlesRepository $repo): Response
    {
    // Pr selectionner ls article en BDD ns devons absolumt avoir accès à la classe Repository correspondante  => ici c'est ArticlesRepository Le repository est la classe générée automatiquemt lorsque l'on crée une entité cette classe permet de faire uniquemt ds sélections (requête SELECT * FROM etc) Pr faire une sélection à partir de ntre classe Repository on instancie  $repo en  paramètre de la méthode. Cet objet va contenir ds méthodes qui permettront d'exécuter ds reqêtes Par ex : 
    // - findAll() correspond à un SELECT *
    // -findBy() correspond à uun SELECT avec ds options

    $article = $repo->findBy(array(), array('createdAt' => 'desc'));
    // équivalent SQL = SELECT * FROM articles ORDER BY created DESC * fetchAll




        return $this->render('blog/index.html.twig', [
            'items' => $article,
            // je transmets ds la variable item ls élémts qui se trouvent ds $article (ls élémts de la BDD)
        ]);
    }

    /* CECI EST UN COMMENTAIRE // une annotation prendra 2 étoiles aprèd le  premier slash et elle sera analysé par notre navigation */

    /**
     * @Route("/blog/show/{id} ", name="show")
     */

     public function show(Articles $article): Response
     {
         return $this->render('blog/show.html.twig', array(
             'article' => $article,
         ));
     }

     /**
      * @Route("/blog/new", name="new")
      * @Route("/blog/edit/(id", name="edit")
      */

      public function create(Articles $articleNew = null, Request $requete, EntityManagerInterface $manager) : Response
      {
        if(!$articleNew) {
            $articleNew = new Articles();
        }

        $form = $this->createForm(ArticlesFormType::class, $articleNew);
        // ici on met en paramètres la clsse d'après laquelle on veut créer notre formulaire

        $form->handleRequest($requete);

        // on pioche la méthode handleRequest() de la class Request du composant HTTPFondation => ça va ns permettre de récupére chaque saisie facile ds le formulaire $_POST['article'] etc. et de ls lier directemt ds $articleNew

        if($form->isSubmitted() && $form->isValid())
        {
            if(!$articleNew->getId()) /* si l'id n'exist ps ce n'est pas une modification, c'est un ajout d'article */ 
            {
                $articleNew->setCreatedAt(new \DateTime()); /* met à la date et à l'heure de la publication */
            }

            $manager->persist($articleNew); /* on met ent memoire ls données récupérés ds la formulaire */

            $manager->flush(); /* envoi ds données ds la BDD */

            return $this->redirectToRoute('show', [
                'id' => $articleNew->getId(), /* on redirige vers la page show de l'article créé */
            ]);
        }

        return $this->render('blog/new.html.twig', [
            'form' => $form->createView(), /* ici on renvoie le formulaire avec ts ls champs requis pr l'insertion en BDD et on renvoie une vue gr^ce au createView() */
            'modeEdit' => $articleNew->getId(),
        ]);
      }
}
