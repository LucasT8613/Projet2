<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetitesAnnoncesController extends AbstractController
{
    /**
     * @Route("/petites/annonces", name="petites_annonces")
     */
    public function index(): Response
    {
        return $this->render('petites_annonces/index.html.twig', [
            'controller_name' => 'PetitesAnnoncesController',
        ]);
    }
}
