<?php

//20h53
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/my/{name}', defaults:['name' => null],name: 'app_my')]    
    public function index($name): Response   
    {
        return $this->render('my/index.html.twig', [
            'controller_name' => 'MyController '.$name,
        ]);
    }
}
