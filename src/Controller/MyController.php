<?php
namespace App\Controller;

use App\Entity\Movie;
use App\Repository\ActorRepository;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyController extends AbstractController
{

    private $entityManager;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }

    #[Route('/my', name: 'app_my')]    
    public function index(): Response 
    {   
        $repo = $this->entityManager->getRepository(Movie::class);
        $movie = $repo->findAll();
        dd($movie);
          
        return $this->render('index.html.twig');
    }

    #[Route('/second', name: 'second_route')]    
    public function second(): Response 
    {   
        $repo = $this->entityManager->getRepository(Movie::class);
        $movie = $repo->findBy([],['id'=>'DESC']);
        dd($movie);
          
        return $this->render('index.html.twig');
    }

}
