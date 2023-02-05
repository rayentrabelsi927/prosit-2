<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    
     
/**
  * @return Response
  * @Route("/test/{name}")
  
  */   
      
     
    
     public function affiche($name): Response
     {
         return new Response ($name) ;
     }




     #[Route('/testteacher/{name}')]

     public function affichet($name): Response
     {
         return $this->render('teacher/showTeacher.html.twig', [
             'name' => $name,
         ]);
     }
}
