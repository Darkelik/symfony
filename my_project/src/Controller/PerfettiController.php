<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class PerfettiController extends AbstractController
{
    #[Route('/perfetti')]
    public function show(): Response
    {
        return $this->render('perfetti/show.html.twig', [
            
        ]);
    }
}