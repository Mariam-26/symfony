<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{ /* JE NE GARDE QUE LE SLASH => première page que l'on voit sur le site  */
    /**
     * @Route("/", name="app_main")
     */
    public function accueil(): Response
    {
        return $this->render('accueil.html.twig', [
           
        ]);
    }


    /**
     * @Route("/cgu", name="app_cgu")
     */
    public function cgu(): Response
    {
        return $this->render('cgu.html.twig', [
           
        ]);
    }
}
