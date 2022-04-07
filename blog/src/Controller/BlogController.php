<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
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
}
