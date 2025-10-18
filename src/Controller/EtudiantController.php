<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return new Response('Hello from Etudiant Controller!');
    }

    #[Route('/etudiant/{id}', name: 'affichage_etudiant', requirements: ['id' => '\d{2}'])]
    public function affichageEtudiant($id): Response
    {
        return new Response("L'id de l'étudiant est: " . $id);
    }

    #[Route('/etudiant/nom/{name}', name: 'etudiant_name')]
    public function voirNom($name): Response
    {
        return $this->render('etudiant/index.html.twig', [
            'nom' => $name,
        ]);
    }
}