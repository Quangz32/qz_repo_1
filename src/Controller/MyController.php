<?php

//I updated on 6pm, 0117
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/my', name: 'app_my')]
    public function index(): Response
    {
        return $this->render('my/index.html.twig', [
            'controller_name' => 'MyController',
        ]);
    }
    
    /**
     * oldMethod
     *
     * @Route("/old", name="old")
     */
    public function oldMethod(): Response {
        return $this->render('my/index.html.twig', [
            'controller_name' => 'MyController',
        ]);
    }
}
