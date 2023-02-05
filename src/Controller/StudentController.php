<?php 
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 class StudentController extends AbstractController
{
 /**
  * @return Response
  * @Route("/test")
  
  */
 public function index() {
        return new Response("Bonjour mes étudiants");
 }
}

?> 