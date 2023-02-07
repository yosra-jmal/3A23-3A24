<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function index($name): Response
    {
        return $this->render('teacher/index.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/teacher', name: 'app_teacher2')]
    public function showteacher(): Response
    {
        return $this->redirectToRoute("app_student");
    }
}
