<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MoviesController extends AbstractController
{
     #[Route('/movies', name: 'movies_index')]
    public function movies(): Response
    {
        return $this->render('movies/movies.html.twig', [
            'movies' => 'Page movies',
         ]);
    }

}
