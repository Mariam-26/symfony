<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonBlogController extends AbstractController
{
    /**
     * @Route("/mon/blog", name="app_mon_blog")
     */
    public function index(): Response
    {
        return $this->render('mon_blog/index.html.twig', [
            'controller_name' => 'MonBlogController',
        ]);
    }
}
