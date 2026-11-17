<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class ConferenceController extends AbstractController
{
    #[Route('/conference/{slug}')]
    public function show(string $slug): Response
    {
        return $this->render('conference/show.html.twig', [
            'conference' => $slug,
            'speakers' => ['Fabien', 'Nicolas', 'Javier'],
        ]);
    }
}