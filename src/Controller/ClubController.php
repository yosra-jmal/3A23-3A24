<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    #[Route('/getname/{nom}', name: 'getnom')]
    public function getNom($nom): Response
    {
        return $this->render('club/index.html.twig', [
            'name' =>$nom ,
        ]);
    }

}
